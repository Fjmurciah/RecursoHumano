@extends('layouts.app')
@section('botones')

<a href="{{route('hojasdevida.index')}}" class="btn btn-primary mr-2 text-white">
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
    </svg>
    Atrás</a>

@endsection
@section('content')
<article class="contenido-hoja">
    <h1 class="text-center mb-4">{{$user->name}}</h1>

    <div class="row">

        <div class="adjunto col card card-infoempleado">
            <h6 class="my-3 text-dark">Hoja de vida</h6>
            <a href="/storage/{{$user->url}}" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                <lord-icon src="https://cdn.lordicon.com/rwzqttux.json" trigger="hover" colors="primary:#007bff" state="hover-1" style="width:100%;height:100%">
                </lord-icon>
            </a>
            click para ver
        </div>

        <div class="hoja-meta col card card-infoempleado">
            <h6 class="my-3 text-dark">Cargo</h6>
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/dzsrunpu.json" trigger="hover" colors="primary:#6c757d" state="hover" style="width:100%;height:100%">
            </lord-icon>
            <h3>{!! $user->rol !!}</h3>
        </div>

        <div class="hoja-meta col card card-infoempleado">
            <h6 class="my-3 text-dark">Estado</h6>
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/tcvueyac.json" trigger="hover" colors="primary:#28a745" style="width:100%;height:100%">
            </lord-icon>
            <h3>{!! $user->estado !!}</h3>
        </div>

        <div class="hoja-meta col card card-infoempleado">
            <h6 class="my-3 text-dark">Correo</h6>
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/ricptrwi.json" trigger="hover" colors="primary:#17a2b8" state="hover" style="width:100%;height:100%">
            </lord-icon>
            <h6>{!! $user->email !!}</h6>
        </div>

    </div>

</article>
@endsection