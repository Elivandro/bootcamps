@extends("template.index")
@section("title", "Mostruario de bonsais")

@section("content")
<main class="main">
    <section class="max-container">
        @if($errors->any())
            <div class="card-success" role="alert">
                <div>
                    <strong>Atenção!</strong>
                        @foreach($errors->all() as $error)
                        <div>
                            {{ $error }}
                        </div>
                        @endforeach
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('create'))
            <div class="card-success" role="alert">
                <div>
                    {{ session('create') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('update'))
            <div class="card-success" role="alert">
                <div>
                    {{ session('update') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('destroy'))
            <div class="card-success" role="alert">
                <div>
                    {{ session('destroy') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <section>
            <form action="{{ route('products.index') }}" method="GET" class="form">
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="search" name="search" id="search" placeholder=" "/>
                        <label for="search">Faça uma busca!</label>
                    </div>
                    <button type="submit" class="btn-sm">BUSCAR</button>
                </div>
            </form>
        </section>
        <section>
            <div class="card-product-group-wrap">
                <div class="card-product-group">
                    @foreach($products as $product)
                        <div class="card-product">
                            <div>
                                <div>
                                    <figure>
                                        <img src="{{ $product->image }}" class="card-image"/>
                                    </figure>
                                </div>
                                <div class="card-product-content">
                                    <h3>{{ $product->name }}</h3>
                                    <div class="card-flex-content">
                                        <div>
                                            <h5>Nome Popular:</h5>
                                        </div>
                                        <div>
                                            <span class="card-product-value">{{ $product->nickname }}</span>
                                        </div>
                                    </div>
                                    <div class="card-flex-content">
                                        <div>
                                            <div>
                                                <h5>Descrição:</h5>
                                            </div>
                                            <div>
                                                <span class="card-product-value">{{ $product->description }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-flex-content">
                                        <div>
                                            <h5>Espécie:</h5>
                                        </div>
                                        <div>
                                            <span class="card-product-value">{{ $product->specie }}</span>
                                        </div>
                                    </div>
                                    <div class="card-flex-content">
                                        <div>
                                            <h5>Origem:</h5>
                                        </div>
                                        <div>
                                            <span class="card-product-value">{{ $product->origin }}</span>
                                        </div>
                                        <div>
                                            <h5>Altura Aproximada</h5>
                                        </div>
                                        <div>
                                            <span class="card-product-value">{{ $product->height }} Metros</span>
                                        </div>
                                    </div>
                                    <div class="card-flex-content">
                                        <div>
                                            <h5>Substrato:</h5>
                                        </div>
                                        <div>
                                            <span class="card-product-value">{{ $product->substract }}</span>
                                        </div>
                                    </div>
                                    <div class="card-flex-content">
                                        <div>
                                            <h5>Adubação:</h5>
                                        </div>
                                        <div>
                                            <span class="card-product-value">{{ $product->Fertilizing }}</span>
                                        </div>
                                    </div>
                                    <div class="remove-card-product">
                                        <div>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @method("DELETE")
                                                @csrf
                                                @if(Auth::user() && Auth::user()->userType == 1)
                                                <button type="submit"><i class="fa-solid fa-xmark"></i></button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                    <div class="update-card-product">
                                        @if(Auth::user() && Auth::user()->userType == 1)
                                            <a href="{{ route('products.edit', $product->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="justify-content-center pagination">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
        </section>
    </section>
</main>
@endsection