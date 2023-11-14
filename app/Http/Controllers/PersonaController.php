<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Persona::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->json()->all(), [
            'nombres' => ['required', 'string'],
            'apellidos' => ['required', 'string'],
            'ciudad' => ['required', 'string'],
            'edad' => ['required', 'integer'],
            'fecha_nacimiento' => ['required', 'date'],
            'genero' => ['required', 'string', 'in:M,F,O'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $persona = Persona::create($request->json()->all());

        return $persona;
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
