@extends('layouts.app')

@section('content')

    {{ Form::model($product, array('route' => array('providers.products.store', $provider->id))) }}

        @include('providers.products._form')

    {{ Form::close() }}

@endsection
