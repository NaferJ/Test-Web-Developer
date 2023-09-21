<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $person->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $person->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $person->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificacion') }}
            {{ Form::text('identificacion', $person->identificacion, ['class' => 'form-control' . ($errors->has('identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesion_u_oficio') }}
            {{ Form::text('profesion_u_oficio', $person->profesion_u_oficio, ['class' => 'form-control' . ($errors->has('profesion_u_oficio') ? ' is-invalid' : ''), 'placeholder' => 'Profesion U Oficio']) }}
            {!! $errors->first('profesion_u_oficio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('es_casado', 'Es Casado') }}
            <select name="es_casado" class="form-control{{ $errors->has('es_casado') ? ' is-invalid' : '' }}">
                <option value="1" {{ $person->es_casado ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$person->es_casado ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('es_casado', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('ingresos_mensuales') }}
            {{ Form::text('ingresos_mensuales', $person->ingresos_mensuales, ['class' => 'form-control' . ($errors->has('ingresos_mensuales') ? ' is-invalid' : ''), 'placeholder' => 'Ingresos Mensuales']) }}
            {!! $errors->first('ingresos_mensuales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_actual') }}
            <select name="vehiculo_actual" class="form-control{{ $errors->has('vehiculo_actual') ? ' is-invalid' : '' }}" placeholder="Vehiculo Actual">
                <option value="">Seleccionar Vehículo Actual</option>
                @foreach($products as $product)
                    <option value="{{ $product->marca }} - {{ $product->modelo }}" {{ $product->marca }} - {{ $product->modelo == $person->vehiculo_actual ? 'selected' : '' }}>
                        Marca: {{ $product->marca }} | Modelo: {{ $product->modelo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('vehiculo_actual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        
        
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>