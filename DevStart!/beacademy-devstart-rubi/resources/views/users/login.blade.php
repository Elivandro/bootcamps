@extends('template.layout')
@section('title', 'Entre com sua conta')

@section('content')
<main class="container w-50 mt-5">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if(session('danger'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="form-group p-5 mb-5" style="background-color: #efefef;">
        <form action="{{ route('users.auth') }}" method="post" class="form-control-lg mb-3">
            @csrf
            <h1 class="mt-3 mb-3">Login</h1>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group mb-3">
                <label>Senha</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <a href="#" class="togglePassword float-right">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mt-3 p-3 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                <!-- <div class="mt-3">
                    <input type="checkbox" name="remember" id="remember"/>
                    <label for="remember">Lembrar-me</label>
                </div> -->
                <div class="mt-2">
                    <a href="{{ route('password.request') }}">Esqueci minha senha</a>
                </div>
            </div>
            <div class="text-center mt-4 mb-1">
                <span>Não possui cadastro? </span>&nbsp;
                <a href="{{ route('users.create') }}">Cadastre-se aqui</a>
            </div>
        </form>
    </div>
</main
@endsection
