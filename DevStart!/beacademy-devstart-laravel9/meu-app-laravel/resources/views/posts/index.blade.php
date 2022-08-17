@extends("template.user")
@section("title", "Listagem usuarios")

@section("content")
    <div class="container mt-5">
        <h2>listar postagens</h2>
            <table class="table table-dark table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>usuario</th>
                        <th>titulo</th>
                        <th>postagem</th>
                        <th>DATA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->post }}</td>
                        <td>{{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="justify-content-center pagination">
            </div>
    </div>
@endsection