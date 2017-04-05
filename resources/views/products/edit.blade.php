@extends('layouts.app')

@section('content')

    {{ Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) }}

        @include('products._form')

    {{ Form::close() }}

@endsection