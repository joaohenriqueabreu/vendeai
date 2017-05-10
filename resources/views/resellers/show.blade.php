@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Informações do Revendedor</h1>
            <hr>
            <p>Nome: {{ $reseller->name }} </p>
            <p>Email: {{ $reseller->email }} </p>
            <p>CPF/CNPJ: {{ $reseller->document }} </p>
            <p>Endereço: {{ $reseller->address }} </p>
            <p>Link da loja:
                @if(isset($reseller->store_url))
                    <a href="#" onclick="window.open('{{ $reseller->store_url }}');"></a>
                @else
                    <span class="badge">Pendente</span>
                @endif
            </p>

            <p>Telefone: {{ $reseller->phone }} </p>
            <p>Entrou em: {{ $reseller->created_at }} </p>
            <p>Atualizado em: {{ $reseller->updated_at }} </p>
        </div>
    </div>

@endsection