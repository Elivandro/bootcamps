@extends("template.layout")
@section("title", "Carrinho")
@section("content")
<main class="container mt-4 mb-5">
  <table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
      <th style="width:50%">Produto</th>
      <th style="width:10%">Preço</th>
      <th style="width:5%">Quantidade</th>
      <th style="width:5%">Estoque</th>
      <th style="width:15%" class="text-center">Subtotal</th>
      <th style="width:15%"></th>
    </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>

    @if(session('cart'))
      @foreach(session('cart') as $id => $details)
        <?php $total += $details['sale_price'] * $details['quantity'] ?>
        <tr>
            <td data-th="Product">
                <div class="row">
                  @if( $details['image'])
                    <div class="col-sm-3 hidden-xs">
                      <img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/>
                    </div>
                      @else
                        <div class="col-sm-3 hidden-xs">
                          <img width="100" height="100" class="img-responsive" src="{{ asset('assets/images/products/wine/vinho-sem-rotulo.png') }}" alt="Card image cap">
                        </div>
                      @endif
                    <div class="col-sm-9">
                      <h4 class="nomargin">{{ $details['name'] }}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">R$ {{ $details['sale_price'] }}</td>
            <td data-th="Quantity">
              <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" min="1" max="{{ $details['maxQuantity'] }}"/>
            </td>
            <td data-th="Estoque">
              <span class="form-control">
                {{ $details['maxQuantity'] }}
              </span>
            </td>
            <td data-th="Subtotal" class="text-center">R$ {{ $details['sale_price'] * $details['quantity'] }}</td>
            <td class="actions" data-th="">
              <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
              <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i>Remover</button>
            </td>
        </tr>
      @endforeach
    @endif
    </tbody>
    <tfoot>
    <tr>
        <td><a href="{{ route('index.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
        <td colspan="3" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total R$ {{ $total }}</strong></td>
        <td>
        @if(session('cart'))
          <a href="{{ route('index.confirm') }}" class="btn btn-primary">Confirmar Compra <i class="fa fa-angle-right"></i></a>
        @endif
        </td>
    </tr>
    </tfoot>
  </table>
</main>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(".update-cart").click(function (e) {
        e.preventDefault();
        var item = $(this);
        $.ajax({
            url: "{{ route('index.updateCart') }}",
            method: "put",
            data: {_token: '{{ csrf_token() }}', id: item.attr("data-id"), quantity: item.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var item = $(this);
        if(confirm("Você tem certeza?")) {
            $.ajax({
                url: "{{ route('index.remove') }}",
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: item.attr("data-id")},
                success: function (response) {
                  window.location.reload();
                }
            });
        }
    });
  </script>
@endsection
