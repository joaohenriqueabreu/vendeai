@extends('layouts.app')

@section('content')

    <h1>
        Instruções para criação de lojas dos revendedores <br><br>
    </h1>

    <small>Este procedimento deve ser seguido para criar a loja do revendedor com os produtos escolhidos.</small>
    {{-- TODO: Existe uma biblioteca para exportar arquivos excel e o lojaintegrada permite a importação dos produtos via planilha --}}

    <hr>

    <div>
        <h3>Criar uma conta no gmail </h3>
        <h6> A conta deve ser do tipo nomedaloja.vendeai{{ '@' }}gmail.com. Senha "vendeaiselladd" (sem aspas).</h6>
    </div>

    <br>

    <div>
        <h3>Abrir o godaddy e adicionar o CNAME ao DNS </h3>
        <h6> Na área de administração do domínio vendeai <a href="https://dcc.godaddy.com/manage/vendeai.com/dns">https://dcc.godaddy.com/manage/vendeai.com/dns</a>. Em Registros clicar no botão adicionar.</h6>
        <img src="{{ asset('img/instr/adicionarcname.png') }}" class="custom-instr-image">
        <br>
        <h6>
            <strong>Atenção!!</strong> O campo "Apontar para" deve ser sempre preenchido com "lojas.lojaintegrada.com.br". O campo Host preencher com o nome da loja. Exemplo
            Super Loja, será www.superloja.vendeai.com, logo, preencher o campo Host com "superloja".

        </h6>
        <br>
        <img src="{{ asset('img/instr/godaddydns.png') }}" class="custom-instr-image">
        <h6>Veja os exemplos já criados. Não alterar as informações de DNS já existentes!</h6>
    </div>

    <br>

    <div>
        <h3>Configurar a loja integrada</h3>
        <h6>
            Entrar em <a href="www.lojaintegrada.com.br">www.lojaintegrada.com.br</a> e criar uma nova loja. Utilizar o email do gmail criado anteriormente e repetir a senha
            "vendeaiselladd". Abrir o menu a direita e clicar na opção Domínio / Certificado Digital.
        </h6>
        <br>
        <img src="{{ asset('img/instr/lojaintegradaconfiguracoes.png') }}" class="custom-instr-image">
        <br>
        <h6>Marcar a opção "Desejo definir um Subdomínio...". No lugar do "www" escrever no nome da loja (no exemplo, "lojadozulu"). No campo de texto seguinte, sempre colocar "vendeai.com".</h6>
        <br>
        <img src="{{ asset('img/instr/novodominio.png') }}" class="custom-instr-image">
        <br>
        <h6>Clicar em Adicionar domínio. Pronto! o redirecionamento está pronto. Agora é preciso configurar o cálculo de frete e formas de pagamento.</h6>
    </div>

    <br>

    <div>
        <h3>Configurar cálculo de frete</h3>
    </div>

    <br>

    <div>
        <h3>Configurar métodos de pagamento</h3>
    </div>

    <br><br>
    <h3><span class="custom-brand-green">Vende aí</span></h3>

@endsection
