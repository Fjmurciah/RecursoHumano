<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class hojasdevida extends Controller
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
        $hojasdevida = User::latest()->paginate(5);

        return view('hojasdevida.index')->with('hojasdevida', $hojasdevida);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'rol' => ['required', 'string', 'max:255'],
            'url' => ['required'],
            'estado' => ['required', 'string', 'max:255'],
        ]);

        $ruta_imagen = $request['url']->store('hojas-vida', 'public');

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'rol' => $request['rol'],
            'url' => $ruta_imagen,
            'estado' => $request['estado'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->action('hojasdevida@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('hojasdevida.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('hojasdevida.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        if ($request['email'] != $user->email) {
            //validacion
            $data = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'rol' => ['required', 'string', 'max:255'],
                'estado' => ['required', 'string', 'max:255'],
            ]);
        } else {
            //validacion
            $data = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'rol' => ['required', 'string', 'max:255'],
                'estado' => ['required', 'string', 'max:255'],
            ]);
        }

        $user->name = $request['name'];
        $user->email = $request['email'];
        if ($request['password']) {
            $user->password = $request['password'];
        }
        $user->rol = $request['rol'];

        $user->estado = $request['estado'];

        if (request('url')) {
            $ruta_imagen = $request['url']->store('hojas-vida', 'public');

            $user->url = $ruta_imagen;
        }

        $user->save();

        return redirect()->action('hojasdevida@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();

        return redirect()->action('hojasdevida@index');
    }
}
