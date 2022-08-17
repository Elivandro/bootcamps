@extends("template.user")
@section("title", "Criar Usario")

@section("content")
<div class="container w-50 mt-5">
    <h1>Novo usuario</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                        {{ $error }}
                        <br/>
                @endforeach
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="nome" name="name" class="form-control" placeholder="digite seu nome">
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="digite seu email">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="digite sua senha"/> 
        </div>
        <div class="mb-3">
            <input type="file" name="image" id="image" class="form-control form control-md" />
        </div>
        <button type="submit" class="btn btn-outline-dark btn-sm">NOVO</button>
        <a href="{{ route('users.index') }}" class="btn btn-outline-primary btn-sm">VOLTAR</a>
    </form>
</div>
@endsection