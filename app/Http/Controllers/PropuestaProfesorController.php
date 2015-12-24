<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearPropuestaProfesorRequest;
use App\Tema;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Http\Requests;
use App\PropuestaProfesor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Comparator\ArrayComparatorTest;


class PropuestaProfesorController extends Controller
{
    protected $layout = 'layouts.paginaPropuestaProfesor';

    public function getIndex()
    {
        return $this->layout = view('profesor.index');
    }

    public function getValidacion()
    {
        return $this->layout = view('profesor.index');
    }

    /**
     * @return mixed
     */
    public function postValidacion(Request $request)
    {
        $path = "archivos/proyectos";
        $file = $request->file('archivo');

        if(!$file){
            Session::flash('mensaje', 'No se ha seleccionado ningun archivo.');
            return $this->layout = view('profesor.index');
        }else{

            $archivo = $file->getClientMimeType();
            $extension = $file->getClientOriginalExtension();
            $upload = $file->move($path, $archivo);

            $inputs=\Illuminate\Support\Facades\Input::All();
            $reglas=Array(
                'titulo'=>'required|min:7'
            );
            $mensaje=Array(
                "required"=>"Este campo es obligatorio",
                "min"=>"El contenido debe tener como minimo 5 caracteres",
                "mimes"=>"El archivo debe ser del tipo: pdf"
            );


            $validar=Validator::make($inputs,$reglas, $mensaje);

            if($extension != 'pdf'){
                Session::flash('mensaje', 'El archivo no es del formato PDF');
                return $this->layout = view('profesor.index');
            }else{

                if($validar->fails())
                {
                    return Redirect::back()
                        ->withErrors($validar);
                }else{
                    $n=new Tema();
                    $n->tem_nombre_proyecto=$inputs["titulo"];
                    //$n->tem_ruta_proyecto=$inputs[""];
                    $n->save();
                }

            }

            if($upload){
                Session::flash('mensaje', 'Se ha ingresado el proyecto');
                return $this->layout = view('profesor.index');

            }else{
                Session::flash('mensaje', 'No se pudo subir el archivo.');
                return $this->layout = view('profesor.index');
            }

        }
    }



}
