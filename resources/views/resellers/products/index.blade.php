@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Loja do {{ $reseller->name }}
            </h1>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <div>Nome da loja: {{ $reseller->name }}</div>
                            <div>Email: {{ $reseller->email }}</div>
                            <div>CPF / CNPJ: {{ $reseller->document }}</div>
                            <div>Última atualização: {{ $reseller->updated_at }}<br></div>
                            <div>&nbsp;</div>

                            Link para a loja:
                            @if(isset($reseller->store_url))
                                <a href="#"
                                   onclick="window.open('{{ $reseller->store_url }}');">{{ $reseller->store_url }}</a>
                            @else
                                @if($reseller->status == "pending")
                                    <span class="badge badge-red">Loja ainda não solicitada!</span>
                                @else
                                    <span class="badge badge-red">Loja em construção</span>
                                @endif

                            @endif

                        </div>

                        <div>&nbsp;</div>

                        <div class="col-md-12">
                            @if(!isset($reseller->store_url) && $reseller->status == "pending")
                                <a href="{{ route('resellers.stores.new', $reseller->id) }}" class="btn btn-info">
                                    <i class="fa fa-check-circle"></i>
                                    Pedir sua loja
                                </a>
                            @endif

                            <a href="{{ route('resellers.edit', $reseller->id) }}" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                                Editar
                            </a>

                            <a href="{{ route('resellers.stores.info', $reseller->id) }}" class="btn btn-default">
                                <i class="fa fa-info-circle"></i>
                                Instruções
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            Produtos selecionados
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('resellers.products.search', $reseller->id) }}" type="button"
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
                                <th>Fornecedor</th>
                                {{--<th>Criação</th>--}}
                                <th>Atualização</th>
                                {{--<th>Editar</th>--}}
                                {{--<th>Ver</th>--}}
                                <th>Nova venda</th>
                                <th>Remover</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reseller->products as $k => $product)
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
                                        <td> {{ $product->provider->name }} </td>
                                        {{--<td>{{ $product->created_at }} </td>--}}
                                        <td>{{ $product->updated_at }} </td>

                                        {{--<td align="center">--}}
{{--                                            {{ Form::open(array('route' => array('resellers.products.sales.create', $reseller->id, $product->id), 'method' => 'GET')) }}--}}
{{--                                            {{ Form::button('<i class="fa fa-eye"></i>', ['type'=> 'submit', 'class' => 'btn btn-warning', 'href' => route('resellers.products.sales.create', array($reseller->id, $product->id))]) }}--}}
{{--                                            {{ Form::close() }}--}}
                                        {{--</td>--}}

                                        <td align="center">
                                            <a class="btn btn-success" href="{{ route('resellers.products.sales.create', array($reseller->id, $product->id)) }}"><i class="fa fa-plus"></i></a>
                                        </td>

                                        <td align="center">
                                            {{ Form::open(array('route' => array('resellers.products.unmatch', $reseller->id, $product->id), 'method' => 'DELETE', 'onsubmit' => 'return confirmDelete()')) }}
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