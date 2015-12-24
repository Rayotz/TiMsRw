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
        return $this->layout = view('alumnos.index');
    }


    public function getRegAlumno(){
        return $this->layout = view('alumnos.index');
    }

    public function postRegAlumno(Request $request)
    {
        //echo "hola :D";

        $regForm=Input::All();
        //print_r($regForm);

        //reglas de validación
        $validadorFormulario=array(
            "rut" => "required|min:11|max:11",
            "nombre" => "required|min:2|max:12",
            "apellido"=> "required|min:2|max:20",
            "correo"=> "required|min:6|max:20",
            "clave"=>"required|min:5|max:60",
        );

        //mensajes de validación erronea
        $mensajeForm=Array(
            "rut.required"=>"El campo rut es obligatorio",
            "rut.min"=>"El campo rut no puede tener menos de 11 caracteres",
            "rut.max"=>"El campo rut no puede tener mas de 11 caracteres",

            "nombre.required"=>"El campo nombre es obligatorio",
            "nombre.min"=>"El campo nombre no puede tener menos de 11 caracteres",
            "nombre.max"=>"El campo nombreno puede tener mas de 11 caracteres",

            "apellido.required"=>"El campo apellido es obligatorio",
            "apellido.min"=>"El campo rut no puede tener menos de 20 caracteres",
            "apellido.max"=>"El campo rut no puede tener mas de 50 caracteres",

            "correo.required"=>"El campo correo es obligatorio",
            "correo.min"=>"El campo rut no puede tener menos de 6 caracteres",
            "correo.max"=>"El campo rut no puede tener mas de 20 caracteres",

            "clave.required"=>"El campo clave es obligatorio",
            "clave.min"=>"El campo rut no puede tener menos de 5 caracteres",
            "clave.max"=>"El campo rut no puede tener mas de 20 caracteres",

        );

        $validar=Validator::make($regForm,$validadorFormulario,$mensajeForm);

        if($validar->fails()){
            return redirect::back()->withErrors($validar);
        }else{
            $alumno = new Usuario();

            $alumno->usu_rut=$regForm["rut"];
            $alumno->usu_nombre=$regForm["nombre"];
            $alumno->usu_apellido=$regForm["apellido"];
            $alumno->usu_correo=$regForm["correo"];
            $alumno->usu_clave=$regForm["clave"];
            $alumno->tipo=$regForm["tipo"];

            $alumno->save();

            Session::flash('mensaje', 'Registro Exitoso');
            return $this->layout = view('masterLogin');


        }



        /*
        $usuario = new Usuario();
        $usuario = \Input::get('rut');
        $usuario = \Input::get('nombre');
        $usuario = \Input::get('apellido');
        $usuario = \Input::get('correo');
        $usuario = \Input::get('clave');
        $usuario = \Input::get('Tipo_usuario');

        $usuario = save();

        return redirect()->to('');

        if($usuario->save()){
            return 'exito';
        }
        else{
            return 'no';
        }*/
    }


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
