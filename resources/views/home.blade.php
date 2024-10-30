@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center text-center">

        <div class="row">
            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">TEST DE ESTRÉS Y BOURNOUT</h5>
                        <a href="{{ route('bournout.create') }}" class="btn btn-primary">Click para acceder al examen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">EYSENCK A-B</h5>
                        <a href="{{ route('eysenck.create') }}" class="btn btn-success">Click para acceder al examen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">INVENTARIO EMOCIONAL BARON</h5>
                        <a href="{{ route('baron.create') }}" class="btn btn-info">Click para acceder al examen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">CUESTIONARIO DE CLAUSTROFOBIA</h5>
                        <a href="{{ route('clq.create') }}" class="btn btn-danger">Click para acceder al examen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">CUESTIONARIO AUDIT</h5>
                        <a href="{{ route('baron.create') }}" class="btn btn-warning">Click para acceder al examen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">CUESTIONARIO DE ACROFOBIA (COHEN)</h5>
                        <a href="{{ route('baron.create') }}" class="btn btn-secondary">Click para acceder al examen</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <div class="col-md-2 col-12">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">ESCALA DE SOMNOLENCIA DE EPWORTH</h5>
                        <a href="{{ route('baron.create') }}" class="btn btn-outline-danger">Click para acceder al examen</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
