@extends('layouts.external')

@section('content')

    <div class="row">
        <a href="{{ route('providers.create') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-bar-chart-o fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-blue">
                        Fornecedores
                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('resellers.create') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-brown">
                        Revendedores
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection