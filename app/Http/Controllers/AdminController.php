<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use  Illuminate\Pagination\Paginator;


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

use DB;

use App\User;




class AdminController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('admin');
	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title="Admin Panel";
		$os_def		 = OS::all();
		$lang_def	 = Language::all();
		$fwork_def	 = Framework::all();

		$selected_lang=array();
		$selected_os=array();
		$selected_fwork=array();

		$users=array();
		return view('admin.index',compact(
			'title','lang_def',
			'os_def','fwork_def',
			'selected_lang','selected_os',
			'selected_fwork','users'));
	}

	public function search()
	{

		$title="Admin Panel";
		$os_def		 = OS::all();
		$lang_def	 = Language::all();
		$fwork_def	 = Framework::all();

		$selected_lang=array();
		$selected_os=array();
		$selected_fwork=array();

		$name=Input::get('name');
		$sex=Input::get('sex');
		$age=Input::get('age');


		$users = User::whereHas('pinfo', function($query) use($name,$sex,$age)
		{

			if($sex!=''){
				$query->where('sex', '=', $sex);
			}
			if($age!=''){
				$query->where('age', '=', $age);
			}
			if($name!=''){
				$query->where('fname', 'like', "%$name%")->orWhere('lname', 'like', "%$name%");
			}

		})
		->whereHas('lang', function($query2)
		{
			$lang = Input::get('lang');
			if($lang!=NULL){
				$valuenew='';
				foreach($lang as $key => $value)
				{
					$valuenew=$value;
				}
				$query2->where('lang_id', '=', $valuenew);
			}

		})
		->whereHas('os', function($query3)
		{
			$os = Input::get('os');
			if($os!=NULL){
				$valuenew='';
				foreach($os as $key => $value)
				{
					$valuenew=$value;
				}
				$query3->where('os_id', '=', $valuenew);
			}

		})
		->whereHas('fwork', function($query4)
		{
			$fwork = Input::get('fwork');
			if($fwork!=NULL){
				$valuenew='';
				foreach($fwork as $key => $value)
				{
					$valuenew=$value;
				}
				$query4->where('fwork_id', '=', $valuenew);
			}

		})
		->orderBy('created_at', 'id')->Paginate(3);

		return view('admin.index',compact(
			'title','lang_def',
			'os_def','fwork_def',
			'selected_lang','selected_os',
			'selected_fwork','users'),[
    'users' => $users->appends(Input::except('page'))
]);

	}

	public function view()
	{

		$title="View Applicant";
		$users = User::whereHas('pinfo', function($query)
		{
			$no=Input::get('app_no');
			$query->where('user_id', '=', $no);

		})
		->has('lang')
		->has('os')
		->has('fwork')
		->has('educ')
		->has('comp')
		->has('ref')->get();

		$educ2 = NULL;
		$comp2 = NULL;
		$ref2 = NULL;
		return view('admin.view_applicant',compact(
			'title','lang_def',
			'os_def','fwork_def',
			'selected_lang','selected_os',
			'selected_fwork','users','educ2','comp2','ref2'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return Input::get('name');
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
