@extends('layouts.app')

@section('content')

    <h1>
        Sua loja está pronta! <i class="fa fa-smile-o"></i><br><br>
    </h1>

    <h3>
        Ela pode ser encontrada no endereço <a href="{{ $reseller->store_url }}">{{ $reseller->store_url }}</a>. <br><br>

        A sua loja está com os produtos configurados

        Entraramos em contato no email {{ $user->email }} com todas as informações necessárias para começar a divulgar e vender. <br><br>

        Bem vindo ao time #vendeai <br><br>&nbsp;
    </h3>

    <h3><span class="custom-brand-green">Vende aí</span></h3>



@endsection
