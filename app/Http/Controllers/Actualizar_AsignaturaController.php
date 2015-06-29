<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asignatura;
use App\Http\Requests\ActualizarAsignaturaRequest;

use Illuminate\Http\Request;

class Actualizar_AsignaturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('actualizar_asignatura');
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
        $asignatura = Asignatura::find($id);
        return view('actualizar_asignatura', compact('asignatura'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ActualizarAsignaturaRequest $request)
	{
        \DB::table('asignaturas')->where('idasignatura',$id)->update([
            'nombreasig' => $request->nombreasig,
            'estadoasig' => $request->estadoasig

        ]);
        //dd($request->nombreasig, $request->estadoasig);
        return redirect()->route('visualizar_asignatura.index')->with('notice','Asignatura Editada con Exito');
        //return redirect('visualizar_asignatura');
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
