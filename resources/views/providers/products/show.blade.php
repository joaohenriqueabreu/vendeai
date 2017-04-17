@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <a href="{{ route('providers.products.index', $provider->id) }}">< Voltar para produtos</a> &nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>

    <br>

    <div class="row">

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <img src="{{ $product->url }}" class="custom-mini-image">
                    <h3>{{ $product->name }}</h3>
                </div>
                <div class="panel-footer back-footer-green">
                    {{ $product->description }} <br><br>
                    Preço: R$ {{ $product->price }},00 <br>
                    Comissão: R$ {{ $product->payment }},00 <br>

                </div>
                <div class="panel-footer back-footer-brown">
                    {{ $product->provider->name }}
                </div>
            </div>
        </div>
    </div>

@endsection