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


use App\Http\Requests\UpdateCompRequest;

class CompController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
	public function store(UpdateCompRequest $request)
	{
		$comp = new Comp($request->except('_method','_token'));
		$user = User::find(Auth::id());
		$comp= $user->comp()->save($comp);
		flash()->overlay( $this->message('eProfessional Experience','add'),'Succes!');

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
	public function edit($id2)
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
		$ref2=NULL;
		$pinfo2=NULL;

		$comp2 = User::find($id)->comp()->where('comp_id', '=', $id2)->first();

		$users = User::whereHas('pinfo', function($query) use($id)
		{
			$query->where('user_id', '=', $id);

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
			'selected_fwork','users','ref2','comp2','educ2','pinfo2'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateCompRequest $request, $id)
	{
		Comp::where('user_id', '=', Auth::id())->where('comp_id', '=', $id)->update($request->except('_method','_token','update_comp'));

		flash()->overlay($this->message('Professional Experience','edit'),'Success!');

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
		$comp = Comp::where('comp_id', '=', $id)->where('user_id', '=', auth::id())->delete();
		flash()->overlay($this->message('Professional Experience','delete'),'Success!');

		return redirect('user_profile');
	}

	public function message($mess,$ctr)
	{
		switch($ctr){
			case 'add':
				return "You have succesfully added your ".$mess.".";
	            break;
			case 'delete':
				return "You have succesfully deleted a/an ".$mess.".";
	            break;
			default:
				return "You have succesfully edited your ".$mess.".";
		}
	}

}
