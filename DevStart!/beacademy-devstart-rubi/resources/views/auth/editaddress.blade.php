@extends("template.layout")
@section("title", "Editar endereço")

@section("content")
<main class="main">
    <section class="max-container">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    {{ $error }}
                    <br/>
                @endforeach
            </div>
        @endif
        <div class="modal-content p-5 mt-5 mb-5" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <div class="row">
                <div class="col-md-12">
                <form action="{{ route('updateaddress.updated', $address->id) }}" method="post" class="form-control-lg mb-3">
                    @method('PUT')
                    @csrf
                        <h1 class="mt-3 mb-3">Editar endereço</h1>
                        <div class="row">
                                    <div class="col-md-8">
                                    <label for="district">Endereço</label>
                                        <input type="text" value="{{ $address->address }}" name="address" class="form-control form-control" id="address">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="district">Número</label>
                                        <input type="number" value="{{ $address->number }}" name="number" class="form-control form-control" id="number">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Bairro</label>
                            <input type="text" value="{{ $address->district }}" class="form-control" name="district" id="district">
                        </div>
                        <div class="form-group mb-3">
                            <label for="zipcode">CEP</label>
                            <input type="text" value="{{ $address->postal_code }}" class="form-control" name="postal_code" id="zipcode">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">Cidade</label>
                            <input type="text" value="{{ $address->city }}" class="form-control" name="city" id="city">
                        </div>
                        <div class="form-group mb-3">
                            <label for="state">Estado</label>
                            <input type="text" value="{{ $address->state }}" class="form-control" name="state" id="state">
                        </div>
                        <div class="form-group mb-3">
                            <label for="country">País</label>
                            <input type="text" value="{{ $address->country }}" class="form-control" name="country" id="country">
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
