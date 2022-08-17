@extends("template.layout")
@section("title", "inicio projeto empresarial")
@section("content")
<main>
    <div class="container mt-5">
        @if(session('success'))
            <div class= "col-sm-4 text-center session">
                <p class="alert alert-success mt-3 mb-3 btn-block" style='padding: .375rem .75rem;'>
                    {{ session('success') }}
                </p>
            </div>
        @endif
        <div class="card-deck ">
            <div class="container mt-5 mb-5 w-50">
                <form action="{{ route('index.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search" id="search" placeholder="Ex: Vinho tinto suave..." />
                        <button type="submit" class="btn btn-outline-primary">Buscar vinho</button>
                    </div>
                </form>
            </div>
            <div class="row justify-content-between">
                @foreach($products as $product)
                    <div class="card mb-4" style="width: 18rem;">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="{{ '#JanelaModal'.$product->id }}">
                            @if($product->image)
                                <img src="{{ $product->image }}" class="card-img-top" alt="...">
                            @else
                                <img width="50px" class="card-img-top md" src="{{ asset('assets/images/products/wine/vinho-sem-rotulo.png') }}" alt="Card image cap">
                            @endif
                        </button>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, '65') }}</p>
                            <div>
                                <?php
                                    $category_name = DB::table('categories')->select('name')->where('id','=', $product->category_id)->get();
                                ?>
                                <span class="badge rounded-pill bg-primary">{{$category_name->first()->name}}</span>
                                <hr/>
                                    <p>de: <s>R$ {{ ($product->sale_price) * 1.5 }}</s></p>
                                    <p>por: <strong><i>R$ {{ $product->sale_price }}</i></strong></p>
                                <a href="{{ route('index.buyDirect', $product->id) }}" class="btn btn-outline-primary btn-sm">Comprar</a>
                                <a href="{{ route('index.addCart', $product->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-cart-plus">&nbsp;</i>Carrinho</a>
                                @if(Auth::User() && Auth::User()->userType == 1)
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <section>
        @foreach($products as $product)
            <div class="modal fade" id="{{ 'JanelaModal'.$product->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ '#JanelaModal'.$product->id }}" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $product->name }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if($product->image)
                            <img class="card-img-top md" src="{{ $product->image }}" alt="Card image cap">
                        @else
                            <img width="50px" class="card-img-top md" src="{{ asset('assets/images/products/wine/vinho-sem-rotulo.png') }}" alt="Card image cap">
                        @endif
                        <?php
                            $category_name = DB::table('categories')->select('name')->where('id','=', $product->category_id)->get();
                        ?>
                        <span class="badge rounded-pill bg-primary">{{$category_name->first()->name}}</span>
                        <ul class="list-group list-group-flush text-center mt-5">
                            <li class="list-group-item">{{ $product->description }}</li>
                            <li class="list-group-item">De: <s>R$ {{ ($product->sale_price) * 1.5 }}</s> por: <strong><i>R$ {{ $product->sale_price }}</i></strong></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="{{ route('index.addCart', $product->id) }}" role="button">
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-plus">&nbsp;</i>Adicionar ao Carrinho</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <div class="d-flex justify-content-center m-5">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</main>
@endsection
