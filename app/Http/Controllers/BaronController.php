<?php

namespace App\Http\Controllers;

use App\Models\Baron;
use Illuminate\Http\Request;

class BaronController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('baron.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('baron.create');
    }


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
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->DataValidation($request);
        $data = Baron::create($request->all());

        $restageneral = $data->getAttribute('13') + $data->getAttribute('22') + $data->getAttribute('25') + $data->getAttribute('33') + $data->getAttribute('37') +
            $data->getAttribute('64') + $data->getAttribute('90') + $data->getAttribute('110');

        $sumageneral = $data->totalS1S5 + $data->totalS6S8 + $data->totalS9S11 + $data->totalS12S13 + $data->totalS14S15;

        /* Esta suma se guarda en general*/
        $general = $sumageneral - $restageneral;
        /* Esto se guarda en cegeneral*/
        $cegeneral = round(((($general - 465.31)/49.99)*15)+100);

        /* Esto se guarda en ce se calcula del total de intrapersonal */
        $ce = round(((($data->totalS1S5 - 156.70)/20.47)*15)+100);

        /*Conocimiento Emocional de si mismo*/
        $c_simismo = round(((($data->resultadoS1 - 29.79)/5.28)*15)+100);
        $seguridad = round(((($data->resultadoS2 - 25.82)/4.66)*15)+100);
        $autoconcepto = round(((($data->resultadoS3 - 35.78)/6.30)*15)+100);
        $autorealizacion = round(((($data->resultadoS4 - 37.72)/5.07)*15)+100);
        $independencia = round(((($data->resultadoS5 - 27.37)/4.48)*15)+100);

        dd($independencia);

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
