{{--{{ Form::open(array('route' => 'provider.update')) }}--}}

{{ Form::model($provider, array('route' => array('provider.store', $provider->id))) }}

@include('providers._form')

{{ Form::close() }}