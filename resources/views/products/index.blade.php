@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Produtos
                <small>Selecionar produtos para a loja</small>
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
    </div>

@endsection