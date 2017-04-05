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
        {{ Form::text('user_id') }}
    </div>

    {{--<div class="form-group">--}}
{{--        {{ Form::label('nerd_level', 'Nerd Level') }}--}}
{{--        {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) }}--}}
    {{--</div>--}}

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>