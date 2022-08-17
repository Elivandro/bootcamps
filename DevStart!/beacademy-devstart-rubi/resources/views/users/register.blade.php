@extends('template.layout')
@section('title', 'Cadastrar usuário')

@section('content')
    <main class="container w-50 mt-5">
        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif

        <div class="modal-dialog" role="document">
            <div class="modal-content p-5" style="background-color: #efefef;">
                <div class="modal-body text-dark">
                    <form method="post" action="{{ route('users.store') }}" class="form-control-lg mb-3">
                        @csrf
                        <h1 class="mt-3 mb-3">Cadastrar Usuário</h1>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="password">Senha</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                    <a href="#" class="togglePassword float-right">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                    </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="phone" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="row">
                                    <div class="col-md-8">
                                    <label for="district">Endereço</label>
                                        <input type="text" name="address" class="form-control form-control" id="address">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="district">Número</label>
                                        <input type="number" name="number" class="form-control form-control" id="number">
                        </div>
                        <div class="form-group mb-3">
                            <label for="district">Bairro</label>
                            <input type="text" class="form-control" name="district" id="district">
                        </div>
                        <div class="form-group mb-3">
                            <label for="postal_code">CEP</label>
                            <input type="text" class="form-control" name="postal_code" id="postal_code">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>

                        <div class="form-group mb-3">
                            <label for="state" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="state" name="state">
                        </div>
                        <div class="form-group mb-3">
                            <label for="country" class="form-label">País</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>

                        <div class="form-group mb-3">
                            <label for="birthday" class="form-label">Data Nascimento</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
