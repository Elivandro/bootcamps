@extends("template.index")
@section("title", "Recuperar senha")

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
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group-column">
                <h4 class="title-form">Resetar senha</h4>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder=" " value="{{ old('email', $request->email) }}" required/>
                        <label for="email">Email</label>
                    </div>
                </div>
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
                <div class="form-group-btn">
                    <button type="submit" class="btn-empty">Resetar</button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection