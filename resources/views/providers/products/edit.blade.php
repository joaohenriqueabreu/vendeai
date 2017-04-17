@extends('layouts.app')

@section('content')

    {{ Form::model($product, array('route' => array('providers.products.update', $provider->id, $product->id), 'method' => 'PUT')) }}

        @include('providers.products._form')

    {{ Form::close() }}

@endsection