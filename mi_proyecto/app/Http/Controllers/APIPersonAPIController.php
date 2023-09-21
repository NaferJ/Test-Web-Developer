<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;

class APIPersonAPIController extends Controller
{
    //
    public function getAllPeople()
    {
        $people = Person::all();

        return response()->json($people);
    }
}
