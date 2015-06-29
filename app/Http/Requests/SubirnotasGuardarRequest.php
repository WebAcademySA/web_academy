<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubirnotasGuardarRequest extends Request {

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
            'idasigfor' => 'required|exists:asignaturas,idasignatura',
            'idalumfor' => 'required|exists:alumnos,id',
            //'periodo1' => 'not_in:null',
            //'periodo2' => 'not_in:null',
            //'periodo3' => 'not_in:null',
            //'periodo4' => 'not_in:null'
		];
	}

}
