<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateEducRequest extends Request {

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
			'school' => 'required',
			'year1' => 'required',
			'year2' => 'required|after:year1',
			'degree' => 'required',

		];
	}

	public function messages()
    {
        return [

		'school.required' 		=> 'School field is required.',
		'degree.required' 		=> 'Degree field is required.',
		'year1.required' 		=> 'Start Date field is required.',
		'year2.required'			=> 'End Date field is required.',
		'year2.after' 			=> 'Please make sure school start date is not after the end date.',
		
        ];
    }

}
