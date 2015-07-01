<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubirnotasRequest;
use App\Http\Requests\SubirnotasGuardarRequest;
use App\Nota;

use Illuminate\Http\Request;

class Subir_Notas_DocenteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('subir_notas_docente');
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
	public function store(SubirnotasGuardarRequest $request)
    {
        $ident = 0;
        $conten = Nota::where('idasigfor', $request->idasigfor)->where('idalumfor', $request->idalumfor)->count();

        if ($conten == 0) {
            \DB::table('notas')->insert(array(
                array(
                    'idasigfor' => $request->idasigfor,
                    'idalumfor' => $request->idalumfor,
                    'periodo1' => $request->periodo1,
                    'periodo2' => $request->periodo2,
                    'periodo3' => $request->periodo3,
                    'periodo4' => $request->periodo4
                )
            ));

            return redirect()->route('visualizar_subirnotas.index')->with('notice', 'Nota Subida con Exito');
        }
        else {
            $contenido = Nota::all();
            foreach ($contenido as $cont) {
                if ($cont->idasigfor == $request->idasigfor && $cont->idalumfor == $request->idalumfor) {
                    $ident = $cont->idnotas;
                    if ($cont->periodo1 == null) {
                        \DB::table('notas')->where('idnotas', $ident)->update([
                            'periodo1' => $request->periodo1
                        ]);
                    }
                    if ($cont->periodo2 == null) {
                        \DB::table('notas')->where('idnotas', $ident)->update([
                            'periodo2' => $request->periodo2
                        ]);
                    }
                    if ($cont->periodo3 == null) {
                        \DB::table('notas')->where('idnotas', $ident)->update([
                            'periodo3' => $request->periodo3
                        ]);
                    }
                    if ($cont->periodo4 == null) {
                        \DB::table('notas')->where('idnotas', $ident)->update([
                            'periodo4' => $request->periodo4
                        ]);
                    }
                    return redirect()->route('visualizar_subirnotas.index')->with('notice','Nota Subida con Exito');
                } else {
                    dd($request->idasigfor, $request->idalumfor);
                    \DB::table('notas')->insert(array(
                        array(
                            'idasigfor' => $request->idasigfor,
                            'idalumfor' => $request->idalumfor,
                            'periodo1' => $request->periodo1,
                            'periodo2' => $request->periodo2,
                            'periodo3' => $request->periodo3,
                            'periodo4' => $request->periodo4
                        )
                    ));

                    return redirect()->route('visualizar_subirnotas.index')->with('notice','Nota Subida con Exito');
                }
            }
        }

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
	public function edit($id, SubirnotasRequest $request)
    {
        $asigna = $request->idasigfor;
        $alum =$request->idalumfor;
        return view('subir_notas_docente', compact('asigna', 'alum'));
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
