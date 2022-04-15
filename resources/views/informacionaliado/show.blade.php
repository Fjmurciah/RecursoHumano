@extends('layouts.app')
@section('botones')

    <a href="{{route('infoaliado.index')}}" class="btn btn-primary mr-2 text-white">
        <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
          </svg>
        Atrás</a>

@endsection
@section('content')
    <article class="contenido-hoja">
        <h1 class="text-center mb-4">{{$infoaliado->name}}</h1>
        <h1 class="text-center mb-4">{{$infoaliado->nit}}</h1>
        <div class="adjunto">
            <h2 class="my-3 text-dark">Adjunto:</h2>
            <a href="/storage/{{$infoaliado->url}}">Ver adjunto</a>
        </div>
    </article>
@endsection
