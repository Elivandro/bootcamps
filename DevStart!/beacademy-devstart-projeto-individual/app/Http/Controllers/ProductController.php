<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    protected $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function index(Request $request)
    {
        $products = $this->products->getProducts($request->search ?? '');

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data   = $request->all();
        $this->products->create($data);


        return redirect()->route("products.index")->with('create', "produto cadastrado com sucesso!");
    }

    public function edit($id)
    {
        if(!$product = $this->products->find($id)){
            return redirect()->view("products.index");
        }

        return view('products.update', compact("product"));
    }

    public function update(Request $request, $id)
    {
        if(!$product = $this->products->find($id))
            return redirect()->route("products.index");

        $data = $request->all();

        $product->update($data);
        return redirect()->route("products.index")->with('update', "Bonsai atualizado com sucesso!");
    }

    public function delete($id)
    {
        if(!$product = $this->products->find($id))
            return redirect()->route("products.index");

        $product->delete();

        return redirect()->route("products.index")->with('destroy', "Bonsai deletado com sucesso!");
    }
}
