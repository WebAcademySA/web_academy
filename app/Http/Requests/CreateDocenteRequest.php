<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateDocenteRequest extends Request {

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
            'iddocente' => 'required|unique:docentes,iddocente',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'titulo' => 'required',
            'nivel' => 'required',
            'sexo' => 'required',
            'email' => 'required|unique:docentes,email',
            'telefono' => 'required',
            'direccion' => 'required'
		];
	}

}
