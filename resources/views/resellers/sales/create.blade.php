@extends('layouts.app')

@section('content')

    {{ Form::model($sale, array('route' => array('resellers.products.sales.store', $reseller->id, $product->id))) }}

    @include('resellers.sales._form')

    {{ Form::close() }}

@endsection
