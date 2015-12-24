<?php namespace App\Http\Controllers;

use App\Alumno;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAlumnoRequest;
use Illuminate\Session;

use Illuminate\Http\Request;

class AlumnosController extends Controller {

	public function index()
	{
		$alumnos=Alumno::paginate(15);
		return view('alumnos.index',compact('alumnos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('alumnos.create');
	}

	public function store(CreateAlumnoRequest $request)
	{
		Alumno::create($request->all());
		Session::flash('flash_message','Datos almacenados exitosamente');
		return redirect()->to('alumno')->with('new_token', csrf_token());

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumno= Alumno::find($id);
		return view('alumnos.show',compact('alumno',$alumno));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public
	function edit($id)
	{
		$alumno = Alumno::find($id);
		return view('alumnos.edit', compact('alumno', $alumno));
	}

	public function update($id, CreateAlumnoRequest $request)
	{
		$alumno = Alumno::findOrFail($id);
		$alumno->fill($request->all())->save();
		Session::flash('flash_message','Datos actualizados exitosamente');
		return redirect()->to('alumno')->with('new_token', csrf_token());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumno::find($id)->delete();
		Session::flash('flash_message','Registro Eliminado satisfactoriamente');
		return redirect('alumno');
	}

}
