<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Product,
    User
};

class IndexController extends Controller
{
    protected $user;

    public function __construct(Product $products, User $user) 
    {
        $this->productsModel = $products;
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $products = $this->productsModel->getProducts($request->search ?? '');
        return view('index', compact('products'));
    }

    public function contact()
    {
        return view("contact");
    }

    public function cart()
    {
        return view("cart");
    }

    public function buyDirect($id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "maxQuantity" => $product->quantity,
                    "sale_price" => $product->sale_price,
                    "image" => $product->image,
                    "cost_price" => $product->cost_price,
                    "category_id" => $product->category_id
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('index.cart');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);

            return redirect()->route('index.cart');
        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "maxQuantity" => $product->quantity,
            "sale_price" => $product->sale_price,
            "image" => $product->image,
            "cost_price" => $product->cost_price,
            "category_id" => $product->category_id
        ];
        session()->put('cart', $cart);
        return redirect()->route('index.cart');
    }

    public function addCart($id)
    {
        $product = Product::find($id);

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "maxQuantity" => $product->quantity,
                    "sale_price" => $product->sale_price,
                    "image" => $product->image,
                    "cost_price" => $product->cost_price,
                    "category_id" => $product->category_id
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success','Produto adicionado no carrinho com sucesso');
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Produto adicionado no carrinho com sucesso');
        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "maxQuantity" => $product->quantity,
            "sale_price" => $product->sale_price,
            "image" => $product->image,
            "cost_price" => $product->cost_price,
            "category_id" => $product->category_id
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produto adicionado no carrinho com sucesso');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Carrinho atualizado com sucesso');
        }
    }

    public function delete(Request $request) 
    {
        if($request->id) {
            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            session()->flash('success', 'Produto removido com sucesso');
        }
    }

    public function confirmm()
    {
        if(Auth::check()) {
            return view('confirm');
        } else {
            return redirect()->route('users.login');
        }
    }
}