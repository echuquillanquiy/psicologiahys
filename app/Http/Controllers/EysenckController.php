<?php

namespace App\Http\Controllers;

use App\Models\Eysenck;
use Illuminate\Http\Request;

class EysenckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eysencks = Eysenck::orderBy('id', 'desc')->paginate(100);

        return view('eysenck.index', compact('eysencks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eysenck.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function DataValidation(Request $request)
    {
        $rules = [
            'name' => 'required|min:10',
            'age' => 'required|digits:2',
            'ocupation' => 'required|min:5'
        ];

        $messages = [
            'name.required' => 'Sus Nombres y Apellidos son obligatorios.',
            'name.min' => ' Ingrese sus nombres y apellidos completos.',
            'age.required' => 'Coloca tu edad.',
            'age.digits' => 'Ingrese su edad correcta.',
            'ocupation.required' => 'Coloca tu profesión.',
            'ocupation.min' => 'Ingrese una profesión válida.'
        ];

        $this->validate($request, $rules, $messages);
    }
    public function store(Request $request)
    {
        $this->DataValidation($request);
        Eysenck::create($request->all());

        return redirect('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
