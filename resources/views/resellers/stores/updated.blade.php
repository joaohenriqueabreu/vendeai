@extends('layouts.app')

@section('content')

    <h1>
        Obrigado! A atualização de sua loja foi solicitada! <i class="fa fa-smile-o"></i><br><br>
    </h1>

    <h3>
        As alterações estarão prontas em até 24 horas. <br><br>

        Entraramos em contato no email {{ $user->email }} com todas as informações necessárias para começar a divulgar e vender. <br><br>

        Bem vindo ao time #vendeai <br><br>&nbsp;

        Dúvidas? Estamos prontos pra te ajudar, entre em contato conosco pelo ajudai{{ '@' }}vendeai.com
    </h3>

    <h3><span class="custom-brand-green">Vende aí</span></h3>



@endsection
