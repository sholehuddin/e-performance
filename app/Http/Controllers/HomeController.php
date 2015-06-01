<?php namespace App\Http\Controllers;

//use App\Model\mail;
//use App\User;
//use App\Model\inboxe;
//use App\Model\drafte;
//use App\Model\importante;
use Auth,Input,View,Redirect,Validator,DB,Request,Response,Datatables,Image;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$uk=DB::table('uk')->orderBy('id_group','asc')->get();

		return View::make('dashboard')->with('uk',$uk);

		//return view('dashboard');
		//return view('dashboard2');
	}

}
