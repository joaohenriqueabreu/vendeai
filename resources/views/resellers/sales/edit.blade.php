@extends('layouts.app')

@section('content')

    {{ Form::model($sale, array('route' => array('resellers.sales.update', $reseller->id, $sale->id), 'method' => 'PUT')) }}

    @include('resellers.sales._form')

    {{ Form::close() }}

@endsection