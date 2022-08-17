@extends('template.layout')
@section('title', "Dashboard: ". Auth::user()->name)

@section('content')
@if(Auth::user()->userType == 1)
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card-counter primary">
                    <i class="fa-solid fa-user"></i>
                    <span class="count-numbers">{{ count($users) }}</span>
                    <span class="count-name">Clientes cadastrados</span>
                </div>
            </div>
            <div class="col">
                <div class="card-counter danger">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="count-numbers">368</span>
                    <span class="count-name">Compras Realizadas</span>
                </div>
            </div>
            <div class="col">
                <div class="card-counter success">
                    <i class="fa fa-wine-glass"></i>
                    <span class="count-numbers">{{ count($products)}}</span>
                    <span class="count-name">Produtos Disponíveis</span>
                </div>
            </div>
        </div>
    </div>
@endif
        <div class="container w-50 mt-5">
            @if(isset($error))
            <div class="alert alert-primary" role="alert">
                {{ $error }}
            </div>
            @endif
            @if(session()->has('destroy'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong> {{ session()->get('destroy') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong> {{ session()->get('create') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('edit'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong> {{ session()->get('edit') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="form-control-lg mb-5" style="background-color: #efefef;">
            <div class="container pb-5">
            <div class="row">
                <div class="col p-3">
                    <div>
                        <div class="d-flex">
                            <h2>Dashboard</h2>
                            <div style="margin-left: 10px">
                                <a href="{{ route('account.update') }}" class="btn btn-outline-dark btn-sm">Editar</a>
                            </div>
                        </div>
                    </div>
                        <div>
                            <div>
                                {{ Auth::user()->name }}
                            </div>
                            <div>
                                {{ Auth::user()->email }}
                            </div>
                            <div>
                                {{ formatDate(Auth::user()->birthday) }}
                            </div>
                            <div>
                            {{ formatCnpjCpf(Auth::user()->cpf) }}
                            </div>
                        </div>
                </div>
                <div class="col p-3">
                    <div class="d-flex">
                        <div class="form-control-lg float-end">
                            <div>
                                @if(Auth::User() && Auth::User()->userType == 1)
                                    <a href="{{ route('products.create') }}" class="btn btn-outline-dark m-1">
                                        <i class="fa-solid fa-circle-plus">&nbsp;</i>Novo produto
                                    </a>
                                    <a href="{{ route('categories.show') }}" class="btn btn-outline-dark m-1">
                                        <i class="fa-regular fa-square-plus">&nbsp;</i>Categorias
                                    </a>
                                @endif
                                <a href="{{ route('orders.index') }}" class="btn btn-outline-dark m-1">
                                    <i class="fa fa-shopping-bag">&nbsp;</i>Pedidos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col p-2">
                    <div>
                        <h3>Telefones</h3>
                        <a href="{{ route('regphone.index') }}" class="btn btn-outline-dark btn-sm">Adicionar Telefones</a>
                    </div>
                    @foreach(Auth::user()->Phones as $phone)
                    <div>
                        {{ formatPhoneNumber($phone->phone) }}
                        {{ $phone->description }}
                    </div>
                    <div>
                        <form action="{{ route('phone.destroy', $phone->id) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <a href="{{ route('editphone.index', $phone->id) }}" class="btn btn-primary btn-sm">EDITAR</a>
                            @if(count(Auth::user()->Phones) > 1)
                            <button type="submit" class="btn btn-secondary btn-sm">EXCLUIR</button>
                            @endif
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class="col p-2">
                    <div>
                        <h3>Endereços</h3>
                        <a href="{{ route('regaddress.index') }}" class="btn btn-outline-dark btn-sm">Adicionar Endereços</a>
                    </div>
                        @foreach(Auth::user()->Addresses as $address)
                        <div>
                            <div>
                                {{ $address->address }}
                                {{ $address->district }}
                            </div>
                            <div>
                                {{ formatCep($address->postal_code) }}
                                {{ $address->city }}
                            </div>
                            <div>
                                {{ $address->state }}
                                {{ $address->country }}
                            </div>
                        </div>
                        <div>
                            <form action="{{ route('address.destroy', $address->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <a href="{{ route('editaddress.index', $address->id) }}" class="btn btn-primary btn-sm">EDITAR</a>
                                @if(count(Auth::user()->Addresses) > 1)
                                <button type="submit" class="btn btn-secondary btn-sm">EXCLUIR</button>
                                @endif
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
