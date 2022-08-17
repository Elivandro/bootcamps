@extends("template.user")
@section("title", "Listar postagens de {$user->name}")

@section("content")
    <div class="container mt-5">
        <h1>{{ $user->name }} postagen's</h1>

        @foreach($posts as $post)
            <div class="mt-2 mb-1">
                <label class="form-label">identificação Nº: {{ $post->id }}</label>
                <br/>
                <label class="form-label">status: {{ $post->active?"ativo":"inativo" }}</label>
                <br/>
                <label class="form-label">Titulo: {{ $post->title }}</label>
                <br/>
                <textarea class="form-control" rows="3" style="resize: none;">{{ $post->post }}</textarea>
                <br/>
            </div>
        @endforeach
    </div>
@endsection