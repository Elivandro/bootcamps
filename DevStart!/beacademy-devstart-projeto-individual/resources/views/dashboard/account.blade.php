@extends("template.index")
@section("title", "Painel de ". Auth::user()->name)

@section("content")
<main class="main margem-top">
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
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif
        @if(session()->has('destroy'))
        <div class="card-success" role="alert">
            <div>
                <strong>Atenção!</strong> {{ session()->get('destroy') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif
        @if(session()->has('create'))
        <div class="card-success" role="alert">
            <div>
                <strong>Atenção!</strong> {{ session()->get('create') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif
        @if(session()->has('edit'))
        <div class="card-success" role="alert">
            <div>
                <strong>Atenção!</strong> {{ session()->get('edit') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif
        @if(session()->has('success'))
        <div class="card-success" role="alert">
            <div>
                <strong>Atenção!</strong> {{ session()->get('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
        @endif
        <div class="card-container margem-top">
            <div class="card-header">
                <div class="upload">
                    <form action="{{ route('image.profile', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(Auth::user()->image)
                        <img src="{{ Auth::user()->image }}"/>
                        <div class="round">
                            <input type="file" name="image" onchange="this.form.submit()">
                            <i class="fa fa-camera" style ="color: #fff;"></i>
                        </div>
                    @else
                        <img src="{{ asset('assets/img/users/avatar.png') }}"/>
                        <div class="round">
                            <input type="file" name="image" onchange="this.form.submit()">
                            <i class="fa fa-camera" style="color: #fff;"></i>
                        </div>
                        @endif
                    </form>
                </div>
                <div class="card-margem-top">
                    <div>
                        <h1>
                            {{ Auth::user()->name }}
                        </h1>
                    </div>
                    <div>
                        {{ Auth::user()->email }}
                    </div>
                    <div>
                        {{ formatDateTime(Auth::user()->birthday) }}
                    </div>
                    <div>
                        {{ formatCnpjCpf(Auth::user()->cpf) }}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-margem-top card-content">
                    <div>
                        <div class="flex-content">
                            <h3>Telefones:</h3>
                            <a href="{{ route('regphone.index') }}" class="btn-sm">Adicionar Telefones</a>
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
                                    <a href="{{ route('editphone.index', $phone->id) }}" class="btn-sm">EDITAR</a>
                                    @if(count(Auth::user()->Phones) > 1)
                                    <button type="submit" class="btn-sm">EXCLUIR</button>
                                    @endif
                            </form>
                        </div>
                        <br/>
                        @endforeach
                    </div>
                    <div>
                        <div class="flex-content">
                            <h3>Endereços:</h3>
                            <a href="{{ route('regaddress.index') }}" class="btn-sm">Adicionar Endereços</a>
                        </div>
                        @foreach(Auth::user()->Addresses as $address)
                        <div>
                            <div>
                                {{  $address->address }}
                                {{  $address->district }}
                                {{  formatCep($address->zip_code) }}
                            </div>
                            <div>
                                {{  $address->city }}
                                {{  $address->state }}
                                {{  $address->country }}
                            </div>
                        </div>
                        <div>
                            <form action="{{ route('address.destroy', $address->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <a href="{{ route('editaddress.index', $address->id) }}" class="btn-sm">EDITAR</a>
                                @if(count(Auth::user()->Addresses) > 1)
                                <button type="submit" class="btn-sm">EXCLUIR</button>
                                @endif
                            </form>
                        </div>
                        <br/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection