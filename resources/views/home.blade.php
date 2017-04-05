@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Menu principal
            </h1>
        </div>
    </div>

    <div class="row">
        <a href="{{ route('products.index') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-green">
                        Produtos

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('providers.index') }}">
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
        <a href="{{ route('resellers.index') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-brown">
                    <div class="panel-body">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-brown">
                        Revendedores
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('products.index') }}">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-body">
                        <i class="fa fa-cogs fa-5x"></i>
                    </div>
                    <div class="panel-footer back-footer-red">
                        Administração

                    </div>
                </div>
            </div>
        </a>

    </div>
@endsection