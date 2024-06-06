@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="alert alert-secondary">{{ __('INVENTARIO EMOCIONAL BARON - RESULTADOS') }} - PACIENTE: {{ $baron->name }} - {{ $baron->created_at }}</h3>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="text-bg-info">INTRAPERSONAL</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $ce_intrapersonal }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-info" style="width: {{ $ce_intrapersonal }}%">{{ $ce_intrapersonal }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>COMPRENSION DE SI MISMO</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $c_simismo }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $c_simismo }}%">{{ $c_simismo }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>SEGURIDAD</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $seguridad }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $seguridad }}%">{{ $seguridad }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>AUTOCONCEPTO</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $autoconcepto }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $autoconcepto }}%">{{ $autoconcepto }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>AUTOREALIZACION</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $autorealizacion }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $autorealizacion }}%">{{ $autorealizacion }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>INDEPENDENCIA</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $independencia }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $independencia }}%">{{ $independencia }}%</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="text-bg-info">INTERPERSONAL</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $interpersonales }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-info" style="width: {{ $interpersonales }}%">{{ $interpersonales }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>EMPATIA</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $empatia }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $empatia }}%">{{ $empatia }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>RELACIONES INTERPERSONALES</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $r_interpersonales }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $r_interpersonales }}%">{{ $r_interpersonales }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>RESPONSABILIDAD SOCIAL</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $r_social }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $r_social }}%">{{ $r_social }}%</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="text-bg-info">ADAPTABILIDAD</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $ce_adaptabilidad }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-info" style="width: {{ $ce_adaptabilidad }}%">{{ $ce_adaptabilidad }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>SOLUCION DE PROBLEMAS</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $s_problemas }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $s_problemas }}%">{{ $s_problemas }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>PRUEBA DE LA REALIDAD</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $p_realidad }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $p_realidad }}%">{{ $p_realidad }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>FLEXIBILIDAD</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $flexibilidad }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $flexibilidad }}%">{{ $flexibilidad }}%</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="text-bg-info">MANEJO DEL ESTRES</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $ce_tension }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-info" style="width: {{ $ce_tension }}%">{{ $ce_tension }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>TOLERANCIA AL ESTRES</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $t_estres }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $t_estres }}%">{{ $t_estres }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>CONTROL DE IMPULSOS</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $c_impulsos }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $c_impulsos }}%">{{ $c_impulsos }}%</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <p class="text-bg-info">ESTADO DE ANIMO</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $g_animo }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-info" style="width: {{ $g_animo }}%">{{ $g_animo }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>FELICIDAD</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $felicidad }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $felicidad }}%">{{ $felicidad }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p>OPTIMISMO</p>
                            </div>

                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $optimismo }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-primary" style="width: {{ $optimismo }}%">{{ $optimismo }}%</div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <p class="text-bg-warning">GENERAL (CE)</p>
                            </div>
                            <div class="col-lg-10">
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $cegeneral }}" aria-valuemin="0" aria-valuemax="120">
                                    <div class="progress-bar text-bg-warning" style="width: {{ $cegeneral }}%">{{ $cegeneral }}%</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
