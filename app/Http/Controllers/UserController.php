<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Auth;
use Input;
use Validator;
use Flash;

use App\Language;
use App\Framework;
use App\OS;

use App\Lang_pivot;
use App\Fwork_pivot;
use App\OS_pivot;


use App\Pinfo;
use App\Comp;
use App\Educ;
use App\Ref;


use App\User;


use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateRefRequest;
use App\Http\Requests\UpdateEducRequest;

class UserController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$title = "Profile";
		$id = Auth::id();
		$educ2=NULL;
		$comp2=NULL;
		$ref2=NULL;
		$pinfo2=NULL;
		//$pinfo = User::find($id)->pinfo;
		// $educ = User::find($id)->educ;
		// $comp = User::find($id)->comp;
		// $ref = User::find($id)->ref;
		// $os = User::find($id)->os;
		// $lang = User::find($id)->lang;
		// $fwork = User::find($id)->fwork;
		//

		//
		//
		//
		$os_def		 = OS::all();
		$lang_def	 = Language::all();
		$fwork_def	 = Framework::all();

		$users = User::whereHas('pinfo', function($query)
		{
			$no= Auth::id();
			$query->where('user_id', '=', $no);

		})->get();


		if(User::find($id)->pinfo == NULL){
			flash()->overlay('You are now logged in. Please fill out your resume.','Success');
			return redirect('user_profile/create');
		}
		// else{
		// 	 return view('user.index',compact('educ','educ2','comp', 'comp2', 'ref','ref2', 'pinfo','os','lang','fwork','title','lang_def','os_def','fwork_def'));
		// }


		else{
			return view('user.index',compact(
				'title','lang_def',
				'os_def','fwork_def',
				'selected_lang','selected_os',
				'selected_fwork','users','ref2','comp2','educ2','pinfo2'));
		}


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$os_def = OS::all();
		$lang_def = Language::all();
		$fwork_def = Framework::all();
		$selected_lang	= array();
		$selected_os	= array();
		$selected_fwork	= array();
		$title = "Create Profile";
		return view('user.profile',compact('lang_def','os_def', 'fwork_def','selected_lang','selected_os','selected_fwork','title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreUserInfoRequest $request)
	{
		$id = Auth::id();

		//insert pinfo data
		$pinfo = new Pinfo();
		$pinfo -> user_id = $id;
		$pinfo -> fname = $request->fname;
		$pinfo -> mname = $request->mname;
		$pinfo -> lname = $request->lname;
		$pinfo -> address = $request->address;
		$pinfo -> city = $request->city;
		$pinfo -> sex = $request->sex;
		$pinfo -> age = $request->age;
		$imageName = $id . '.' .
		$request->file('file')->getClientOriginalExtension();
		$request->file('file')->move(
		base_path() . '/public/images/userpic', $imageName
		);
		$pinfo ->imgname = $imageName;
		$pinfo -> save();

		//insert skills data
		if(Input::get('lang')!=NULL){
			foreach(Input::get('lang') as $key => $value)
			{
				$lang = new Lang_pivot();
				$lang -> user_id = $id;
				$lang -> lang_id = $value;
				$lang -> save();
			}
		}
		if(Input::get('os')!=NULL){
			foreach(Input::get('os') as $key => $value)
			{
				$os = new Os_pivot();
				$os -> user_id = $id;
				$os	-> os_id = $value;
				$os	-> save();
			}
		}
		if(Input::get('fwork')!=NULL){
			foreach(Input::get('fwork') as $key => $value)
			{
				$fwork = new Fwork_pivot();
				$fwork -> user_id = $id;
				$fwork -> fwork_id = $value;
				$fwork -> save();
			}
		}



		//insert educ data
		$educ = new Educ();
		$educ -> user_id = $id;
		$educ -> school = $request->school;
		$educ -> major = $request->major;
		$educ -> degree = $request->degree;
		$educ -> desc = $request->desc;
		$educ -> year1 = $request->year1;
		$educ -> year2 = $request->year2;
		$educ -> save();

		//insert comp data
		$comp = new Comp();
		$comp -> user_id = $id;
		$comp -> compname = $request->compname;
		$comp -> title = $request->title;
		$comp -> location = $request->location;
		$comp -> compdesc = $request->compdesc;
		$comp -> cyear1 = $request->cyear1;
		$comp -> cyear2 = $request->cyear2;
		$comp -> mon1 = $request->mon1;
		$comp -> mon2 = $request->mon2;
		$comp -> save();

		// //insert ref
		$ref = new Ref();
		$ref -> user_id = $id;
		$ref -> refname = $request->refname;
		$ref -> cnum = $request->cnum;
		$ref -> email= $request->cemail;
		$ref -> save();

		flash()->overlay('You have registered your profile','Success');
		return redirect('user_profile');
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
	public function edit($edit,$id2)
	{

		$title = "Profile";
		$id = Auth::id();
		$pinfo = User::find($id)->pinfo;

		$educ = User::find($id)->educ;
		$comp = User::find($id)->comp;
		$ref = User::find($id)->ref;
		$os = User::find($id)->os;
		$lang = User::find($id)->lang;
		$fwork = User::find($id)->fwork;

		$os_def		 = OS::all();
		$lang_def	 = Language::all();
		$fwork_def	 = Framework::all();

		$educ2=NULL;
		$comp2=NULL;
		$ref2=NULL;

		if($edit == 'edit_education'){
			$educ2 = User::find($id)->educ()->where('educ_id', '=', $id2)->where('user_id', '=', $id)->first();
		}

		else if($edit == 'edit_position'){
			$comp2 = User::find($id)->comp()->where('comp_id', '=', $id2)->where('user_id', '=', $id)->first();
		}

		else if($edit == 'edit_reference'){
			$ref2 = User::find($id)->ref()->where('ref_id', '=', $id2)->where('user_id', '=', $id)->first();
		}

		$users = User::whereHas('pinfo', function($query)
		{
			$no= Auth::id();
			$query->where('user_id', '=', $no);

		})
		->has('lang')
		->has('os')
		->has('fwork')
		->has('educ')
		->has('comp')
		->has('ref')->get();

		return view('user.index',compact(
			'title','lang_def',
			'os_def','fwork_def',
			'selected_lang','selected_os',
			'selected_fwork','users','ref2','comp2','educ2'));

		//
		//
		//  return view('user.index',compact('educ','educ2','comp', 'comp2', 'ref','ref2', 'pinfo','os','lang','fwork','title','lang_def','os_def','fwork_def'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{


		if($request->input('update_lang')==true){


			User::find($id)->lang()->sync(Input::get('lang'));

			flash()->overlay($this->message('Technical Skills','edit'),'Success!');
		}

		else if($request->input('update_os')==true){


			User::find($id)->os()->sync(Input::get('os'));

			flash()->overlay($this->message('Technical Skills','edit'),'Success!');
		}

		if($request->input('update_fwork')==true){


			User::find($id)->fwork()->sync(Input::get('fwork'));

			flash()->overlay($this->message('Technical Skills','edit'),'Success!');
		}


		return redirect('user_profile');

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


	public function message($mess,$ctr)
	{
		switch($ctr){
			case 'add':
				return "You have succesfully added your ".$mess.".";
	            break;
			default:
				return "You have succesfully edited your ".$mess.".";
		}
	}

}
