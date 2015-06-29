<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asignatura;
use App\Http\Requests\VisualizarAsignaturaRequest;

use Illuminate\Http\Request;

class Consultar_AsignaturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(VisualizarAsignaturaRequest $request)
	{
        $asignaturaconsul = Asignatura::select('asignaturas.*', 'inscritos.idcurinscritofor', 'inscritos.idasiginscritofor', 'inscritos.añoinscrito', 'cursos.idcurso', 'cursos.grado','cursos.grupo')->join('inscritos', 'asignaturas.idasignatura', '=', 'inscritos.idasiginscritofor')->join('cursos', 'cursos.idcurso', '=', 'inscritos.idcurinscritofor')->ident($request->get('idasignatura'))->estado($request->get('estadoasig'))->paginate(5);
        $asignaturaconsul->setPath('consultar_asignatura');
        return view('consultar_asignatura', compact('asignaturaconsul'));
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
