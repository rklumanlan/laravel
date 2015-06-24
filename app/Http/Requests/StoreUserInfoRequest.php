<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreUserInfoRequest extends Request {

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
			'file' => 'required',
			'school' => 'required',
			'year1' => 'required',
			'year2' => 'required|after:year1',
			'degree' => 'required',
			'cyear2' => 'after:cyear1',
			'refname' => 'required',
			'cnum' => 'numeric|min:11',
			'cemail' => 'email',
			'file'       => 'required|mimes:jpeg,bmp,png,jpg|image|image_size:144,144'
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
		'school.required' 		=> 'School field is required.',
		'degree.required' 		=> 'Degree field is required.',
		'year1.required' 		=> 'Start Date field is required.',
		'year2.required'			=> 'End Date field is required.',
		'year2.after' 			=> 'Please make sure school start date is not after the end date.',
		'cyear2.after' 			=> 'Please make sure year start date is not after the end date.',
		'refname.required' 			=> 'Name field is required.',
		'file.required' 			=> 'Image field is required.',
		'file.image_size' 			=> 'Image must be 1.5 x 1.5 inches.',
		'cnum.numeric' 			=> 'Invalid character.',
		'cemail.email' 			=> 'Invalid e-mail address.',
        ];
    }

}
