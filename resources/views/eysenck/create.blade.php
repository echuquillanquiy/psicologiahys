@extends('layouts.app')

@section('content')

    <form class="container-fluid" action="{{ route('eysenck.store') }}" method="POST">
            @csrf
        <div class="row justify-content-center mb-1">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>{{ __('EYSENCK - H&S OCCUPATIONAL SAC') }} - {{ \Carbon\Carbon::now()->format('d-m-Y') }}</h3>
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
                                <div class="mb-2">
                                    <label for="ocupation" class="form-label">Profesión</label>
                                    <input type="text" name="ocupation" class="form-control @error('ocupation') border border-danger @enderror" value="{{ old('ocupation') }}">
                                    @error('ocupation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <p class="bg-warning">
                                Aquí tienes algunas preguntas sobre el modo como Ud. se comporta, siente y actúa. Después
                                de cada pregunta, en la hoja de respuestas marque <strong style="font-size: 1.2rem">“SI"</strong> o <strong style="font-size: 1.2rem">"NO"</strong>.  Y Asegúrese de no omitir alguna pregunta.
                                Ahora, comience. Trabaje rápidamente y recuerde de contestar todas las preguntas. No hay contestaciones "correctas" o "incorrectas", y éste no es un test de inteligencia o habilidad, sino simplemente una medida de la forma como Ud. se comporta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="row">

                                @include('eysenck.includes.partial1')

                                @include('eysenck.includes.partial2')

                                @include('eysenck.includes.partial3')

                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                    <div class="mb-1">
                                        <input type="text" id="totale" name="suma_e" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                    <div class="mb-1">
                                        <input type="text" id="totaln" name="suma_n" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                    <div class="mb-1">
                                        <input type="text" id="totall" name="suma_l" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR RESPUESTAS</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>


@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.e').on('change', function () {
                // Inicializar la suma
                var suma = 0;

                // Iterar sobre todos los selects y sumar sus valores
                $('.e').each(function () {
                    suma += parseInt($(this).val()) || 0; // Convertir a entero y manejar posibles NaN
                });

                // Mostrar la suma en la vista
                $('#totale').val(suma);

            });

            $('.n').on('change', function () {
                // Inicializar la suma
                var suma2 = 0;

                // Iterar sobre todos los selects y sumar2 sus valores
                $('.n').each(function () {
                    suma2 += parseInt($(this).val()) || 0; // Convertir a entero y manejar posibles NaN
                });

                // Mostrar la suma2 en la vista
                $('#totaln').val(suma2);

            });

            $('.l').on('change', function () {
                // Inicializar la suma
                var suma3 = 0;

                // Iterar sobre todos los selects y sumar3 sus valores
                $('.l').each(function () {
                    suma3 += parseInt($(this).val()) || 0; // Convertir a entero y manejar posibles NaN
                });

                // Mostrar la suma3 en la vista
                $('#totall').val(suma3);

            });
        });
    </script>
@endsection
