<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //
    public function allProperties()
    {
        $properties = Property::all();
        return response()->json(['property' => $properties, 'message' => 'All properties'], 200);
    }

    public function getProperty($id)
    {
        $property = Property::find($id);
        if ($property) {
            return response()->json(['property' => $property, 'message' => 'Property found'], 200);
        } else {
            return response()->json(['message' => 'Property not found'], 404);
        }
    }
}
