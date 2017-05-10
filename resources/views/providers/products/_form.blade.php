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
        {{ Form::text('name', $product->name, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Descrição') }}
        {{ Form::text('description', $product->description, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">

        <input type="filepicker" data-fp-apikey="AwyF6m010TpqHDBuk7nNjz" id="filestack_picker" onchange="sendFile(event.fpfile.url)">
        <input type="hidden" name="url" id="url">

        {{-- Se há algum URL associado atribui a variável do angular --}}
        <script>
            var photo_url = "{{ $product->url }}";
        </script>

        <img id="img_preview" src="#" class="custom-hidden">

        {{--{{ Form::label('url', 'Foto') }}--}}
        {{--{{ Form::text('url') }}--}}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Preço') }}
        {{ Form::text('price', $product->price, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('payment', 'Comissão') }}
        {{ Form::text('payment', $product->payment, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('provider_id', 'Fornecedor') }}
        {{ Form::select('provider_id', $providers, $provider->id, array('class' => 'form-control', 'disabled')) }}
    </div>

    {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</div>