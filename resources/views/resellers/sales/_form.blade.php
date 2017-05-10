<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Nova venda
            <small>Cadastrar</small>
        </h1>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Produto</h3>
                        <div class="col-md-4">
                            <h6>Nome: {{ $product->name }}</h6>
                            <h6>Descrição: {{ $product->description }}</h6>
                            <h6>Categoria: <span class="badge badge-red"> {{ $product->category->name }}</span></h6>
                            <h6>Medidas (cm): {{ $product->length }} x {{ $product->width }} x {{ $product->height }}</h6>
                            <h6>Preço: R$ {{ $product->price }},00</h6>
                            <h6>Comissão: R$ {{ $product->payment }},00</h6>
                        </div>
                        <div class="col-md-8">
                            <img src="{{ $product->url }}" class="custom-mini-image">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Dados da venda</h3>
                        <br>

                        <div class="form-group">
                            {{ Form::label('price', 'Preço') }}
                            {{ Form::text('sale[price]', $sale->price, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('amount', 'Quantidade') }}
                            {{ Form::text('sale[amount]', $sale->amount, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Cliente</h3>
                        <br>
                        <div class="form-group">
                            {{ Form::label('name', 'Nome') }}
                            {{ Form::text('customer[name]', isset($sale->customer) ? $sale->customer->name : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('document', 'CPF / RG') }}
                            {{ Form::text('customer[document]', isset($sale->customer) ? $sale->customer->document : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('customer[email]', isset($sale->customer) ? $sale->customer->email : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Telefone') }}
                            {{ Form::text('customer[phone]', isset($sale->customer) ? $sale->customer->phone : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('address', 'Endereço') }}
                            {{ Form::text('customer[address]', isset($sale->customer) ? $sale->customer->address : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('district', 'Bairro') }}
                            {{ Form::text('customer[district]', isset($sale->customer) ? $sale->customer->district : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('number', 'Número') }}
                            {{ Form::text('customer[number]', isset($sale->customer) ? $sale->customer->number : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('complement', 'Complemento') }}
                            {{ Form::text('customer[complement]', isset($sale->customer) ? $sale->customer->complement : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('city', 'Cidade') }}
                            {{ Form::text('customer[city]', isset($sale->customer) ? $sale->customer->address : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('estado', 'Estado') }}
                            {{ Form::text('customer[state]', isset($sale->customer) ? $sale->customer->address : null, array('class' => 'form-control')) }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h3>Destino</h3>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" ng-click="copyFromCustomer()">Copiar do Cliente</button>
                    </div>

                    <div class="col-md-12">

                        <br>

                        <div class="form-group">
                            {{ Form::label('contact', 'Contato') }}
                            {{ Form::text('destination[contact]', isset($sale->destination) ? $sale->destination->contact: null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Telefone do local') }}
                            {{ Form::text('destination[phone]', isset($sale->destination) ? $sale->destination->phone : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('address', 'Endereço') }}
                            {{ Form::text('destination[address]', isset($sale->destination) ? $sale->destination->address : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('district', 'Bairro') }}
                            {{ Form::text('destination[district]', isset($sale->destination) ? $sale->destination->district : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('number', 'Número') }}
                            {{ Form::text('destination[number]', isset($sale->destination) ? $sale->destination->number : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('complement', 'Complemento') }}
                            {{ Form::text('destination[complement]', isset($sale->destination) ? $sale->destination->complement : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('city', 'Cidade') }}
                            {{ Form::text('destination[city]', isset($sale->destination) ? $sale->destination->address : null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('state', 'Estado') }}
                            {{ Form::text('destination[state]', isset($sale->destination) ? $sale->destination->address : null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>