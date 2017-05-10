@extends('layouts.app')

@section('content')

    @if(isset($user->admin))

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Revendedores
            </h1>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                            Gestão dos revedendores
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('resellers.create') }}" type="button" class="btn btn-success"><i
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
                                <th>Info</th>
                                {{--<th>Endereço(s)</th>--}}
                                {{--<th>Telefone</th>--}}
                                <th>Loja</th>
                                <th>Criação</th>
                                <th>Atualização</th>
                                <th>Editar</th>
                                <th>Produtos</th>
                                <th>Apagar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resellers as $k => $reseller)
                                @if($k % 2 == 0)
                                    <tr class="even gradeC">
                                @else
                                    <tr class="odd gradeX">
                                        @endif

                                        <td>{{ $reseller->name }} </td>
                                        <td>
                                            <a href="{{ route('resellers.show',$reseller->id)  }}"
                                               class="btn btn-default"><i class="fa fa-info-circle"></i>
                                            </a>
                                        </td>
                                        <td align="center">
                                            @if(isset($reseller->store_url))
                                                <a href="#" onclick="window.open('{{  $reseller->store_url }}');"
                                                   class="btn btn-primary">
                                                    <i class="fa fa-globe"></i>
                                                </a>
                                            @else
                                                <span class="badge">Pendente</span>
                                            @endif
                                        </td>
                                        <td>{{ $reseller->created_at }} </td>
                                        <td>{{ $reseller->updated_at }} </td>
                                        <td align="center">
                                            {{ Form::open(array('route' => array('resellers.edit', $reseller->id), 'method' => 'GET')) }}
                                            {{ Form::button('<i class="fa fa-edit"></i>', ['type'=> 'submit', 'class' => 'btn btn-default', 'href' => route('resellers.edit', $reseller->id)]) }}
                                            {{ Form::close() }}

                                        </td>
                                        <td align="center">
                                            {{ Form::open(array('route' => array('resellers.products.index', $reseller->id), 'method' => 'GET')) }}
                                            {{ Form::button('<i class="fa fa-barcode"></i>', ['type'=> 'submit', 'class' => 'btn btn-primary', 'href' => route('resellers.edit', $reseller->id)]) }}
                                            {{ Form::close() }}
                                        </td>
                                        <td align="center">
{{--                                            {{ Form::open(array('route' => array('resellers.destroy', $reseller->id), 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()')) }}--}}
{{--                                            {{ Form::button('<i class="fa fa-times"></i>', ['type'=> 'submit', 'class' => 'btn btn-danger']) }}--}}
                                            {{--{{ Form::close() }}--}}
                                        </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="panel-footer">
                    {{ $resellers->links() }}
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

    @else
        <h1><i class="fa fa-close"></i> Ops! Essa página não está disponível no momento</h1>
    @endif

@endsection