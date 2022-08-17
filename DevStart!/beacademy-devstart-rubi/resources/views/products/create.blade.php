@extends('template.layout')
@section('title', 'Novo Produto')
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
          <form action="{{ route('products.store') }}" method="POST" class="form-control-lg" enctype="multipart/form-data">
            <h1> Novo Produto</H1>
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="Name">
            </div>
            <div class="mb-3">
              <select name="categories" class="form-select" aria-label="Default select example">
                  <option>Selecione uma categoria</option>
                  @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descrição</label>
              <textarea class="form-control" id="description" name="description" style="resize: none " maxlength="255"></textarea>
            </div>
            <div class="mb-3">
              <label for="quantity" class="form-label">Quantidade</label>
              <input type="number" class="form-control" id="quantity" name="quantity" min="1">
            </div>
            <div class="mb-3">
              <label for="cost" class="form-label">Preço de Custo</label>
              <input type="number" class="form-control" id="cost" name="cost_price">
            </div>
            <div class="mb-3">
              <label for="sale" class="form-label">Preço de Venda</label>
              <input type="number" class="form-control" id="sale" name="sale_price">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label"> Selecione uma Imagem</label>
              <input type="text" class="form-control form control-md" id="image" name="image"/>
            </div>
            <button type="submit" class="btn btn-primary">enviar</button>
          </form>
        </div>
    </div>
</main>
@endsection
