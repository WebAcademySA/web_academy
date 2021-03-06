<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateAsignaturaRequest;
use App\Curso;
use App\Asignatura;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Registrar_AsignaturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('registrar_asignatura');
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
	public function store(CreateAsignaturaRequest $request)
	{

        \DB::table('asignaturas')->insert(array(
            array(
                'idasignatura' => $request->idasignatura,
                'nombreasig' => $request->nombreasig
            )
        ));

        $id=0;

        $cursos=Curso::all();

        foreach ($cursos as $curso) {
            if($curso->grado==$request->grado){
                $id=$curso->idcurso;
                \DB::table('inscritos')->insert(array(
                    'idcurinscritofor' => $id,
                    'idasiginscritofor' => $request->idasignatura,
                    'añoinscrito' => $request->año
                ));
            }
        }

        return redirect()->route('registrar_asignatura.index')->with('notice','Asignatura Creada con Exito');
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
