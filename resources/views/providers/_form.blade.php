<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Fornecedores
            <small>Cadastrar</small>
        </h1>
    </div>
</div>

<div class="row">

    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', $provider->name, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', $provider->email ? $provider->email : ($user->email ? $user->email : null), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('document', 'CPF / CNPJ') }}
        {{ Form::text('email', $provider->document, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('market', 'Categoria') }}
        {{ Form::text('market', $provider->market, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Telefone') }}
        {{ Form::text('phone', $provider->phone, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Endereço') }}
        {{ Form::text('address', $provider->address, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('user_id', 'User ID') }}
        {{ Form::text('user_id', isset($provider->user) ? $provider->user->id : $user->id , array('class' => 'form-control', 'disabled')) }}
    </div>

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>