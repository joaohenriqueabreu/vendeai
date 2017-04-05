@extends('layouts.app')

@section('content')

    {{ Form::model($reseller, array('route' => 'resellers.store')) }}

        @include('resellers._form')

    {{ Form::close() }}

@endsection
