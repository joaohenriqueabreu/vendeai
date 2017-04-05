@extends('layouts.app')

@section('content')

    {{ Form::model($reseller, array('route' => array('resellers.update', $reseller->id), 'method' => 'PUT')) }}

        @include('resellers._form')

    {{ Form::close() }}

@endsection