<?php

namespace App\Http\Controllers;

use App\Imports\EncuestaImport;
use App\Models\Encuesta;
use App\Models\ResultadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ResultadoControllerController extends Controller
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

        $encuesta = ResultadoController::latest()->paginate(5);

        return view('ResultadoEncuesta.index')->with('encuestas', $encuesta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ResultadoEncuesta.create');
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
        //
        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'tipo' => ['required'],
            'url' => ['required'],
        ]);

        $ruta_imagen = $request['url']->store('encuesta', 'public');

        $resultado = ResultadoController::create([
            'name' => $request['name'],
            'tipo' => $request['tipo'],
            'url' => $ruta_imagen,
        ]);

        $file = $request->file('url');

        Excel::import(new EncuestaImport($resultado), $file);

        return redirect()->action('ResultadoControllerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResultadoController  $resultadoController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $encuesta = ResultadoController::where('id', $id)->first();

        $preguntasA = Encuesta::where('resultado_id', $encuesta->id)->first();

        $preguntas = Encuesta::where('resultado_id', $encuesta->id)->where('id', '>',$preguntasA->id)->where('preguntatres', '>=', 3)->latest()->paginate(5);


        $preguntasE = Encuesta::where('resultado_id', $encuesta->id)->where('id', '>', $preguntasA->id)->where('preguntatres', '<', 3)->latest()->paginate(5);


        return view('ResultadoEncuesta.show', compact('encuesta', 'preguntas', 'preguntasE', 'preguntasA'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResultadoController  $resultadoController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $encuesta = ResultadoController::find($id);

        return view('ResultadoEncuesta.edit', compact('encuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResultadoController  $resultadoController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResultadoController $encuest)
    {
        //

        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'tipo' => ['required', 'string', 'max:255'],
        ]);

        $encuest->name = $request['name'];

        if (request('url')) {

            $encuest->encuestas()->delete();

            Storage::disk('public')->delete('URL' . $encuest->url);

            $ruta_imagen = $request['url']->store('encuesta', 'public');

            $encuest->url = $ruta_imagen;

            $file = $request->file('url');

            Excel::import(new EncuestaImport($resultado), $file);
        }

        $encuest->save();

        return redirect()->action('ResultadoControllerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResultadoController  $resultadoController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResultadoController $encuest)
    {
        //
        Storage::disk('public')->delete('URL' . $encuest->url);

        $encuest->encuestas()->delete();

        $encuest->delete();

        return redirect()->action('ResultadoControllerController@index');
    }
}
