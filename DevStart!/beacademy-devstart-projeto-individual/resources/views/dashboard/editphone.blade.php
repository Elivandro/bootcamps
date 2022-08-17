@extends("template.index")
@section("title", "Adicionar novo telefone")

@section("content")
<main class="main">
    <section class="max-container">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    {{ $error }}
                    <br/>
                @endforeach
            </div>
        @endif
        <form action="{{ route('updatephone.updated', $phone->id) }}" method="post" class="form">
            @method("PUT")
            @csrf
            <div class="form-group-column">
                <h4 class="title-form">Adicionar telefone</h4>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" value="{{ $phone->description }}"  name="description" id="description" placeholder=" " required/>
                        <label for="description">Descrição</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" value="{{ $phone->phone }}"  name="phone" id="phone" placeholder=" " required/>
                        <label for="telefone">Telefone</label>
                    </div>
                </div>
                <div class="form-group-btn">
                    <button type="submit" class="btn-empty">Editar</button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection