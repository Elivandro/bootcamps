@extends('template.layout')
@section('title', 'Alterar Categoria')
@section ('content')
<main class="container w-50 mt-5">
    <div class="form-control-lg" style="background-color: #efefef;">
        <div class="form-control-lg mb-3">
            <h1>Editar Categoria</H1>
            <form action="{{ route('categories.update', $category->id) }}" method="POST" >
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="Name" value="{{$category->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</main>
@endsection