@extends('layouts.app')

@section('botones')

<a href="{{route('hojasdevida.index')}}" class="btn btn-primary mr-2 text-white">
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
    </svg>
    Atrás</a>

@endsection

@section('content')
<div class="container">
    <div class="card" style="box-shadow: 1px 10px 10px rgba(0, 0, 0, 0.2); border-radius: 2%">
        <div class="" style="display: flex; justify-content: center;">
            <div style="margin-top:2%">
                <h3 class="text-center">Registro</h3>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('hojasdevida.store') }}" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="d-flex bd-highlight">

                    <div class="p-2 flex-shrink-1 bd-highlight">

                        <div style="margin:10% 20%">
                            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/eszyyflr.json" trigger="loop" delay="5000" colors="primary:#000000,secondary:#794628" stroke="90" state="hover-wave" style="width:250px;height:250px">
                            </lord-icon>
                        </div>

                    </div>

                    <div class="p-2 w-100 bd-highlight">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Cargo</label>

                            <div class="col-md-7">

                                <select name="rol" id="rol" class="form-select @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" required autocomplete="rol">
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
                            <label for="url" class="col-md-4 col-form-label text-md-end">Hoja de vida</label>

                            <div class="col-md-7">
                                <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" autofocus>

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="url" class="col-md-4 col-form-label text-md-end">Estado del empleado</label>

                            <div class="col-md-7">
                                <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
                                    <option value="">Seleccione</option>
                                    <option value="Activo" {{ old('estado') == "Activo" ? 'selected' : ''}}>Activo</option>
                                    <option value="Inactivo" {{ old('estado') == "Inactivo" ? 'selected' : ''}}>Inactivo</option>
                                </select>
                                @error('estado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico    ') }}</label>
                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary" style="width:80%; margin-left:10%">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
