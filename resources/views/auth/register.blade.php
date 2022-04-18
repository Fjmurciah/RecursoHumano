@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: -5%">
            <div class="card" style="box-shadow: 1px 10px 10px rgba(0, 0, 0, 0.2); border-radius: 2%">
            <div class="" style="display: flex; justify-content: center;">
                    <div>
                        <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/eszyyflr.json"
                            trigger="loop"
                            colors="primary:#000000,secondary:#794628"
                            stroke="90"
                            state="hover-wave"
                            style="width:250px;height:250px">
                        </lord-icon>
                        <h3 class="text-center">Registro</h3>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hojasdevida.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="row">
                        
                        <div class="col">
                        
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

                                <select name="rol" id="rol"  class="form-control @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" required autocomplete="rol" autofocus>
                                    <option value="">Seleccione</option>
                                    <option value="Director" {{ old('rol') == "Director" ? 'selected' : ''}}>Director</option>
                                    <option value="Líder"  {{ old('rol') == "Líder" ? 'selected' : ''}}>Líder</option>
                                    <option value="Secretario"  {{ old('rol') == "Secretario" ? 'selected' : ''}}>Secretario</option>
                                    <option value="Desarrollador"  {{ old('rol') == "Desarrollador" ? 'selected' : ''}}>Desarrollador</option>
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

                                <select name="estado" id="estado"  class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>
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

                        </div>

                        <div class="col">

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