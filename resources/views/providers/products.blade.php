@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Produtos do {{ $provider->name }}
            </h1>
        </div>


        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">


                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                            Gestão de produtos
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('products.create') }}?pid={{ $provider->id }}" type="button"
                               class="btn btn-success"><i class="fa fa-plus"></i>
                                Adicionar</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Foto</th>
                                <th>Preço</th>
                                <th>Comissão</th>
                                <th>Venda</th>
                                <th>Criação</th>
                                <th>Atualização</th>
                                <th>Editar</th>
                                <th>Ver</th>
                                <th>Apagar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($provider->products as $k => $product)
                                @if($k % 2 == 0)
                                    <tr class="even gradeC">
                                @else
                                    <tr class="odd gradeX">
                                        @endif

                                        <td>{{ $product->name }} </td>
                                        <td>{{ $product->description }} </td>
                                        <td><img src="{{ $product->url }}" class="custom-mini-image"></td>
                                        <td>R$ {{ $product->price }} </td>
                                        <td>R$ {{ $product->payment }} </td>
                                        <td>R$ {{ $product->price + $product->payment }} </td>
                                        <td>{{ $product->created_at }} </td>
                                        <td>{{ $product->updated_at }} </td>
                                        <td align="center">
                                            {{ Form::open(array('route' => array('products.edit', $product->id), 'method' => 'GET')) }}
                                            {{ Form::button('<i class="fa fa-edit"></i>', ['type'=> 'submit', 'class' => 'btn btn-default', 'href' => route('providers.edit', $provider->id)]) }}
                                            {{ Form::close() }}

                                        </td>

                                        <td align="center">
                                            {{ Form::open(array('route' => array('products.show', $product->id), 'method' => 'GET')) }}
                                            {{ Form::button('<i class="fa fa-eye"></i>', ['type'=> 'submit', 'class' => 'btn btn-warning', 'href' => route('providers.edit', $provider->id)]) }}
                                            {{ Form::close() }}

                                        </td>

                                        <td align="center">
                                            {{ Form::open(array('route' => array('products.destroy', $product->id), 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()')) }}
                                            {{ Form::button('<i class="fa fa-times"></i>', ['type'=> 'submit', 'class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

@endsection