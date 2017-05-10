@extends('layouts.app')

@section('content')

    @if(isset($user->admin))

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Usuários
                </h1>
            </div>

            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                                Gestão dos usuários
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
                                    <th>Fornecedor</th>
                                    <th>Revendedor</th>
                                    <th>Admin</th>
                                    <th>Criação</th>
                                    <th>Atualização</th>
                                    <th>Banir</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $k => $uuser)
                                    @if($k % 2 == 0)
                                        <tr class="even gradeC">
                                    @else
                                        <tr class="odd gradeX">
                                            @endif

                                            <td>{{ $uuser->name }} </td>
                                            <td>{{ $uuser->email }} </td>
                                            <td align="center">
                                                @if(isset($uuser->provider))
                                                    <i class="fa fa-check"></i>
                                                @endif
                                            </td>
                                            <td align="center">
                                                @if(isset($uuser->reseller))
                                                    <i class="fa fa-check"></i>
                                                @endif
                                            </td>
                                            <td align="center">
                                                @if(isset($uuser->admin))
                                                    <i class="fa fa-check"></i>
                                                @else
                                                    {{ Form::open(array('route' => array('admin.store', $uuser->id), 'method' => 'POST', 'onsubmit' => 'return confirmAdmin()')) }}
                                                    {{ Form::button('<i class="fa fa-cogs"></i>', ['type'=> 'submit', 'class' => 'btn btn-default', 'href' => route('admin.store', $uuser->id)]) }}
                                                    {{ Form::close() }}
                                                @endif
                                            </td>
                                            <td>{{ $uuser->created_at }} </td>
                                            <td>{{ $uuser->updated_at }} </td>

                                            <td align="center">
                                                {{ Form::open(array('route' => array('admin.destroy', $uuser->id), 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()')) }}
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
                        {{ $users->links() }}
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    @else
        <h1><i class="fa fa-close"></i> Ops! Essa página não está disponível no momento</h1>
    @endif

@endsection