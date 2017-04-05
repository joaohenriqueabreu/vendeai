@extends('layouts.app')

@section('content')

    {{ Form::model($provider, array('route' => 'provider.store')) }}

        @include('providers._form')

    {{ Form::close() }}

@endsection
