@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contenedor de botones -->
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mr-3">Ver Vehículos</a>
                <a href="{{ route('people.index') }}" class="btn btn-success btn-lg">Ver Personas</a>
            </div>
        </div>
    </div>
</div>
@endsection
