<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['category_id'] = $request->categories;

        $this->product->create($data);

        return redirect()->route('products.create')->with('success', 'Produto cadastrado com sucesso!!!');
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('products.show', compact('products'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['category_id'] = $request->categories;

        $this->product->find($id)->update($data);
        return redirect()->route('products.edit', $id)->with('success', 'Produto atualizado com sucesso!!!');
    }
}
