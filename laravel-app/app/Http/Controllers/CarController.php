<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function store(Request $request)
    {
        $car = Car::create($request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|integer',
        ]));

        return response()->json($car, 201);
    }

    public function show(string $id)
    {
        return Car::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->validate([
            'brand' => 'sometimes|string',
            'model' => 'sometimes|string',
            'price' => 'sometimes|integer',
        ]));

        return response()->json($car);
    }

    public function destroy(string $id)
    {
        Car::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}