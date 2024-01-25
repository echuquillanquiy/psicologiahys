@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>{{ __('INVENTARIO EMOCIONAL BARON - H&S OCCUPATIONAL SAC') }} - {{ \Carbon\Carbon::now()->format('d-m-Y') }}</h3>
                    </div>
                    <form action="{{ route('bournout.store') }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-lg-6 col-sm-12 col-md-12">
                                    <div class="mb-0">
                                        <label for="name" class="form-label">Nombres y Apellidos</label>
                                        <input type="text" name="name" class="form-control @error('name') border border-danger @enderror" value="{{ old('name') }}" placeholder="Por favor rellena tus datos" autofocus>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 col-sm-12 col-md-12">
                                    <div class="mb-0">
                                        <label for="age" class="form-label">Edad</label>
                                        <input type="number" name="age" class="form-control @error('age') border border-danger @enderror" value="{{ old('age') }}">
                                        @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 col-sm-12 col-md-12">
                                    <div class="mb-1">
                                        <label for="ocupation" class="form-label">Profesión</label>
                                        <input type="text" name="ocupation" class="form-control @error('ocupation') border border-danger @enderror" value="{{ old('ocupation') }}">
                                        @error('ocupation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-2 text-center bg-info border border-1">1 <br> Nunca es mi caso.</div>

                                <div class="col-3 text-center bg-info border border-1">2 <br> Pocas veces es mi caso.</div>

                                <div class="col-2 text-center bg-info border border-1">3 <br> A veces es mi caso.</div>

                                <div class="col-3 text-center bg-info border border-1">4 <br> Muchas veces es mi caso</div>

                                <div class="col-2 text-center bg-info border border-1">5 <br> Siempre es mi caso.</div>

                                <h5 class="text-center">Este cuestionario contiene una serie de frases cortas que permite hacer una descripción de ti mismo(a). Para ello, debes indicar en qué medida cada una de las oraciones que aparecen a continuación es verdadera, de acuerdo a como te sientes, piensas o actúas la mayoría de las veces.
                                    Hay cinco respuestas por cada frase.
                                </h5>

                            </div>

                            <hr>

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="card-body">

                                            <div class="row">

                                                @include('baron.includes.partial1')

                                                @include('baron.includes.partial2')

                                                @include('baron.includes.partial3')

                                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                                    <div class="mb-1">
                                                        <input type="hidden" id="totale" name="suma_e" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                                    <div class="mb-1">
                                                        <input type="hidden" id="totaln" name="suma_n" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                                    <div class="mb-1">
                                                        <input type="hidden" id="totall" name="suma_l" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-8 col-sm-12 col-md-12">
                                                    <div class="mb-1">
                                                        <input type="hidden" id="diagnostico" name="dx" class="form-control"  autofocus>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR RESPUESTAS</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Escuchar el cambio en los selects con la clase 'respuesta'
            $('.respuesta').on('change', function () {
                // Inicializar la suma
                var suma = 0;

                // Iterar sobre todos los selects y sumar sus valores
                $('.respuesta').each(function () {
                    suma += parseInt($(this).val()) || 0; // Convertir a entero y manejar posibles NaN
                });

                // Mostrar la suma en la vista
                $('#total').val(suma);

                var divisionResultado = (suma / 132) * 100;
                $('#percent').val(divisionResultado.toFixed(2));

                var category = obtenerDiagnostico(divisionResultado);
                $('#category').val(category);
            });

            function obtenerDiagnostico(resultado) {
                // Lógica de condición basada en rangos (ajústala según tus necesidades)
                if (resultado >= 0 && resultado <= 22) {
                    return 'Ausencia de dificultades y estrés';
                } else if (resultado > 23 && resultado <= 59) {
                    return 'Baja presencia de dificultades y estrés';
                } else if (resultado > 60 && resultado <= 90) {
                    return 'Moderada presencia de dificultades y estrés';
                } else {
                    return 'Moderada presencia de dificultades y estrés';
                }
            }
        });
    </script>
@endsection
