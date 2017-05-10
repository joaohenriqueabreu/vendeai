@extends('layouts.external')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Escolha seu perfil
            </h1>
        </div>
    </div>

    <div class="row">
        <a href="{{ $has_provider_account ? route('providers.edit', $user->provider->id) : route('providers.create') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-bar-chart-o fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-green">
                        Fornecedor
                    </div>
                </div>
            </div>
        </a>

        <a href="{{ $has_reseller_account ? route('resellers.edit', $user->reseller->id) : route('resellers.create') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-blue">
                        Revendedor
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection