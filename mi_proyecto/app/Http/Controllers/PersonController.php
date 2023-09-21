<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Person;
use Illuminate\Http\Request;

/**
 * Class PersonController
 * @package App\Http\Controllers
 */
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::paginate();

        return view('person.index', compact('people'))
            ->with('i', (request()->input('page', 1) - 1) * $people->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = new Person();
        $products = Product::select('tipo_de_vehiculo', 'placa', 'marca', 'modelo')->distinct()->get();
        return view('person.create', compact('products','person'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Person::$rules);

        $person = Person::create($request->all());

        return redirect()->route('people.index')
            ->with('success', 'Person created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::find($id);

        return view('person.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::find($id);
        $products = Product::select('tipo_de_vehiculo', 'placa', 'marca', 'modelo')->distinct()->get();

        return view('person.edit', compact('person', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Person $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        request()->validate(Person::$rules);

        $person->update($request->all());

        return redirect()->route('people.index')
            ->with('success', 'Person updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $person = Person::find($id)->delete();

        return redirect()->route('people.index')
            ->with('success', 'Person deleted successfully');
    }

    public function showAddProductForm(Person $person)
    {
        $products = Product::all(); // Obtener todos los productos disponibles
        return view('add-product-form', compact('person', 'products'));
    }

    public function addProduct(Request $request, Person $person)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $product = Product::find($request->input('product_id'));

        // Asociar el producto a la persona
        $person->products()->attach($product);

        return redirect()->route('people.show', $person->id)
            ->with('success', 'Producto agregado al historial exitosamente.');
    }
}
