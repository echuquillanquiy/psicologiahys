@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('test/bournout.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TEST DE ESTRÉS Y BOURNOUT</h5>
                    <a href="{{ route('bournout.create') }}" class="btn btn-primary">Click para acceder al examen</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('test/eysenk.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">EYSENCK A-B</h5>
                    <a href="{{ route('eysenck.create') }}" class="btn btn-success">Click para acceder al examen</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('test/baron.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">INVENTARIO EMOCIONAL BARON</h5>
                    <a href="{{ route('baron.create') }}" class="btn btn-info">Click para acceder al examen</a>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
