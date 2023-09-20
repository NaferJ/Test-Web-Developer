@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-3 shadow">
                <form method="POST" action="{{ route('people.addProduct', $person->id) }}">
                    @csrf

                    <div class="form-group">
                        <label for="product_id">Seleccione un producto:</label>
                        <select name="product_id" id="product_id" class="form-control">
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->placa }} - {{ $product->marca }} - {{ $product->modelo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection('content')
