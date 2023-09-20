@extends('layouts.app')

@section('template_title')
    {{ $person->name ?? "{{ __('Show') Person" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Person</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('people.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $person->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $person->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $person->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $person->identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Profesion U Oficio:</strong>
                            {{ $person->profesion_u_oficio }}
                        </div>
                        <div class="form-group">
                            <strong>Es Casado:</strong>
                            {{ $person->es_casado }}
                        </div>
                        <div class="form-group">
                            <strong>Ingresos Mensuales:</strong>
                            {{ $person->ingresos_mensuales }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Actual:</strong>
                            {{ $person->vehiculo_actual }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
