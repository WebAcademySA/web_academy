<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Http\Requests\ConsultarNotasRequest;

use Illuminate\Http\Request;

class ConsultarNotasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(ConsultarNotasRequest $request)
	{
        $totalnotas = Alumno::where('alumnos.id', $request->id)->join('matriculas', 'matriculas.idalumnofor', '=', 'alumnos.id')->join('cursos', 'matriculas.idcursofor', '=', 'cursos.idcurso')->join('inscritos', 'cursos.idcurso', '=', 'inscritos.idcurinscritofor')->join('asignaturas', 'asignaturas.idasignatura', '=', 'inscritos.idasiginscritofor')->join('notas', 'notas.idasigfor', '=', 'asignaturas.idasignatura')->select('asignaturas.idasignatura', 'asignaturas.nombreasig', 'cursos.grado', 'cursos.grupo', 'notas.periodo1','notas.periodo2','notas.periodo3','notas.periodo4', 'inscritos.añoinscrito')->where('notas.idalumfor', $request->id)->count();
        //$totalnotas = Alumno::where('alumnos.id', $request->id)->join('notas', 'notas.idalumfor', '=', 'alumnos.id')->join('asignaturas', 'asignaturas.idasignatura', '=', 'notas.idasigfor');
        //dd($totalnotas);
        if($totalnotas == 0){
            return redirect()->route('consultar_alumno.index')->with('notice', 'El Alumno no posee notas');
        }
        else{
            $consulnotas = Alumno::where('alumnos.id', $request->id)->join('matriculas', 'matriculas.idalumnofor', '=', 'alumnos.id')->join('cursos', 'matriculas.idcursofor', '=', 'cursos.idcurso')->join('inscritos', 'cursos.idcurso', '=', 'inscritos.idcurinscritofor')->join('asignaturas', 'asignaturas.idasignatura', '=', 'inscritos.idasiginscritofor')->join('notas', 'notas.idasigfor', '=', 'asignaturas.idasignatura')->select('asignaturas.idasignatura', 'asignaturas.nombreasig', 'cursos.grado', 'cursos.grupo', 'notas.periodo1','notas.periodo2','notas.periodo3','notas.periodo4', 'inscritos.añoinscrito')->where('notas.idalumfor', $request->id)->paginate(5);
            //dd($consulnotas);
            $consulnotas->setPath('consultar_notas');
            return view('consultar_notas', compact('consulnotas'));
        }


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
