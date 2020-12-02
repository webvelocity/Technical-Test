<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyStoreRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $properties = Property::all();

        return view('property.index', compact('amenities'));
    }

    /**
     * @param \App\Http\Requests\PropertyStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyStoreRequest $request)
    {
        $property = Property::create($request->validated());

        return redirect()->route('property.index');
    }
}
