<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateInscritoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'idinscrito' => 'required|unique:inscritos,idinscrito',
            'idestuinscritofor' => 'required|exists:alumnos,nid',
            'idasiginscritofor' => 'required|exists:asignaturas,idasignatura',
            'horainicio' => 'required',
            'horafin' => 'required',
            'diasemana' => 'required'
		];
	}

}
