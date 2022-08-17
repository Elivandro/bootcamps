<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <header class="container w-75 mt-5 p-3">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a href="{{ route('users.index') }}" class="nav-link text-white">Usuários</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('posts.index') }}" class="nav-link text-white">Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('viacep.index') }}" class="nav-link text-white">Viacep</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="navbar-nav mr-auto">
                                @if(Auth::user())
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white">{{ Auth::user()->name }}</a>
                                    </li>
                                    @if(Auth::user()->is_admin == 1)
                                    <li class="nav-item active">
                                        <a href="{{ route('admin') }}" class="nav-link text-white">Dashboard</a>
                                    </li>
                                    @endif
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link class="nav-link text-white" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Sair') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('login')}}" class="nav-link text-white">Entrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link text-white">Cadastrar</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
        @yield("content")
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>