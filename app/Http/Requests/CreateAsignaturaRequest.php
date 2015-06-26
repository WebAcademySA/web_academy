<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAsignaturaRequest extends Request {

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
            'idasignatura' => 'required|unique:asignaturas,idasignatura',
            'nombreasig' => 'required',
            'grado' => 'required|numeric|between:1,11',
            'año' => 'required|numeric|digits_between:4,4'
		];
	}

}
