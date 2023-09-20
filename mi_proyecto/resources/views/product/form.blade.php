<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $product->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $product->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $product->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_de_puertas') }}
            {{ Form::text('numero_de_puertas', $product->numero_de_puertas, ['class' => 'form-control' . ($errors->has('numero_de_puertas') ? ' is-invalid' : ''), 'placeholder' => 'Numero De Puertas']) }}
            {!! $errors->first('numero_de_puertas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_de_vehiculo') }}
            {{ Form::text('tipo_de_vehiculo', $product->tipo_de_vehiculo, ['class' => 'form-control' . ($errors->has('tipo_de_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Vehiculo']) }}
            {!! $errors->first('tipo_de_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>