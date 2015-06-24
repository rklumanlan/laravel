<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateRefRequest extends Request {

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
			'refname' => 'required',
			'cnum' => 'numeric|min:11',
		];
	}

	public function messages()
    {
        return [
		'refname.required' 			=> 'Name field is required.',
		'cnum.numeric' 			=> 'Contact Number field must be a number.',
		'cnum.min' 			=> 'Contact Number field must 11 digits.',
        ];
    }

}
