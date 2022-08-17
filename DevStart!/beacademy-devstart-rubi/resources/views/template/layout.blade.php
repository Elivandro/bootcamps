<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="{{ asset('assets/css/ageWall.css') }}">
    </head>
<body>
    <div class="overlay-age-wall">
        <div class="box">
            <p>Você tem 18 anos ou mais?</p>
            <div class="box-btns">
                <button type="submit" onclick="notAdult()" class="box-btn box-btn-outline" id="btn-age-no">NÃO</button>
                <button type="submit" onclick="adult()" class="box-btn" id="btn-age-yes">SIM</button>
            </div>
        </div>
    </div>

    <div class="overlay-age-wall-warning">
        <div class="box">
            <p>Você precisa ter 18 anos ou mais para consumir bebidas alcoólicas.</p>
            <div class="box-btns">
                <button type="submit" onclick="back()" class="box-btn box-btn" id="btn-age-no">VOLTAR</button>
            </div>
        </div>
    </div>

    <header class="header">
        <figure>
            <img src="{{ asset('assets/images/banner-bottles.jpg') }}" alt="imagem de garrafas vazias"/>
        </figure>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse max-container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2"><a href="{{ route('index.index') }}" class="btn btn-outline-dark"><i class="fa fa-store">&nbsp;</i>Produtos</a></li>
                <li class="nav-item p-2"><a href="{{ route('users.login') }}" class="btn btn-outline-dark"><i class="fa fa-user">&nbsp;</i>Conta</a></li>
                <li class="nav-item p-2"><a href="{{ route('index.contact') }}" class="btn btn-outline-dark"><i class="fa fa-phone">&nbsp;</i>Contato</a></li>
                @if(session('cart'))
                    <li class="nav-item p-2">
                        <a href="{{ route('index.cart') }}" class=" btn btn-outline-dark">
                            <i class="fa fa-shopping-cart">&nbsp;</i>
                                Carrinho
                            <span class="badge rounded-pill bg-danger">{{ count(session('cart')) }}</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item p-2">
                        <a href="" role="button" class="btn btn-outline-dark">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Carrinho vazio
                        </a> 
                    </li>
                @endif
                @if(Auth::User())
                    <li class="nav-item p-2">
                        <a href="{{ route('account.logout') }}" class="btn btn-outline-dark">
                            <i class="fa-solid fa-door-open">&nbsp;</i>Logout</a>
                    </li>
                @endif
            </ul>
        </nav>
    </header>
    @yield("content")
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
@yield('scripts')
<script src="{{ asset('assets/js/ageWall.js') }}"></script>
</html>
