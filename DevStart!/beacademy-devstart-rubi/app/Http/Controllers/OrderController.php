<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Address;
use Dompdf\Dompdf;

class OrderController extends Controller
{

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Meus Pedidos";
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('orders.index')->with("viewData", $viewData);
    }

    public function create()
    {
        return view("orders.create");
    }

    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route("orders.index");
    }

    public function edit($id)
    {
        $order = Order::where("id", $id)->first();
        if(!empty($order)) {
            return view("orders.edit");
        } else {
            return redirect()->route("orders.index");
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'cost' => $request->cost,
            'sale' => $request->value,
            'image'=>$request->image
        ];

        Order::where('id', $id)->update($data);
        return redirect()->route("orders.index");
    }

    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        return redirect()->route("orders.index");
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function payments(Request $request)
    {
        $total = 0;
        $cart = session()->get('cart');

        foreach($cart as $c) {
            $total += $c['sale_price'];
        }

        $data = $request->all();
        
        $dataApi = [
            "transaction_type" => $data['transaction_type'],
            "transaction_amount" => $total,
            "transaction_installments" => $data['customer_name'],
            "customer_name" => $data['customer_name'],
            "customer_document" => $data['customer_document'],
        ];

        if($data['transaction_type'] == 'card') {
            $dataApi["customer_card_number"] = $data['customer_card_number'];
            $dataApi["customer_card_expiration_date"] = $data['customer_card_expiration_date'];
            $dataApi["customer_card_cvv"] = $data['customer_card_cvv'];
        }

        if($data['transaction_type'] == 'ticket') {
            $data = [
                'name' => Auth::user()->name,
                'cpf' => $request->customer_document,
                'total' => $total,
                'cart' => $cart,
                'address' => Address::find(Auth::user()->id)
            ];
    
            $dompdf = new Dompdf();
            $dompdf->loadHtml(view('orders.boleto', compact('request','data')));
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $dompdf->stream();
            
            return view('orders.boleto', compact('data', 'request'));
        }

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'token' => 'UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ=='
        ])->post('https://tracktools.vercel.app/api/checkout', $dataApi);

        $transaction = $response['transaction'];
        $transaction['status'];

        if ($transaction['status'] == 'paid') {            
            foreach ($cart as $pedido) {
                $order = new Order;
                $order->name = $pedido['name'];
                $order->quantity = $pedido['quantity'];
                $order->sale_price = $pedido['sale_price'];
                $order->image = 'null.png';
                $order->cost_price = $pedido['cost_price'];
                $order->category = $pedido['category_id'];
                $order->user_id = Auth::user()->id;
                $order->save();
                session()->forget('cart');
            }

            return view('orders.paid', compact('response'));
        } else {
            return view('orders.refused', compact('response'));
        }
    }
    
    public function show()
    {
        return view('orders.details');
    }
}
