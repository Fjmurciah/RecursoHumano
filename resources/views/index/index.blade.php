@extends('layouts.app')
@section('content')

<h1 class="text-center" style="margin-top: -5%;">¿Que desea hacer?</h1>
<div class="row" style="margin: -4% 18%;">
    <div class="col mx-auto bg-white p-3 mt-5">
        <a href="{{route('hojasdevida.index')}}" class="btn btn-secondary mr-2 text-white" style="border-radius: 20%">
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/buczzbzt.json" trigger="hover" colors="primary:#f7f7f7" style="width:100%;height:100%">
            </lord-icon>
            Hojas de vida
        </a>
    </div>

    <div class="col mx-auto bg-white p-3 mt-5">
        <a href="{{route('informacionacademica.index')}}" class="btn btn-success  mr-2 text-white" style="border-radius: 20%">
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/zjptfwtq.json" trigger="hover" colors="primary:#f7f7f7" style="width:100%;height:100%">
            </lord-icon>
            Información académica
        </a>
    </div>

    <div class="col mx-auto bg-white p-3 mt-5">
        <a href="{{route('informacionmedica.index')}}" class="btn btn-danger  mr-2 text-white" style="border-radius: 20%">
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/wwbrugun.json" trigger="hover" colors="primary:#f7f7f7" style="width:100%;height:100%">
            </lord-icon>
            Información médica
        </a>
    </div>

</div>

<div class="row" style="margin: 0% 18%;">

    <div class="col mx-auto bg-white p-3 mt-5">
        <a href="{{route('infoaliado.index')}}" class="btn btn-info  mr-2 text-white" style="border-radius: 20%">
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/kkbzotnk.json" trigger="hover" colors="primary:#f7f7f7" style="width:100%;height:100%">
            </lord-icon>
            Información de servicios aliados
        </a>
    </div>

    <div class="col mx-auto bg-white p-3 mt-5">
        <a href="{{route('correo.index')}}" class="btn btn-warning  mr-2 text-white" style="border-radius: 20%">
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/tloykbxq.json" trigger="hover" colors="primary:#f7f7f7" style="width:100%;height:100%">
            </lord-icon>
            Enviar correo
        </a>
    </div>

    <div class="col mx-auto bg-white p-3 mt-5">
        <a href="{{route('encuesta.index')}}" class="btn btn-primary  mr-2 text-white" style="border-radius: 20%">
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
            <lord-icon src="https://cdn.lordicon.com/kjsfgazx.json" trigger="hover" colors="primary:#f8f9fa" style="width:100%;height:100%">
            </lord-icon>
            Resultados encuestas
        </a>
    </div>

</div>


@endsection
