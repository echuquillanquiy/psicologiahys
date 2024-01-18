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

                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR RESPUESTAS</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>


@endsection

@section('scripts')

@endsection
