<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Html;
class PagesController extends Controller {

	public function home()
	{
		$title = "Home";
		return view('pages.home',compact('title'));
	}
	public function about_us()
	{
		$title = "About Us";
		return view('pages.about_us',compact('title'));
	}

	public function contact_us()
	{
		$title = "Contact Us";
		return view('pages.contact_us',compact('title'));
	}

	public function portfolio()
	{
		$title = "Portfolio";
		return view('pages.portfolio',compact('title'));
	}

	public function team()
	{
		$title = "Team";
		return view('pages.team',compact('title'));
	}

}
