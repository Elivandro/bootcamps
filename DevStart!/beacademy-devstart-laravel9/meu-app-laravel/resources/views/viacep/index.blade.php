@extends("template.user")
@section("title", "VIA CEP")

@section("content")
<main class="container mt-5">
    <h3 class="text-center">BUSCAR CEP</h3>
    <form action="{{ route('viacep.index.post'); }}" method="post">
        @csrf
        <input type="text" name="cep" placeholder="digite seu cep"/>
        <button type="submit">BUSCAR CEP</button>
    </form>
@endsection