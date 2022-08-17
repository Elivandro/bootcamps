@extends("template.index")
@section("title", "Cadastrar espécime para mostruario")

@section("content")
<main class="main margem-top">
    <section class="max-container">
        <form action="{{ route('products.update', $product->id) }}" method="post" class="form">
            @method("PUT")
            @csrf
            <div class="form-group-column">
                <h4 class="title-form">Cadastrar nova bonsai</h4>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="nickname" value="{{ $product->nickname }}" id="nickname" placeholder=" " required/>
                        <label for="nickname">Nome Popular</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" value="{{ $product->name }}" id="name" placeholder=" " required/>
                        <label for="name">Nome Científico</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{ $product->description }}" id="description" placeholder=" " required/>
                        <label for="description">Descrição</label>
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="specie" value="{{ $product->specie }}" id="specie" placeholder=" " required/>
                        <label for="specie">Espécie</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="origin" value="{{ $product->origin }}" id="origin" placeholder=" " required/>
                        <label for="origin">Origem</label>
                    </div>
                    <div class="form-group">
                        <input type="number" name="height" value="{{ $product->height }}" id="height" placeholder=" " required/>
                        <label for="height">Altura Apróximada</label>
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="substract" value="{{ $product->substract }}" id="substract" placeholder=" " required/>
                        <label for="substract">Substrato</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Fertilizing" value="{{ $product->Fertilizing }}" id="Fertilizing" placeholder=" " required/>
                        <label for="Fertilizing">Adubação</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="image" value="{{ $product->image }}" id="image" placeholder=" " required/>
                        <label for="image">Imagem</label>
                    </div>
                </div>
                <div class="form-group-btn">
                    <button type="submit" class="btn-empty">CADASTRAR</button>
                </div>
            </div>
        </form>
</main>
@endsection