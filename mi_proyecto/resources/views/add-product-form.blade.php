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
