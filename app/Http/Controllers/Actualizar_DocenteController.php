<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarDocenteRequest;
use App\Docente;

use Illuminate\Http\Request;

class Actualizar_DocenteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('actualizar_docente');
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
        $docente = Docente::find($id);
        return view('actualizar_docente', compact('docente'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ActualizarDocenteRequest $request)
	{
        //dd($request->all());
        \DB::table('docentes')->where('iddocente',$id)->update([
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido'  =>	$request->primer_apellido,
            'segundo_apellido'  =>	$request->segundo_apellido,
            'titulo' => $request->titulo,
            'nivel' => $request->nivel,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'sexo' => $request->sexo,
            'estado' => $request->estado

        ]);
        return redirect()->route('visualizar_docente.index')->with('notice','Alumno Editado con Exito');
        //return redirect('visualizar_docente');
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
