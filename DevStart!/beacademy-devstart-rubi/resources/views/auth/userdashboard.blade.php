@extends('template.layout')
@section('title', 'Editar dashboard')

@section('content')
    <main class="container w-50 mt-5">
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
                    <form method="post" action="{{ route('account.updated', Auth::user()->id) }}" class="form-control-lg mb-3">
                        @method('PUT')
                        @csrf
                        <h1 class="mt-3 mb-3">Editar dados pessoais</h1>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" value="{{ Auth::user()->name }} " class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ Auth::user()->email }}" class="form-control" id="email" name="email">
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
                            <label for="birthday" class="form-label">Data Nascimento</label>
                            <input type="date" value="{{ Auth::user()->birthday }}" class="form-control" id="birthday" name="birthday">
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
