@extends('layouts.app')
@section('content')

    <h2 class="text-center mb-2">Sistema de administracion de recurso humano</h2>
    <div class="row">
        <div class="col mx-auto bg-white p-3 mt-5">
            <a href="{{route('hojasdevida.index')}}" class="btn btn-dark mr-2 text-white">
                <svg class="iconoprincipal" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                  </svg>
                Hojas de vida</a>
        </div>

        <div class="col mx-auto bg-white p-3 mt-5">
            <a href="{{route('informacionacademica.index')}}" class="btn btn-danger  mr-2 text-white">
                <svg class="iconoprincipal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                  </svg>
               Información académica</a>
        </div>

        <div class="col mx-auto bg-white p-3 mt-5">
            <a href="{{route('informacionmedica.index')}}" class="btn btn-success  mr-2 text-white">

                <svg class="iconoprincipal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>

               Información médica</a>
        </div>

        <div class="col mx-auto bg-white p-3 mt-5">
            <a href="{{route('infoaliado.index')}}" class="btn btn-warning  mr-2 text-white">

                <svg class="iconoprincipal" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                  </svg>

                Información de servicios aliados</a>
        </div>
    </div>


@endsection
