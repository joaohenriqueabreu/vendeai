@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            {{--<h1>Selecionar produtos</h1><br>--}}
            {{ Form::open(['method' => 'get', 'route' => ['resellers.products.search', $reseller->id]]) }}
            <div class="form-group">
                <div class="col-md-9">
                    {{ Form::text('q','',['placeholder' => 'Procure pelo produto desejado', 'class' => 'form-control']) }}
                </div>
                <div class="col-md-3">
                    {{ Form::button('<i class="fa fa-search"></i> Procurar', ['type'=> 'submit', 'class' => 'btn btn-primary',
                        'href' => route('resellers.products.search', $reseller->id)]) }}
                    &nbsp;
                    {{ Form::button('<i class="fa fa-times"></i> Limpar', ['type'=> 'submit', 'class' => 'btn btn-danger',
                        'href' => route('resellers.products.search', $reseller->id)]) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <a href="{{ route('resellers.products', $reseller->id) }}">Ver minha loja</a> &nbsp;&nbsp;&nbsp;
                <a href="{{ route('resellers.products.search.reset', $reseller->id) }}">Ver todos produtos</a> &nbsp;&nbsp;&nbsp;
                <a href="{{ route('resellers.products.search.new', $reseller->id) }}">Ver produtos não adicionados</a>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        @foreach($products as $k => $product)

            <div class="col-md-4">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="{{ route('resellers.products.match', [$reseller->id, $product->id]) }}"
                       class="custom-product-card">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-heading back-footer-blue" align="left">
                                @if($product->hasReseller($reseller->id))
                                    <small>Produto adicionado! Clique para remover de sua loja</small>
                                @else
                                    <small>Clique para adicionar a sua loja</small>
                                @endif

                            </div>
                            <div class="panel-body custom-section">

                                <img src="{{ $product->url }}" class="custom-mini-image"/>
                                <h6>{{ $product->name }}</h6>
                                <h6>
                                    Vendido por <span
                                            style="text-decoration: underline">{{ $product->provider->name }}</span>
                                </h6>
                                <h6>
                                    <small>{{ $product->description }}</small>
                                </h6>
                            </div>
                            <div class="panel-footer back-footer-green" align="left">
                                Preço de venda: R$ {{ $product->price + $product->payment }},00 <br>
                                Comissão: R$ {{ $product->payment }},00 <br>

                            </div>
                        </div>
                    </a>
                </div>
            </div>

        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ $products->links() }}
        </div>
    </div>

@endsection