@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Agregar Producto al Historial de {{ $person->nombres }} {{ $person->apellidos }}</h2>

        <form action="{{ route('people.addProduct', ['person' => $person->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_id">Selecciona un Producto:</label>
                <select class="form-control" id="product_id" name="product_id">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->marca }} - {{ $product->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
@endsection
