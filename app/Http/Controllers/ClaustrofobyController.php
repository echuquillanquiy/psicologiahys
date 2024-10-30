<?php

namespace App\Http\Controllers;

use App\Models\Claustrofoby;
use Illuminate\Http\Request;

class ClaustrofobyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $claustrofobies = Claustrofoby::orderBy('id', 'desc')
            ->whereDate('created_at', now()->toDateString())
            ->paginate(100);

        return view('clq.index', compact('claustrofobies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clq.create');
    }


    public function ValidacionClq(Request $request)
    {
        $rules = [
            'name' => 'required|min:10',
            'ocupation' => 'required|min:5'
        ];

        $messages = [
            'name.required' => 'Sus Nombres y Apellidos son obligatorios.',
            'name.min' => ' Ingrese sus nombres y apellidos completos.',
            'ocupation.required' => 'Coloca tu profesión.',
            'ocupation.min' => 'Ingrese una profesión válida.',
        ];

        $this->validate($request, $rules, $messages);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->ValidacionClq($request);
        $clq = Claustrofoby::create(request()->all());

        $sumaclq = $clq->p1 + $clq->p2 +$clq->p3 +$clq->p4 +$clq->p5 +$clq->p6 +$clq->p7 +$clq->p8;

        if ($sumaclq >=0 && $sumaclq <=31)
        {
            $dxclq = "AUSENCIA";
        }
        elseif ($sumaclq >= 32 && $sumaclq <= 71)
        {
            $dxclq = "MODERADA PRESENCIA";
        } else {
            $dxclq = "ALTA PRESENCIA";
        }


        $clq->update([
            'score' => $sumaclq,
            'dx' => $dxclq

        ]);

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
