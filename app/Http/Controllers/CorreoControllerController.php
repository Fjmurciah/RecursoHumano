<?php

namespace App\Http\Controllers;

use App\Mail\EnviaCorreo;
use App\Models\CorreoController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CorreoControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('EnviaCorreo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje = $request['mensaje'];
        $user = User::where('rol', $request['rol'])->get();
        $mensajecorreo = [];
        if ($user) {

            foreach ($user as $value) {

                $mensajecorreo = [
                    'name' => $value->name,
                    'body' => $mensaje,
                ];

                Mail::to($value->email)->send(new EnviaCorreo($mensajecorreo));
            }
        }
        return redirect()->action('CorreoControllerController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorreoController  $correoController
     * @return \Illuminate\Http\Response
     */
    public function show(CorreoController $correoController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorreoController  $correoController
     * @return \Illuminate\Http\Response
     */
    public function edit(CorreoController $correoController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorreoController  $correoController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorreoController $correoController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorreoController  $correoController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorreoController $correoController)
    {
        //
    }
}
