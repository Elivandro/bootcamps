@extends('template.layout')
@section('title', 'Checkout dados para pagamento')

@section('content')
<main class="container w-50 mt-5">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('payments') }}" method="post" class="form-control-lg mb-3">
                        @csrf
                        {{-- <input type="hidden" name="Content-Type" value="application/json" />
                        <input type="hidden" name="token" value="UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ==" />
                        <input type="hidden" name="customer_postcode" value="{{ Auth::user()->postal_code }}"/>
                        <input type="hidden" name="customer_address_street" value="{{ Auth::user()->address }}"/>
                        <input type="hidden" name="customer_andress_number" value="{{ Auth::user()->number }}"/>
                        <input type="hidden" name="customer_address_neighborhood" value="{{ Auth::user()->district }}"/>
                        <input type="hidden" name="customer_address_city" value="{{ auth::user()->city }}"/>
                        <input type="hidden" name="customer_address_state" value=" {{ Auth::user()->state }}"/>
                        <input type="hidden" name="customer_address_country" value="{{ Auth::user()->country }}"/> --}}

                        <h1 class="text-center mt-3 mb-3">Confirmar pagamento</h1>

                        <div class="text-center">
                            <div>
                                <h4>Metodo de pagamento</h4>
                            </div>
                            <div>
                                <input type="radio" name="transaction_type" value="ticket" id="ticket"/>
                                <label for="ticket">Boleto bancario</label>
                                <input type="radio" name="transaction_type" value="card" id="card" checked/>
                                <label for="card">Cartão de crédito</label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="customer_name" class="form-control" id="nome" placeholder="Nome Completo" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="cpf">CPF</label>
                            <input type="text" name="customer_document" class="form-control" id="cpf" pattern="\d*" maxlength="11"  min="1" placeholder="CPF" value="{{ Auth::user()->cpf }}">
                        </div>
                        <div id="payment-card">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="card-name">Numero do cartão</label>
                                        <input type="text" name="customer_card_number" pattern="\d*" class="form-control form-control" id="card-name" maxlength="16" placeholder="3333444455556666">                                    </div>
                                    <div class="col-md-3">
                                        <label for="cvv">CVV</label>
                                        <input type="text" pattern="\d*" maxlength="4" name="customer_card_cvv" class="form-control form-control" id="card-cvv" placeholder="123">                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="card_expiration">Validade</label>
                                <input type="month" name="customer_card_expiration_date" class="form-control" id="card_expiration" min="1">
                            </div>
                            <div class="form-group mb-3">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Finalizar Pagamento</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-control-lg mb-3">
                        <div class="text-center">
                            <span>
                                <i class="fa-solid fa-lock"></i>
                                Detalhes de pagamento armazenados em texto simples.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-2 mb-5">
        <div class="text-center mb-2">
            <img src="{{ asset('assets/images/flag-cards.png') }}" alt="Bandeiras de pagamentos"/>
            <img src="{{ asset('assets/images/logo-paylivre.svg') }}" alt="Paylivre payments"/>
        </div>
        <div class="text-center">
            <img src="{{ asset('assets/images/selo-pagamento.png') }}" width="680" alt="Selo de segurança"/>
        </div>
    </div>
</main>
@endsection
