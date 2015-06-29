<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VisualizarSubirnotasRequest extends Request {

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
            'nombreasig' => 'exists:asignaturas,nombreasig',
            'grado' => 'exists:cursos,grado|numeric',
            'grupo' => 'exists:cursos,grupo|numeric'
		];
	}

}
