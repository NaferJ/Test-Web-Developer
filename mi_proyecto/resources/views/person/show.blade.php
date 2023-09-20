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

                        {{-- Historial de Productos --}}
                        <div class="form-group">
                            <strong>Historial de Productos:</strong>
                            @if ($person->products->count() > 0)
                                <ul>
                                    @foreach ($person->products as $product)
                                        <li>{{ $product->placa }} - {{ $product->marca }} - {{ $product->modelo }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No se encontraron productos en el historial de esta persona.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
