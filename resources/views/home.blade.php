@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center text-center">

        <div class="row">

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">TEST DE ESTRÉS Y BOURNOUT</h5>
                        <a href="{{ route('bournout.create') }}" class="btn btn-primary">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">EYSENCK A-B</h5>
                        <a href="{{ route('eysenck.create') }}" class="btn btn-success">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">INVENTARIO EMOCIONAL BARON</h5>
                        <a href="{{ route('baron.create') }}" class="btn btn-info">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUESTIONARIO DE CLAUSTROFOBIA</h5>
                        <a href="{{ route('clq.create') }}" class="btn btn-danger">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUESTIONARIO AUDIT</h5>
                        <a href="{{ route('audit.create') }}" class="btn btn-warning">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUESTIONARIO DE ACROFOBIA (COHEN)</h5>
                        <a href="{{ route('cohen.create') }}" class="btn btn-secondary">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-12 col-12 mb-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ESCALA DE SOMNOLENCIA DE EPWORTH</h5>
                        <a href="{{ route('epworth.create') }}" class="btn btn-outline-danger">ACCEDER AL EXAMEN</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
