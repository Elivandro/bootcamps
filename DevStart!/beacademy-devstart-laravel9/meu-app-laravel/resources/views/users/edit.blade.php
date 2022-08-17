@extends("template.user")
@section("title", $user->name . " User edit")

@section("content")
<div class="container w-50 mt-5">
    <h1>Editar {{ $user->name }}</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                        {{ $error }}
                        <br/>
                @endforeach
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <div class="mb-3">
            <input type="nome" value="{{ $user->name }}" name="name" class="form-control" placeholder="digite seu nome">
        </div>
        <div class="mb-3">
            <input type="email" value="{{ $user->email }}" name="email" class="form-control" placeholder="digite seu email">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="digite sua senha"/> 
        </div>
        <div class="mb-3">
            <input type="file" name="image" id="image" class="form-control form control-md" />
        </div>
        @if(Auth::user()->is_admin == 2)
        <div class="mb-3">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Definir Administrador
            </label>
        </div>
        @endif
        <button type="submit" class="btn btn-outline-dark btn-sm">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-outline-primary btn-sm">VOLTAR</a>
    </form>
</div>
@endsection