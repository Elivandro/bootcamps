@extends("template.index")
@section("title", "Admin: listar usuarios")

@section("content")
<main class="main">
    <div class="max-container">
        <div class="container">
        @foreach($users as $user)
            <div class="card" style="width: 18rem;">
                <img src="../assets/img/users/foto.png" alt="imagem de {{ $user->name }}" class="profile">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text"></p>
                </div>
                <div class="card-content">
                    <i>{{ $user->email }}</i>
                    <i>CPF: {{ $user->cpf }}</i>
                    <br/>
                    <br/>
                    @foreach($user->phones as $phone)

                        <i>Phone: {{ $phone->phone }}</i>
                        <br/>

                    @endforeach
                    <br/>

                    @foreach($user->addresses as $address)

                        <i>Address: {{ $address->address }}</i>
                        <br/>
                        <i>District: {{ $address->district }}</i>
                        <br/>
                        <i>ZipCode: {{ $address->zip_code }}</i>
                        <br/>
                        <br/>

                    @endforeach
                    <i>City: {{ $user->city }}</i>
                    <br/>
                    <i>State: {{ $user->state }}</i>
                    <br/>
                    <i>Country: {{ $user->country }}</i>
                    <br/>
                    <i>UserType: {{ $user->userType }}</i>
                </div>
                <div class="card-btn">
                    <a href="#" class="btn">EDITAR</a>
                    <a href="#" class="btn">EXCLUIR</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</main>
@endsection