@extends("template.layout")
@section("title", "Edtar telefone")

@section("content")
<main class="container w-50 mt-5">
        @if($errors->any())
            @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
        @endif
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <div class="row">
                <div class="col-md-12">
                <form action="{{ route('updatephone.updated', $phone->id) }}" method="post" class="form-control-lg mb-3">
                    @method("PUT")
                    @csrf
                        <h1 class="mt-3 mb-3">Editar telefone</h1>
                        <div class="form-group mb-3">
                            <label for="phone">Telefone</label>
                            <input type="tel" name="phone" value="{{ $phone->phone }}" class="form-control" id="phone" placeholder="telefone">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Descrição</label>
                            <input type="text" class="form-control" name="description" value="{{ $phone->description }}" id="description" placeholder="descrição">
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection