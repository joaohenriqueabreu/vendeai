@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Vendas
            </h1>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        Gestão de vendas
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('resellers.sales.create', $reseller->id) }}" type="button" class="btn btn-success"><i
                                    class="fa fa-plus"></i>
                            Registrar nova venda
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>Cliente</th>
                            <th>Entrega</th>
                            <th>Data</th>
                            <th>Editar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sales as $k => $sale)
                            @if($k % 2 == 0)
                                <tr class="even gradeC">
                            @else
                                <tr class="odd gradeX">
                            @endif

                            <td>{{ $sale->product->name }} </td>
                            <td>R$ {{ $sale->price }} </td>
                            <td>{{ $sale->amount }} </td>
                            <td>R$ {{ $sale->amount * $sale->price }} </td>
                            <td>{{ $sale->customer->name }} </td>
                            <td>{{ $sale->customer->address + ', ' + $sale->customer->city }} </td>
                            <td>{{ $sale->customer->created_at }} </td>

                            <td align="center">
                                {{ Form::open(array('route' => array('resellers.sales.edit', array($reseller->id, $sale->id)), 'method' => 'GET')) }}
                                {{ Form::button('<i class="fa fa-edit"></i>', ['type'=> 'submit', 'class' => 'btn btn-default', 'href' => route('resellers.sales.edit', array($reseller->id, $sale->id))]) }}
                                {{ Form::close() }}

                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="panel-footer">
{{--                {{ $sales->links() }}--}}
            </div>
        </div>
    </div>

@endsection