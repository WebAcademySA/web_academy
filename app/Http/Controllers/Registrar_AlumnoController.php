<?php namespace App\Http\Controllers;

use App\Curso;
use App\Alumno;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateAlumnoRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;

//use Illuminate\Support\Facades\Request;

class Registrar_AlumnoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('registrar_alumno');
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
	public function store(CreateAlumnoRequest $request)
	{
        /*$alumno = Alumno::create($request->all());
        return redirect()->route('registrar_alumno.index')->with('notice','Alumno Creado con Exito');
        */


        //$alumno = alumno::create($request->all());

        $id=0;

        $cursos=Curso::all();

        foreach ($cursos as $curso) {
            if($curso->grado==$request->grado && $curso->grupo==$request->grupo ){
                $id=$curso->idcurso;
            }
        }

        \DB::table('alumnos')->insert(array(
            array(
                'nid' => $request->nid,
                'primer_nombre' => $request->primer_nombre,
                'segundo_nombre' => $request->segundo_nombre,
                'primer_apellido'  =>	$request->primer_apellido,
                'segundo_apellido'  =>	$request->segundo_apellido,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'sexo' => $request->sexo,
            )
        ));


        \DB::table('matriculas')->insert(array(
            array(
                'idcursofor' => $id,
                'idalumnofor' => $request->nid,
            )
        ));


        return redirect()->route('registrar_alumno.index')->with('notice','Alumno Creado con Exito');
        /*dd($request->all());
        $alumno = new Alumno($request->all());

        $dad = ($alumno->save());

        if($dad!=true){


        }
        else{
            return Redirect::to('registrar_alumno')->with('notice','El alumno ha sido creado con exito');
        }

        return view('registrar_alumno')->with('mensaje',$mensaje);*/
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
