@extends('layouts.app')

@section('content')

    {{ Form::model($provider, array('route' => 'providers.store')) }}

        @include('providers._form')

    {{ Form::close() }}

@endsection
