@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>{{ __('INVENTARIO EMOCIONAL BARON - H&S OCCUPATIONAL SAC') }} - {{ \Carbon\Carbon::now()->format('d-m-Y') }}</h3>
                    </div>
                    <form action="{{ route('baron.store') }}" method="POST">
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
                                                        <input type="text" id="resultadoS1" name="resultadoS1" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS2" name="resultadoS2" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS3" name="resultadoS3" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS4" name="resultadoS4" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS5" name="resultadoS5" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS6" name="resultadoS6" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS7" name="resultadoS7" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS8" name="resultadoS8" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS9" name="resultadoS9" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS10" name="resultadoS10" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS11" name="resultadoS11" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS12" name="resultadoS12" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS13" name="resultadoS13" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS14" name="resultadoS14" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS15" name="resultadoS15" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS16" name="resultadoS16" class="form-control" placeholder="">
                                                        <input type="text" id="resultadoS17" name="resultadoS17" class="form-control" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                                                    <div class="mb-1">

                                                        <input type="text" id="totalS1S5" name="totalS1S5" placeholder="Total de S1 a S5">
                                                        <input type="text" id="totalS6S8" name="totalS6S8" placeholder="Total de S6 a S8">
                                                        <input type="text" id="totalS9S11" name="totalS9S11" placeholder="Total de S9 a S11">
                                                        <input type="text" id="totalS12S13" name="totalS12S13" placeholder="Total de S12 a S13">
                                                        <input type="text" id="totalS14S15" name="totalS14S15" placeholder="Total de S14 a S15">
                                                        <input type="text" id="totalS16S17" name="totalS16S17" placeholder="Total de S16 a S17">
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
        // Función para calcular la suma de los elementos con una clase específica
        function calcularSumaPorClase(clase) {
            let elementos = document.getElementsByClassName(clase);
            let suma = 0;
            for (let i = 0; i < elementos.length; i++) {
                suma += parseFloat(elementos[i].value) || 0; // Asegura que el valor sea un número
            }
            return suma;
        }

        // Función para actualizar los resultados en los inputs
        function actualizarResultados() {
            // Actualizar resultados para clases s1 a s17
            for (let i = 1; i <= 17; i++) {
                document.getElementById(`resultadoS${i}`).value = calcularSumaPorClase(`s${i}`);
            }

            let totalS1S5 = calcularSumaPorClaseRango("s", 1, 5);
            let totalS6S8 = calcularSumaPorClaseRango("s", 6, 8);
            let totalS9S11 = calcularSumaPorClaseRango("s", 9, 11);
            let totalS12S13 = calcularSumaPorClaseRango("s", 12, 13);
            let totalS14S15 = calcularSumaPorClaseRango("s", 14, 15);
            let totalS16S17 = calcularSumaPorClaseRango("s", 16, 17);

            // Actualizar resultados para rangos específicos
            document.getElementById("totalS1S5").value = totalS1S5;
            document.getElementById("totalS6S8").value = totalS6S8;
            document.getElementById("totalS9S11").value = totalS9S11;
            document.getElementById("totalS12S13").value = totalS12S13;
            document.getElementById("totalS14S15").value = totalS14S15;
            document.getElementById("totalS16S17").value = totalS16S17;


        }

        // Función para calcular la suma de los elementos en un rango específico
        function calcularSumaPorClaseRango(prefijo, desde, hasta) {
            let suma = 0;
            for (let i = desde; i <= hasta; i++) {
                suma += calcularSumaPorClase(`${prefijo}${i}`);
            }
            return suma;
        }

        // Llama a la función al cargar la página
        window.onload = actualizarResultados;

    </script>
@endsection
