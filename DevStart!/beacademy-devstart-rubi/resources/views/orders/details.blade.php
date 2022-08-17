@extends("template.layout")
@section('title', "Finalizar Compra: ". Auth::user()->name)
@section("content")
<main class="container w-70 mt-5 mb-5">
<h2>Detalhes do pedido</h2>
<table id="cart" class="table table-hover table-condensed mt-4 mb-5">
  <thead>
  <tr>
      <th colspan="2" style="width:60%">Produto</th>
      <th style="width:20%">Preço</th>
      <th style="width:5%">Quantidade</th>
      <th style="width:15%" class="text-center">Subtotal</th>
  </tr>
  </thead>
  <tbody>

  <?php $total = 0 ?>

  @if(session('cart'))
      @foreach(session('cart') as $id => $details)
          <?php $total += $details['sale_price'] * $details['quantity'] ?>
          <tr>
              <td colspan="2" data-th="Product">
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
              <td data-th="Price">${{ $details['sale_price'] }}</td>
              <td data-th="Quantity">
                  <input type="number" disabled value="{{ $details['quantity'] }}" class="form-control quantity" />
              </td>
              <td data-th="Subtotal" class="text-center">${{ $details['sale_price'] * $details['quantity'] }}</td>
          </tr>
      @endforeach
  @endif
  </tbody>
  <tfoot class="p-4">
  <tr>
    <td data-th="hidden-xs">
      <a href="{{ route('index.index')}}" class="btn btn-primary"><i class="fa fa fa-angle-left"></i> Continuar comprando</a>
    </td>
    <td data-th="hidden-xs"></td>
      <td colspan="2" class="hidden-xs text-center"><strong>Total R${{ $total }}</strong></td>
  </tr>
  </tfoot>
</table>
</main>
@endsection
