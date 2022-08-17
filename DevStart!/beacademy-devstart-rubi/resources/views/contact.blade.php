@extends('template.layout')

@section('title', 'contato')

@section('content')
<main class="container w-50 mt-5">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="form-control-lg mb-3">
                        <h1 class="mt-3 mb-3">Entre em contato</h1>
                        <div class="form-group mb-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="mensagem">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="3" maxlength="250" style="resize: none"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
