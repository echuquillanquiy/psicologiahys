<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $audits = Audit::orderBy('id', 'desc')
            ->whereDate('created_at', now()->toDateString())
            ->paginate(100);

        return view('audit.index', compact('audits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('audit.create');
    }

    public function ValidacionAudit(Request $request)
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
        $this->ValidacionAudit($request);

        $audit = Audit::create(request()->all());

        $sumaaudit = $audit->p1 + $audit->p2 + $audit->p3 + $audit->p4 + $audit->p5 + $audit->p6 + $audit->p7 + $audit->p8 + $audit->p9 + $audit->p10;

        if ($sumaaudit >=0 && $sumaaudit <=8)
        {
            $dxaudit = "SIN RIESGO";
        }
        elseif ($sumaaudit >= 9 && $sumaaudit <= 15)
        {
            $dxaudit = "RIESGO";
        }elseif ($sumaaudit >= 16 && $sumaaudit <= 19)
        {
            $dxaudit = "PERJUDICIAL";
        } else {
            $dxaudit = "ALTO CONSUMO";
        }

        $audit->update([
            'score' => $sumaaudit,
            'dx' => $dxaudit
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
