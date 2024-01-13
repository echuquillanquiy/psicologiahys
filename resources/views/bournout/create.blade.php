@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>{{ __('ESTRÉS Y BOURNOUT - H&S OCCUPATIONAL SAC') }} - {{ \Carbon\Carbon::now()->format('d-m-Y') }}</h3>
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
                                    <div class="mb-2">
                                        <label for="ocupacion" class="form-label">Profesión</label>
                                        <input type="text" name="ocupacion" class="form-control @error('ocupacion') border border-danger @enderror" value="{{ old('ocupacion') }}">
                                        @error('ocupacion')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <h5 class="bg-secondary text-center text-white p-1">Escala de Frecuencia de Sentimientos</h5>

                                <div class="col-1 text-center bg-info border border-1">0 <br> Nunca</div>

                                <div class="col-2 text-center bg-info border border-1">1 <br> Pocas veces al año</div>

                                <div class="col-2 text-center bg-info border border-1">2 <br> Una vez al mes o menos</div>

                                <div class="col-2 text-center bg-info border border-1">3 <br> Unas pocas veces al mes</div>

                                <div class="col-2 text-center bg-info border border-1">4 <br> Una vez a la semana</div>

                                <div class="col-2 text-center bg-info border border-1">5 <br> Pocas veces a la semana</div>

                                <div class="col-1 text-center bg-info border border-1">6 <br> Todos los dias</div>

                                <h5 class="bg-secondary text-center text-white p-1 mt-1">Conteste las frases indicando la frecuencia con que Ud. ha experimentado ese sentimiento.</h5>

                            </div>

                            <hr>

                            <div class="row">
                                    <label for="answer1" class="col-sm-10 col-form-label">1. Me siento emocionalmente agotado por mi trabajo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer1" value="{{ old('answer1') }}">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer2" class="col-sm-10 col-form-label">2. Me siento cansado al final de la jornada de trabajo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer2">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer3" class="col-sm-10 col-form-label">3. Me siento fatigado cuando me levanto por la mañana y tengo que enfrentarme con otro día de trabajo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer3">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer4" class="col-sm-10 col-form-label">4. Fácilmente comprendo cómo se sienten las personas.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer4">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer5" class="col-sm-10 col-form-label">5. Creo que trato a algunas personas como si fueran objetos no personales.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer5">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer6" class="col-sm-10 col-form-label">6. Trabajar todo el día con personas es un esfuerzo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer6">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer7" class="col-sm-10 col-form-label">7. Trato muy eficazmente los problemas de las personas.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer7">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer8" class="col-sm-10 col-form-label">8. Me siento “quemado” por mi trabajo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer8">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer9" class="col-sm-10 col-form-label">9. Creo que estoy influyendo positivamente con mi trabajo en las vidas de los demás.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer9">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer10" class="col-sm-10 col-form-label">10. Me he vuelto más insensible con la gente desde que ejerzo esta profesión.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer10">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer11" class="col-sm-10 col-form-label">11. Me preocupa el hecho de que este trabajo me este endureciendo emocionalmente.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer11">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer12" class="col-sm-10 col-form-label">12. Me siento muy activo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer12">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer13" class="col-sm-10 col-form-label">13. Me siento frustrado en mi trabajo.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer13">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer14" class="col-sm-10 col-form-label">14. Creo que estoy trabajando demasiado.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer14">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer15" class="col-sm-10 col-form-label">15. No me  preocupa realmente lo que le ocurre realmente a algunas personas a las que doy servicio.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer15">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer16" class="col-sm-10 col-form-label">16. Trabajar directamente con personas me produce estrés</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer16">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer17" class="col-sm-10 col-form-label">17. Fácilmente puedo crear una atmósfera relajada con las personas a las que doy servicio.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer17">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer18" class="col-sm-10 col-form-label">18. Me siento estimulado después de trabajar en contacto con personas.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer18">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer19" class="col-sm-10 col-form-label">19. He conseguido muchas cosas útiles en mi profesión.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer19">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer20" class="col-sm-10 col-form-label">20. Me siento acabado.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer20">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>

                                    <label for="answer21" class="col-sm-10 col-form-label">21. En mi trabajo trato los problemas emocionales con mucha calma.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer21">
                                            <option value="">Elija</option>
                                            <option value="6">0</option>
                                            <option value="5">1</option>
                                            <option value="4">2</option>
                                            <option value="3">3</option>
                                            <option value="2">4</option>
                                            <option value="1">5</option>
                                            <option value="0">6</option>
                                        </select>
                                    </div>

                                    <label for="answer22" class="col-sm-10 col-form-label">22. Creo que las personas que trato me culpan de algunos de sus problemas.</label>
                                    <div class="col-sm-2 mb-1">
                                        <select class="form-select respuesta" aria-label="Default select example" name="answer22">
                                            <option value="">Elija</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>


                                <div class="col-12 col-lg-2 col-sm-12 col-md-12">
                                    <div class="mb-1">
                                        <input type="hidden" id="total" name="score" class="form-control"  autofocus>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 col-sm-12 col-md-12">
                                    <div class="mb-1">
                                        <input type="hidden" id="percent" name="percent" class="form-control"  autofocus>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-8 col-sm-12 col-md-12">
                                    <div class="mb-1">
                                        <input type="hidden" id="category" name="category" class="form-control"  autofocus>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-outline-primary">Guardar</button>

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
