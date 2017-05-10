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
                        'href' => route('resellers.products.search.reset', $reseller->id)]) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12">
            {{--<div class="col-md-12" layout="row" layout-align="center center">--}}
                <a href="#" ng-click="showCategory = !showCategory">Procurar por categorias</a> &nbsp;&nbsp;&nbsp;
                <a href="{{ route('resellers.products.index', $reseller->id) }}">Ver minha loja</a> &nbsp;&nbsp;&nbsp;
                <a href="{{ route('resellers.products.search.reset', $reseller->id) }}">Ver todos produtos</a> &nbsp;&nbsp;&nbsp;
                <a href="{{ route('resellers.products.search.new', $reseller->id) }}">Ver produtos não adicionados</a> &nbsp;&nbsp;&nbsp;
                {{--{{ $products->links() }}--}}
            </div>
        {{--</div>--}}
    </div>

    <div class="row" ng-show="showCategory">
        <br>
        <div layout-wrap layout="row">

            @foreach($categories as $i => $category)
                <a href="{{ route('resellers.products.search.category', array($reseller->id, $category->id)) }}">
                    <span class="badge badge-red custom-mini-section custom-color-dark-blue">
                        {{ $category->name }}
                    </span>
                </a>
            @endforeach

        </div>
    </div>

    <br>

    @if(count($products) == 0)
        <div class="row" layout="row" layout-align="center center">
            <h3>Não encontramos nenhum produto <i class="fa fa-frown-o"></i></h3>
        </div>
    @else
        <div class="row">
            @foreach($products as $k => $product)

                <div class="col-md-4">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{ Form::open(array('route' => array('resellers.products.match', $reseller->id, $product->id), 'method' => 'POST')) }}
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            @if($product->hasReseller($reseller->id))
                                <div class="panel-heading back-footer-red" align="center">
                                    <button type="submit" class="btn btn-danger"><i
                                                class="fa fa-close custom-color-dark-blue"></i>&nbsp;Remover da loja
                                    </button>
                                </div>
                            @else
                                <div class="panel-heading back-footer-blue" align="center">
                                    <button type="submit" class="btn btn-primary">Adicionar na loja</button>
                                </div>
                            @endif

                            <div class="panel-body custom-section">

                                <img src="{{ $product->url }}" class="custom-mini-image"/>
                                <h6>{{ $product->name }}</h6>
                                <h6>
                                    Vendido por <span
                                            style="text-decoration: underline">{{ $product->provider->name }}</span>
                                </h6>
                                <h6 align="left">
                                    <small>{{ $product->description }}</small>
                                </h6>
                            </div>
                            <div class="panel-footer back-footer-green" align="left">
                                <strong>Preço</strong>: R$ {{ $product->price }},00 <br>
                                <strong>Comissão</strong>: R$ {{ $product->payment }},00 <br>
                                <strong>Preço de venda</strong>: R$ {{ $product->price + $product->payment }},00 <br>

                            </div>

                        </div>
                        <div class="custom-product-card"></div>

                        {{ Form::close() }}
                    </div>
                </div>

            @endforeach
        </div>

    @endif

    <div class="row">
        <div class="col-md-12">
            {{ $products->links() }}
        </div>
    </div>

@endsection