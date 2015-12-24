<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class CreateAlumnoRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nombre'=>'required|regex:/(^[A-Za-zá-ü ]+$)+/',
			'email' => 'required|email',
			'rut'=> 'required|between:9,11|rut|regex:/(^[0-9\-k]+$)+/',
			'apellido'=>'required|regex:/(^[A-Za-zá-ü ]+$)+/',
		];
	}

}
