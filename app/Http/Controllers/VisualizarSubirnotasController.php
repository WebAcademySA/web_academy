<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Http\Requests\VisualizarSubirnotasRequest;

use Illuminate\Http\Request;

class VisualizarSubirnotasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(VisualizarSubirnotasRequest $request)
	{
        $notas = Alumno::select('alumnos.*', 'asignaturas.idasignatura', 'asignaturas.nombreasig', 'cursos.grado', 'cursos.grupo')->join('matriculas', 'matriculas.idalumnofor', '=', 'alumnos.id')->join('cursos', 'matriculas.idcursofor', '=', 'cursos.idcurso')->join('inscritos', 'cursos.idcurso', '=', 'inscritos.idcurinscritofor')->join('asignaturas', 'asignaturas.idasignatura', '=', 'inscritos.idasiginscritofor')->identinota($request->get('nombreasig'))->gradonota($request->get('grado'))->gruponota($request->get('grupo'))->paginate(5);
        //dd($notas);
        $notas->setPath('visualizar_subirnotas');
        return view('visualizar_subirnotas', compact('notas'));
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
