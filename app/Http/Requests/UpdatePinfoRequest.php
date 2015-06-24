<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePinfoRequest extends Request {


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
			'fname' => 'required|min:2',
			'lname' => 'required|min:2',
			'address' => 'required',
			'city' => 'required',
			'sex' => 'required',
			'age' => 'required',
		];
	}

	public function messages()
    {
        return [
			'fname.required' 			=> 'First Name field is required.',
			'fname.min' 			=> 'First Name field must be atleast 2 characters.',
	        'lname.required' 			=> 'Last Name field is required.',
	  		'lname.min' 			=> 'Last Name field must be atleast 2 characters.',
			'address.required' 			=> 'Address field is required.',
			'city.required' 		=> 'Province/Municipality is required.',
			'sex.required' 			=> 'Sex field is required.',
			'age.required' 			=> 'Age field is required.',
        ];
    }

}
