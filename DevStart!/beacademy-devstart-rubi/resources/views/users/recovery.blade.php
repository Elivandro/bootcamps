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
  @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
  @endif
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #efefef;">
      <div class="modal-body text-dark">
        <form action="{{ route('password.email') }}" method="POST" class="form-control-lg mb-3">
          @csrf
          <h1 class="mt-3 mb-3">Recuperar senha</h1>
          <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Digite email cadastrado">
          </div>
          <button type="submit" class="btn btn-primary btn-block mt-3">Solicitar recuperação</button>
        </form>
      </div>
    </div>
  </div>
</main @endsection
