<?php

namespace App\Http\Controllers;

use App\Models\InformacionAcademica;
use Illuminate\Http\Request;

class InformacionAcademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informacioncademica = InformacionAcademica::latest()->paginate(5);

        return view('informacionacademica.index')->with('informacioncademica', $informacioncademica);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('informacionacademica.create');
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

        $ruta_imagen = $request['url']->store('informacion-academica', 'public');

        InformacionAcademica::create([
            'name' => $request['name'],
            'url' => $ruta_imagen,
        ]);

        return redirect()->action('InformacionAcademicaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformacionAcademica  $informacionAcademica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $academica = InformacionAcademica::find($id);

        return view('informacionacademica.show', compact('academica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformacionAcademica  $informacionAcademica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $academica = InformacionAcademica::find($id);

        return view('informacionacademica.edit', compact('academica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformacionAcademica  $informacionAcademica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformacionAcademica $academica)
    {
        //

        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $academica->name = $request['name'];

        if (request('url')) {
            $ruta_imagen = $request['url']->store('informacion-academica', 'public');

            $academica->url = $ruta_imagen;
        }

        $academica->save();

        return redirect()->action('InformacionAcademicaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformacionAcademica  $informacionAcademica
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformacionAcademica $informacionAcademica)
    {
        //
        $informacionAcademica->delete();

        return redirect()->action('hojasdevida@index');
    }
}
