@extends('layouts.app')
@section('botones')

<a href="{{route('informacionacademica.index')}}" class="btn btn-primary mr-2 text-white">
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
                <lord-icon src="https://cdn.lordicon.com/btnwcdpq.json" trigger="hover" colors="primary:#007bff" state="hover-2" style="width:25%;height:25%">
                </lord-icon>
                <div class="card-body">
                    <form method="POST" action="{{ route('informacionacademica.update', ['academica'=> $academica->id]) }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $academica->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="url" class="col-md-4 col-form-label text-md-end">Agregue el documento</label>

                            <div class="col-md">
                                <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $academica->url }}" required autocomplete="url" autofocus>


                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="url" class="col-md-4 col-form-label text-md-end"></label>
                            <div class="col-md-6">
                                <a class="form-control" href="/storage/{{$academica->url}}">Información académica</a>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary" style="width:100%; margin-left:20%">
                                    {{ __('Actualizar') }}
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