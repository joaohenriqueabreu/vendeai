<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Produto
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
        {{ Form::label('description', 'Descrição') }}
        {{ Form::text('description') }}
    </div>

    <div class="form-group">

        <input type="filepicker" data-fp-apikey="AwyF6m010TpqHDBuk7nNjz" id="filestack_picker" onchange="sendFile(event.fpfile.url)">
        <input type="hidden" name="url" id="url">

        {{--{{ Form::label('url', 'Foto') }}--}}
        {{--{{ Form::text('url') }}--}}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Preço') }}
        {{ Form::text('price') }}
    </div>

    <div class="form-group">
        {{ Form::label('payment', 'Comissão') }}
        {{ Form::text('payment') }}
    </div>

    <div class="form-group">
        {{ Form::label('provider_id', 'Fornecedor') }}
        {{ Form::select('provider_id', $providers, $default) }}
    </div>

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>