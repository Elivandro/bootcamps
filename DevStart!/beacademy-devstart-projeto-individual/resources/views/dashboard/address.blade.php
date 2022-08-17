@extends("template.index")
@section("title", "Adicionar novo endereço")

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
        <form action="{{ route('create.address', Auth::user()->id) }}" method="post" class="form">
            @csrf
            <div class="form-group-column">
                <h4 class="title-form">Adicionar endereço</h4>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="address" id="address" placeholder=" " required/>
                        <label for="address">Endereço</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="district" id="district" placeholder=" " required/>
                        <label for="district">Bairro</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="zip_code" id="zip_code" placeholder=" " required/>
                        <label for="zip_code">CEP</label>
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="city" id="city" placeholder=" " required/>
                        <label for="city">Cidade</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="state" id="state" placeholder=" " required/>
                        <label for="state">Estado</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" id="country" placeholder=" " required/>
                        <label for="country">País</label>
                    </div>
                </div>
                <div class="form-group-btn">
                    <button type="submit" class="btn-empty">Adicionar</button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection