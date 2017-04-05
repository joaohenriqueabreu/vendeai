@extends('layouts.app')

@section('content')

    {{ Form::model($product, array('route' => 'products.store')) }}

        @include('products._form')

    {{ Form::close() }}

@endsection
