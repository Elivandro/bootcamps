@extends("template.user")
@section("title", "Listagem usuarios")

@section("content")
    <div class="container mt-5">
        @if(session()->has('create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('create') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('destroy'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> {{ session()->get('destroy') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h3 class="text-center">Todos os Usuarios</h3>
        <div>
            <div class="row">
                <div class="col-sm mt-2 mb-5">
                    <a href="{{ route('users.create') }}" class="btn btn-outline-primary btn-sm mb-3">Novo usuario</a>
                </div>
                <div class="col-sm mt-2 mb-5">
                    <form action="{{ route('users.index') }}" method="GET">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control rounded" placeholder="digite sua busca"/>
                            <button type="submit" class="btn btn-outline-primary">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <table class="table table-dark table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>FOTO</th>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>POSTAGENS</th>
                        <th>DATA DE CADASTRO</th>
                        <th colspan="2">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
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
                        <td><a href="{{ route('posts.show', $user->id) }}" class="btn btn-outline-light btn-sm">postagens {{ $user->posts->count() }}</a></td>
                        <td>{{ formatDateTime($user->created_at) }}</td>
                        <td>{{ formatMoney(5000) }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-light btn-sm">VISUALIZAR</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="justify-content-center pagination">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
    </div>
@endsection