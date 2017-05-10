@extends('layouts.app')

@section('content')

    @if(isset($user->admin))

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Fornecedores
            </h1>
        </div>

        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            Gestão dos fornecedores
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('providers.create') }}" type="button" class="btn btn-success"><i
                                        class="fa fa-plus"></i>
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
                                <th>Email</th>
                                <th>Endereço(s)</th>
                                <th>Telefone</th>
                                <th>Categoria</th>
                                <th>Criação</th>
                                <th>Atualização</th>
                                <th>Editar</th>
                                <th>Produtos</th>
                                <th>Apagar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($providers as $k => $provider)
                                @if($k % 2 == 0)
                                    <tr class="even gradeC">
                                @else
                                    <tr class="odd gradeX">
                                        @endif

                                        <td>{{ $provider->name }} </td>
                                        <td>{{ $provider->email }} </td>
                                        <td>{{ $provider->address }} </td>
                                        <td>{{ $provider->phone }} </td>
                                        <td>{{ $provider->market }} </td>
                                        <td>{{ $provider->created_at }} </td>
                                        <td>{{ $provider->updated_at }} </td>
                                        <td align="center">
                                            {{ Form::open(array('route' => array('providers.edit', $provider->id), 'method' => 'GET')) }}
                                            {{ Form::button('<i class="fa fa-edit"></i>', ['type'=> 'submit', 'class' => 'btn btn-default', 'href' => route('providers.edit', $provider->id)]) }}
                                            {{ Form::close() }}

                                        </td>
                                        <td align="center">
                                            {{ Form::open(array('route' => array('providers.products.index', $provider->id), 'method' => 'GET')) }}
                                            {{ Form::button('<i class="fa fa-barcode"></i>', ['type'=> 'submit', 'class' => 'btn btn-primary', 'href' => route('providers.edit', $provider->id)]) }}
                                            {{ Form::close() }}
                                        </td>
                                        <td align="center">
                                            {{ Form::open(array('route' => array('providers.destroy', $provider->id), 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()')) }}
                                            {{ Form::button('<i class="fa fa-times"></i>', ['type'=> 'submit', 'class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="panel-footer">
                    {{ $providers->links() }}
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

    @else
        <h1><i class="fa fa-close"></i> Ops! Essa página não está disponível no momento</h1>
    @endif

@endsection