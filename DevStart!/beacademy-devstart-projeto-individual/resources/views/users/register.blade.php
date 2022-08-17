@extends("template.index")
@section("title", "Página de cadastro")

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
        <form action="{{ route('register') }}" method="post" class="form" name="register">
            @csrf
            <div class="form-group-column">
                <h4 class="title-form">Criar conta</h4>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="name" id="nome" placeholder=" " required/>
                        <label for="nome">Nome Completo</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" id="phone" placeholder=" " required/>
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder=" " required/>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder=" " class="form-control" required/>
                        <label for="password">password</label>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="#" class="togglePassword">
                                    <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cpf" id="cpf" min="0" maxlength="14" placeholder=" " required/>
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" id="address" placeholder=" " required/>
                        <label for="address">Endereço</label>
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="district" id="district" placeholder=" " required/>
                        <label for="district">Bairro</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="zip_code" id="zipcode" placeholder=" " required/>
                        <label for="zipcode">CEP</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" id="city" placeholder=" " required/>
                        <label for="city">Cidade</label>
                    </div>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="text" name="state" id="state" placeholder=" " required/>
                        <label for="state">Estado</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" id="country" placeholder=" " required/>
                        <label for="country">País</label>
                    </div>
                    <div class="form-group">
                        <input type="date" name="birthday" id="birthday" placeholder=" " required/>
                        <label for="birthday">Nascimento</label>
                    </div>
                </div>
                <div class="form-group-btn">
                    <button type="submit" class="btn-empty">CADASTRAR</button>
                    <a href="{{ route('login') }}" class="btn-empty">ENTRAR</a>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection