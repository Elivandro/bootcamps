@extends('template.layout')
@section('title', 'Recupere a sua senha')
@section('content')

<main class="container w-50 mt-5 mb-5">

  @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
    @endforeach
  @endif

  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
      <div class="modal-body text-dark">
        <form action="{{ route('password.update') }}" method="POST" class="form-control-lg mb-3">
          @csrf
          <input type="hidden" name="token" value="{{ $request->route('token') }}">
          <h1 class="mt-3 mb-3">Recuperar senha</h1>
          <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $request->email) }}"/>
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
          <button type="submit" class="btn btn-primary btn-block mt-3">Recuperar senha</button>
        </form>
      </div>
    </div>
  </div>
</main @endsection
