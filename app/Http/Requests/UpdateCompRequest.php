<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateCompRequest extends Request {


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
			'cyear2' => 'after:cyear1',
		];
	}

	public function messages()
    {
        return [
			'cyear2.after' 			=> 'Please make sure year start date is not after the end date.',
        ];
    }

}
