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
        @if(session('status'))
            <div class="card-success" role="alert">
                <div>
                    {{ session('status') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group-column">
                <h4 class="title-form">Recuperar senha</h4>
                <div class="form-group-row">
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder=" " required/>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="form-group-btn">
                    <button type="submit" class="btn-empty">Solicitar Recuperação</button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection