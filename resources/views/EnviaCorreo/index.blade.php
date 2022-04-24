@extends('layouts.app')
@section('botones')

<a href="{{route('indexController.index')}}" class="btn btn-primary mr-2 text-white">
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
    </svg>
    Atrás</a>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 1px 10px 10px rgba(0, 0, 0, 0.2); border-radius: 2%; align-items: center">
                <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                <lord-icon src="https://cdn.lordicon.com/ricptrwi.json" trigger="hover" colors="primary:#007bff" style="width:25%;height:25%">
                </lord-icon>

                <p>Enviar correo</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('correo.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Cargo</label>

                            <div class="col-md-7">

                                <select name="rol" id="rol" class="form-control @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" required autocomplete="rol" autofocus>
                                    <option value="">Seleccione</option>
                                    <option value="Director" {{ old('rol') == "Director" ? 'selected' : ''}}>Director</option>
                                    <option value="Líder" {{ old('rol') == "Líder" ? 'selected' : ''}}>Líder</option>
                                    <option value="Secretario" {{ old('rol') == "Secretario" ? 'selected' : ''}}>Secretario</option>
                                    <option value="Desarrollador" {{ old('rol') == "Desarrollador" ? 'selected' : ''}}>Desarrollador</option>
                                </select>

                                @error('rol')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="mensaje" class="col-md-4 col-form-label text-md-end">Agregue el mensaje y el link de la encuesta</label>

                            <div class="col-md-6">
                                <textarea name="mensaje" id="mensaje" cols="45" rows="3" required></textarea>


                                @error('mensaje')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary" style="width:85%; margin-left:10%">
                                    Enviar correos
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection