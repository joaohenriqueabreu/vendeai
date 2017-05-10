<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Revendedor
            <small>Cadastrar</small>
        </h1>
    </div>
</div>

<div class="row">

    <div class="form-group">
        {{ Form::label('name', 'Nome da Loja') }} <br>
        {{ Form::text('name', $reseller->name, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('store_name', 'Subdomínio da Loja') }} <br>
        {{--<h6><small>Iremos tentar criar uma loja com esse nome. Exemplo: Super Loja, será www.superloja.vendeai.com. Entraremos em contato caso o nome já esteja ocupado.</small></h6>--}}
        <h6>
            <small>Por enquanto o link para as lojas da vende aí possuem o formato http://<u>nomedaloja</u>.vendeai.com .
                Você pode substituir o <u>nomedaloja</u> pelo nome que preferir. Exemplo.: Super Mega Loja vai ficar http://supermegaloja.vendeai.com. Os endereços não permitem caracteres especiais
                como ~, ´, `, ', " e etc. Entrar abaixo com o <u>nomedaloja</u>:
            </small>
        </h6>
        {{ Form::text('store_name', $reseller->store_name, array('class' => 'form-control')) }}
    </div>



    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', $reseller->email ? $reseller->email : ($user->email ? $user->email : null), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('document', 'CPF / CNPJ') }}
        {{ Form::text('document', $reseller->document, array('class' => 'form-control')) }}
    </div>

    @if(isset($user->admin))
        <div class="form-group">
            {{ Form::label('store_url', 'Link da loja') }}
            <h6><small>Campo reservado para os administradores entrarem com o link da loja quando ela estiver pronta.</small></h6>
            {{ Form::text('store_url', $reseller->store_url, array('class' => 'form-control')) }}
        </div>
    @endif

    <div class="form-group">
        {{ Form::label('phone', 'Telefone') }}
        {{ Form::text('phone', $reseller->phone, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Endereço') }}
        {{ Form::text('address', $reseller->address, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('user_id', 'User ID') }}
        {{ Form::text('user_id', isset($reseller->user) ? $reseller->user->id : $user->id , array('class' => 'form-control', 'disabled')) }}
    </div>

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>