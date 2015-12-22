<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class controlladorRegistroAlumno extends Controller
{
    protected $layout = 'layouts.master';

    public function getIndex()
    {
        return $this->layout = view('test.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view ('alumno.create');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function action_user(){
        $Nombre=e(Input::get('nombre'));
        $Correo=e(Input::get('correo'));
        $Rut=e(Input::get('rut'));
        $Clave=e(Input::get('clave'));

        $rules=array(
            'nombre'=>'required|min:20|max:60',
            'correo'=>'required|min:6|max:20|unique:user',
            'rut'=> 'required|min:11|max:11|unique:user',
            'clave'=>'required|min:6|max:20|'
        );
    }


    public function store(Request $request)
    {
        $data = Request::all();

        $rules = array(
        'Nombre' => 'required|max:255',
        'Correo' => 'required',
        'Rut'=> 'required|max:11',
        'Clave'=> 'required',
        );

        $v = Validator::make($data,$rules);

        if ($v->fails()){
            return redirect()->back()
                ->withErrors($v->errors())
                ->withInput(Request::except('password'));
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
        //
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
