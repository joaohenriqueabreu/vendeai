@extends('layouts.app')

@section('content')

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
            {{--<div class="panel-footer back-footer-dark-blue">--}}
                {{--<td align="center">--}}
{{--                    {{ Form::open(array('route' => array('providers.edit', $product->id), 'method' => 'GET')) }}--}}
                    {{--<h6 class="custom-color-white">Colocar na loja</h6>--}}
{{--                    {{ Form::button('<i class="fa fa-shopping-cart"></i>', ['type'=> 'submit', 'class' => 'btn btn-default', 'href' => route('providers.edit', $product->id)]) }}--}}
                    {{--{{ Form::close() }}--}}
                {{--</td>--}}
            </div>
        </div>
    </div>

@endsection