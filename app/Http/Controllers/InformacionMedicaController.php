<?php

namespace App\Http\Controllers;

use App\Models\InformacionMedica;
use Illuminate\Http\Request;

class InformacionMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicas = InformacionMedica::latest()->paginate(5);

        return view('informacionmedica.index')->with('medicas', $medicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('informacionmedica.create');
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
        ]);

        $ruta_imagen = $request['url']->store('informacion-medica', 'public');

        InformacionMedica::create([
            'name' => $request['name'],
            'url' => $ruta_imagen,
        ]);

        return redirect()->action('InformacionMedicaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformacionMedica  $informacionMedica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $medica = InformacionMedica::find($id);

        return view('informacionmedica.show', compact('medica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformacionMedica  $informacionMedica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $medica = InformacionMedica::find($id);

        return view('informacionmedica.edit', compact('medica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformacionMedica  $informacionMedica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformacionMedica $medica)
    {
        //

        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $medica->name = $request['name'];

        if (request('url')) {
            $ruta_imagen = $request['url']->store('informacion-medica', 'public');

            $medica->url = $ruta_imagen;
        }

        $medica->save();

        return redirect()->action('InformacionMedicaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformacionMedica  $informacionMedica
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformacionMedica $informacionmedica)
    {
        //
        $informacionmedica->delete();

        return redirect()->action('InformacionMedicaController@index');
    }
}
