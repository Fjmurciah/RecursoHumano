@extends('layouts.app')
@section('botones')

<a href="{{route('informacionmedica.index')}}" class="btn btn-primary mr-2 text-white">Atrás</a>

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

                    <p class="text-center">Por favor adjunte un documento que certifique su información medica.</p>
                    <hr style="margin: 3% 10%;">
                    <form method="POST" action="{{ route('informacionmedica.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="url" class="col-md-4 col-form-label text-md-end">Agregue un documento</label>

                            <div class="col-md">
                                <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" autofocus>

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary" style="width:100%; margin-left:20%">
                                    {{ __('Register') }}
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