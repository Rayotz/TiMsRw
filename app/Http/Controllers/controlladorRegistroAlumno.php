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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function action_user(){
        $Rut=e(Input::get('usu_rut'));
        $Nombre=e(Input::get('usu_nombre'));
        $Apellido=e(Input::get('usu_apellido'));
        $Correo=e(Input::get('usu_correo'));
        $Clave=e(Input::get('usu_clave'));
        $Tipo=e(Input::get('usu_tipo'));

        $rules=array(
            'usu_rut'=> 'required|min:11|max:11|unique:user',
            'usu_nombre'=>'required|min:20|max:60',
            'usu_apellido'=>'required|min:20|max:60',
            'usu_correo'=>'required|min:6|max:20|unique:user',
            'usu_clave'=>'required|min:6|max:20|',
            'usu_tipo'=>'required|min:5|max:60',
        );

        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un correo valido.',
            'max' => 'El campo :attribute no puede tener mas de :max carácteres.' ,
            'unique' => 'El mail ya está registrado',
        );

        $validation = Validator::make(Input::all(), $rules, $messages);

        if($validation->fails()){
            return Redirect::to('test.indexRegistroA')->with_errors($validation)->with_input();
        }else{
            $insert = user::insert_users($Nombre,$Correo,$Rut,$Clave);

            if($insert){
                return Redirect::to('test.indexRegistroA')->with('mensaje','Alumno registrado correctamente');
            }
        }
    }


    public function store(Request $request)
    {
        $input = Request::all();
        $input ['published_at']=Carbon::now();

        Usuario::create($input);

        return redirect('registrarAlumno');
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
