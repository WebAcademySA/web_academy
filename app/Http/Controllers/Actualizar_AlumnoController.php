<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarAlumnoRequest;
use App\Alumno;

use Illuminate\Http\Request;

class Actualizar_AlumnoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('actualizar_alumno');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumno = Alumno::find($id);
        return view('actualizar_alumno', compact('alumno'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ActualizarAlumnoRequest $request)
	{
        \DB::table('alumnos')->where('id',$id)->update([
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido'  =>	$request->primer_apellido,
            'segundo_apellido'  =>	$request->segundo_apellido,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'sexo' => $request->sexo,

        ]);
        return redirect('visualizar_alumno');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
