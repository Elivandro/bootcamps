@extends("template.user")
@section("title", $user->name . " User")

@section("content")
<div class="container mt-5">
        @if(session()->has('edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong> {{ session()->get('edit') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3 class="text-center">Usuario {{ $user->name }}</h3>
        <a href="{{ route('users.index') }}" class="btn btn-outline-primary btn-sm mb-3">VOLTAR</a>
        <table class="table table-dark table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>FOTO</th>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>TEAM</th>
                    <th colspan="2">DATA DE CADASTRO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if($user->image)
                        <td>
                            <img src="{{ asset('storage/'.$user->image) }}" width="40px" class="rounded-circle"/>
                        </td>
                    @else
                        <td>
                            <img src="{{ asset('storage/profile/avatar.jpg') }}" width="40px" class="rounded-circle"/>
                        </td>
                    @endif
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('team.show', $user->id) }}" class="btn btn-outline-warning btn-sm">VER</a>
</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning btn-sm">EDITAR</a>
                            <button type="submit" class="btn btn-outline-danger btn-sm">DELETAR</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection