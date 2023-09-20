@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $product->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $product->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $product->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero De Puertas:</strong>
                            {{ $product->numero_de_puertas }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Vehiculo:</strong>
                            {{ $product->tipo_de_vehiculo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
