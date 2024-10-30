@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>{{ __('ESCALA DE SOMNOLENCIA DE EPWORTH') }} - {{ \Carbon\Carbon::now()->format('d-m-Y') }}</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NOMBRES Y APELLIDOS</th>
                                <th scope="col">OCUPACION</th>
                                <th scope="col">PUNTAJE</th>
                                <th scope="col">DIAGNOSTICO</th>
                                <th scope="col">Fecha</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($epworths as $epworth)
                                <tr>
                                    <td>{{ $epworth->id }}</td>
                                    <td>{{ $epworth->name }}</td>
                                    <td>{{ $epworth->ocupation }}</td>
                                    <td>{{ $epworth->score }}</td>
                                    <td>{{ $epworth->dx }}</td>
                                    <td>{{ $epworth->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection