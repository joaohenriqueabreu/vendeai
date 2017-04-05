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
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name') }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email') }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Telefone') }}
        {{ Form::text('phone') }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Endereço') }}
        {{ Form::text('address') }}
    </div>

    <div class="form-group">
        {{ Form::label('user_id', 'User ID') }}
        {{ Form::text('user_id', $user_id, ['class' => 'disabled']) }}
    </div>

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>