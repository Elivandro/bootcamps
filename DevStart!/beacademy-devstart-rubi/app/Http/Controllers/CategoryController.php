<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{

    protected $category;

    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){

        $data = $request->all();
        $this->model->create($data);
        return redirect()->route('categories.show')->with('success', 'Categoria criada com sucesso!');
    }
    public function show(){
        $categories = Category::all();
        return view('categories.show', compact('categories'));
    }
    public function edit($id){
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, $id){
        $data = $request->all();
        $category = Category::find($id);
        $category->update($data);
        return redirect()->route('categories.show')->with('success', 'Categoria atualizada com sucesso!');
    }
}