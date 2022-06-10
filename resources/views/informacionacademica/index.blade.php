@extends('layouts.app')
@section('botones')

<a href="{{route('indexController.index')}}" class="btn btn-primary mr-2 text-white">
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
    </svg>
    Atrás</a>
<a href="{{route('informacionacademica.create')}}" class="btn btn-primary mr-2 text-white">
    <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    Crear información académica</a>

@endsection
@section('content')

<h2 class="text-center mb-2">Administrar información académica</h2>

<div class="col-md-10 mx-auto bg-white p-3 mt-5">
    <table class="table table-hover" style="vertical-align: middle">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">Nombre</th>
                <th scole="col">Id</th>
                <th scole="col">Documento</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informacioncademica as $informacion)
            <tr>
                <th scole="col">{{$informacion->name}}</th>
                <th scole="col">{{$informacion->id}}</th>
                <th scole="col"> <a href="/storage/{{$informacion->url}}">Ver adjunto</a></th>
                <th scole="col">
                    <a href="{{route('informacionacademica.show', ['id'=>$informacion->id])}}" class="btn btn-outline-success  d-block mb-2">
                        <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Ver</a>
                    <a href="{{route('informacionacademica.edit', ['id'=>$informacion->id])}}" class="btn btn-outline-dark  d-block mb-2">
                        <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Editar</a>

                    <eliminar-academica id="Eliminar X" hoja-id={{$informacion->id}}></eliminar-academica>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $informacioncademica->links() }}
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.0/sweetalert2.css" integrity="sha512-3Mf7x3QC98zKhMBTTGj5fDu2wQE9bgC/MmyFLRuyUTWZRWM4txPrzVfWqrCOWs9Il79iEw5T6+N7fbXXSUafrQ==" crossorigin="anonymous" />

@endsection
