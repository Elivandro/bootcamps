@extends("template.layout")
@section('title', $viewData["title"])
@section('content')

{{-- {{ dd($viewData) }} --}}

<main class="container mt-5">
    <h3>Todos os seus pedidos</h3>
    <table class="table table-bordered table-striped text-center mt-3">
        <thead>
            <tr>
                <th scope="col">Pedido</th>
                <th scope="col">Produto Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        @foreach($viewData["orders"] as $order)
        <tbody>
            <tr>
                <td>#{{ $order->id }}</td>
                <td>{{ $order->name }}</td>
                <td>R$ {{ $order->sale_price }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ formatDateTime($order->getCreatedAt()) }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</main>
@endsection
