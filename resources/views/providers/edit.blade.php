@extends('layouts.app')

@section('content')

    {{ Form::model($provider, array('route' => array('providers.update', $provider->id), 'method' => 'PUT')) }}

        @include('providers._form')

    {{ Form::close() }}

@endsection