@extends('layouts.app')
@section('botones')

<a href="{{route('encuesta.index')}}" class="btn btn-primary mr-2 text-white">
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
    </svg>
    Atrás</a>

@endsection
@section('content')

<article class="contenido-hoja">
    <h1 class="text-center mb-4">{{$encuesta->name}}</h1>

    <div class="row">
        <div class="col card card-infoempleado">
            <h5 class="my-3 text-dark">Archivo</h5>
            <h2><a href="/storage/{{$encuesta->url}}">Ver adjunto</a></h2>
        </div>

        <div class="col card card-infoempleado">
            <h5 class="my-3 text-dark">Tipo</h5>
            <h2><label class="text-center mb-4">{{$encuesta->tipo}}</label></h2>
        </div>
    </div>

</article>


@if ($preguntasE)
<div class="mx-auto bg-white p-3 mt-5 tabla-cool">
    <h2 class="text-center mb-2">Atención especial</h2>
    <table class="table table-hover" style="vertical-align: middle">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">{{$preguntasA->preguntauno}}</th>
                <th scole="col">{{$preguntasA->preguntados}}</th>
                <th scole="col">{{$preguntasA->preguntatres}}</th>
                <th scole="col">{{$preguntasA->preguntacuatro}}</th>
                <th scole="col">{{$preguntasA->preguntacinco}}</th>
                <th scole="col">{{$preguntasA->preguntaseis}}</th>
                <th scole="col">{{$preguntasA->preguntasiete}}</th>
                <th scole="col">Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($preguntasE as $encuest)
            <tr>
                <th scole="col">{{$encuest->preguntauno}}</th>
                <th scole="col">{{$encuest->preguntados}}</th>
                <th scole="col">{{$encuest->preguntatres}}</th>
                <th scole="col">{{$encuest->preguntacuatro}}</th>
                <th scole="col">{{$encuest->preguntacinco}}</th>
                <th scole="col">{{$encuest->preguntaseis}}</th>
                <th scole="col">{{$encuest->preguntasiete}}</th>
                <th scole="col">{{$encuest->preguntaocho}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $preguntas->links() }}
    </div>
</div>
@endif

@if ($preguntas)
<div class="mx-auto bg-white p-3 mt-5 tabla-cool">
    <h2 class="text-center mb-2">Atención normal</h2>
    <table class="table table-hover" style="vertical-align: middle">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">{{$preguntasA->preguntauno}}</th>
                <th scole="col">{{$preguntasA->preguntados}}</th>
                <th scole="col">{{$preguntasA->preguntatres}}</th>
                <th scole="col">{{$preguntasA->preguntacuatro}}</th>
                <th scole="col">{{$preguntasA->preguntacinco}}</th>
                <th scole="col">{{$preguntasA->preguntaseis}}</th>
                <th scole="col">{{$preguntasA->preguntasiete}}</th>
                <th scole="col">Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($preguntas as $encuest)
            <tr>
                <th scole="col">{{$encuest->preguntauno}}</th>
                <th scole="col">{{$encuest->preguntados}}</th>
                <th scole="col">{{$encuest->preguntatres}}</th>
                <th scole="col">{{$encuest->preguntacuatro}}</th>
                <th scole="col">{{$encuest->preguntacinco}}</th>
                <th scole="col">{{$encuest->preguntaseis}}</th>
                <th scole="col">{{$encuest->preguntasiete}}</th>
                <th scole="col">{{$encuest->preguntaocho}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $preguntas->links() }}
    </div>
</div>
@endif

@endsection