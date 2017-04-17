@extends('layouts.app')

@section('content')

    {{--<h1 class="custom-brand-green">--}}
    <h1>
        <strong>
            <i class="fa fa-smile-o"></i> Obrigado! <br><br> Sua loja foi solicitada <br><br>
        </strong>
    </h1>

    <h4 align="justify">
        Ela estará pronta em até 24 horas com os produtos que você pediu. <br><br>

        Entraramos em contato no email <a href="#">{{ $user->email }}</a> com todas as informações necessárias para você começar a divulgar e vender.
        Ou você pode <a href="{{ route('resellers.stores.info', $reseller->id) }}">clicar aqui</a> e descobrir mais como nossa plataforma funciona.
        <br><br>

        Dúvidas? Estamos prontos pra te ajudar, entre em contato conosco pelo <a href="#">ajudai{{ '@' }}vendeai.com</a> <br><br>

        Bem vindo ao time <span class="custom-brand-green-small">#vendeaí</span> <br><br>
    </h4>

@endsection
