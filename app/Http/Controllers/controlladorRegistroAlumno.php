<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class controlladorRegistroAlumno extends Controller
{
    protected $layout = 'layouts.masterRegistroA';

    public function getIndex()
    {
        return $this->layout = view('test.indexRegistroA');
    }


    public function create(){
        return view('');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario = \Input::get('rut');
        $usuario = \Input::get('nombre');
        $usuario = \Input::get('apellido');
        $usuario = \Input::get('correo');
        $usuario = \Input::get('clave');
        $usuario = \Input::get('Tipo_usuario');

        if($usuario->save()){
            return 'exito';
        }
        else{
            return 'no';
        }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
