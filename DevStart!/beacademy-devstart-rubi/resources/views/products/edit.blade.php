@extends('template.layout')
@section('title', 'Editar Produto')
@section ('content')

<main class="container w-50 mt-5">
  <div class="form-control-lg" style="background-color: #efefef;">
    <div class="form-control-lg">
      @if($errors->any())
        <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>
      @endif
      <form action="{{ route('products.update', $product->id) }}" method="POST" class="form-control-lg" enctype="multipart/form-data">
        <h1> Editar Produto</h1>
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
          <select name="categories" class="form-select" aria-label="Default select example">
            <option>Selecione uma categoria</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrição</label>
          <textarea class="form-control" id="description" name="description" style="resize: none">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantidade</label>
          <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="mb-3">
          <label for="cost" class="form-label">Preço de Custo</label>
          <input type="number" class="form-control" id="cost" name="cost_price" value="{{ $product->cost_price }}">
        <div class="mb-3">
          <label for="sale" class="form-label">Preço</label>
          <input type="number" class="form-control" id="sale" name="sale_price" value="{{ $product->sale_price }}">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Imagem</label>
          <input type="text" class="form-control" id="image" name="image"value="{{ $product->image }}">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Editar</button>
      </form>
    </div>
  </div>
</main>
@endsection
