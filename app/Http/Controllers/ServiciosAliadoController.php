<?php

namespace App\Http\Controllers;

use App\Models\ServiciosAliado;
use Illuminate\Http\Request;

class ServiciosAliadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $infoaliados = ServiciosAliado::latest()->paginate(5);

        return view('informacionaliado.index')->with('infoaliados', $infoaliados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('informacionaliado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required'],
            'nit' => ['required'],
        ]);

        $ruta_imagen = $request['url']->store('informacion-medica', 'public');

        ServiciosAliado::create([
            'name' => $request['name'],
            'nit' => $request['nit'],
            'url' => $ruta_imagen,
        ]);

        return redirect()->action('ServiciosAliadoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiciosAliado  $serviciosAliado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $infoaliado = ServiciosAliado::find($id);

        return view('informacionaliado.show', compact('infoaliado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiciosAliado  $serviciosAliado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $infoaliado = ServiciosAliado::find($id);

        return view('informacionaliado.edit', compact('infoaliado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiciosAliado  $serviciosAliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiciosAliado $infoaliado)
    {
        //

        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'nit' => ['required', 'string', 'max:255'],
        ]);

        $infoaliado->name = $request['name'];
        $infoaliado->nit = $request['nit'];

        if (request('url')) {
            $ruta_imagen = $request['url']->store('informacion-medica', 'public');

            $infoaliado->url = $ruta_imagen;
        }

        $infoaliado->save();

        return redirect()->action('ServiciosAliadoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiciosAliado  $serviciosAliado
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiciosAliado $infoaliado)
    {
        //
        $infoaliado->delete();

        return redirect()->action('ServiciosAliadoController@index');

    }
}
