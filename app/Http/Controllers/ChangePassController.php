<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;
use Auth;

use Input;
use Hash;

class ChangePassController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function change_pass(){
		return view('user.change_pass');
	}


	public function update_pass(Request $request,$uid){
		// $ctr = User::find($uid);
		//
		//
		//
		//
		// User::where('id', '=', $uid)->where('admin', '=', Auth::user()->admin)->update(['password'=> bcrypt($request->get('password'))]);

		$validator = Validator::make(Input::all(),
			array(
				'password' 		=> 'required',
				'old_password'	=> 'required|min:6',
				'confirm_password'=> 'required|same:password'
			)
		);

		if($validator->fails()) {
			return redirect('change_password')
				->withErrors($validator);
		} else {
			// passed validation

			// Grab the current user
			$user 			= User::where('id', '=', $uid)->where('admin', '=', Auth::user()->admin)->firstOrFail();

			// Get passwords from the user's input
			$old_password 	= Input::get('old_password');
			$password 		= Input::get('password');

			// test input password against the existing one
			if(Hash::check($old_password, $user->getAuthPassword())){
				$user->password = Hash::make($password);

				// save the new password
				if($user->save()) {
					flash()->overlay('You have successfully changed your password!','Success');
					return Redirect::route('user_profile.index');
				}
			} else {
				flash()->overlay('Your password is incorrect!','Error');
				return Redirect::route('user_profile.change_pass');
			}
		}

	}

	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
