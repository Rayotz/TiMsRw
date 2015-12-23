<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistroUsuarioForm extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"rut" => "required|min:11|max:11",
			"nombre" => "required|min:20|max:50",
			"apellido"=> "required|min:20|max:50",
			"correo"=> "required|min:6|max:20",
			"clave"=>"required|min:5|max:20",
			"tipo" =>"required"
		];
	}

	public function message(){
		return[
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

			"clave.required"=>"El campo rut es obligatorio",
			"clave.min"=>"El campo rut no puede tener menos de 5 caracteres",
			"clave.max"=>"El campo rut no puede tener mas de 20 caracteres",

			"tipo.required"=>"El campo tipo es obligatorio"

		];
	}

}
