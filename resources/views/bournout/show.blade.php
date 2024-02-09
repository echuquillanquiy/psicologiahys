@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="alert alert-secondary">{{ __('ESTRES Y BOURNOUT') }} - PACIENTE: {{ $bournout->name }} - {{ $bournout->created_at }}</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>PUNTAJE TOTAL: </p>
                                <p>PORCENTAJE:</p>
                                <p>CATEGORIA: </p>
                            </div>

                            <div class="col-lg-3">
                                <p>{{ $bournout->score }}</p>
                                <p>{{ $bournout->percent }} %</p>
                                <p>{{ $bournout->category }}</p>
                            </div>

                            <div class="col-lg-7">
                                <label for="">MAXIMO</label>
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-bg-warning" style="width: 100%">100%</div>
                                </div>

                                <label for="">LOGRADO</label>
                                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ $bournout->percent }}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-bg-danger" style="width: {{ $bournout->percent }}%">{{ $bournout->percent }}%</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
