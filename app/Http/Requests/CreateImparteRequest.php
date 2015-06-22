<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateImparteRequest extends Request {

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
            'idasigimpartefor' => 'required|exists:asignaturas,idasignatura',
            'iddoceimpartefor' => 'required|exists:docentes,iddocente',
            'año' => 'required|numeric'
		];
	}

}
