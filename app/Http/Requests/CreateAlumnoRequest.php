<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAlumnoRequest extends Request {

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
            'nid' => 'required|unique:alumnos,nid',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'direccion' => 'required'
		];
	}

}
