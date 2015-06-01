<?php namespace App\Http\Controllers\Input\Rencana;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth,Input,View,Redirect,Validator,DB,Response,Datatables,Image;
use Illuminate\Http\Request;
use App\Http\Models\renstra;

class InputRenstraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('guest');
	}
	
	public function index()
	{
		$user=Auth::User();
            $role=$user->role;
            $name=$user->nama;
            $kd_surat=$user->kode_surat;
            $grup=$user->id_group;
            $id_user=$user->id;

		$periode=DB::table('tbl_periode')->get();
		$tujuan_strategis=DB::table('tbl_tujuan_strategis')->get();
		$sasaran_strategis=DB::table('tbl_sasaran_strategis')->get();
		$indikator_kinerja=DB::table('tbl_indikator_kinerja')->get();
		$program=DB::table('tbl_program')->get();
		$uk1=DB::table('uk_es1')->orderBy('id_group','asc')->get();

		if(isset($_POST['submit'])){
			//dd('POST Detect');
			//$per=Input::get('periode');
			$per='1';
			$ren=DB::table('v_renstra')->where('kd_surat','=',$kd_surat)->where('id_periode','=',$per)->get();
			$perrens=DB::table('tbl_periode')->where('id','=',$per)->get();
		}else{
			//dd('POST Not Detect');
			$ren=NULL;
			$perrens=NULL;
		}

		return View::make('input.rencana.renstra')
			->with('uk1',$uk1)
			->with('tujuan_strategis',$tujuan_strategis)
			->with('sasaran_strategis',$sasaran_strategis)
			->with('indikator_kinerja',$indikator_kinerja)
			->with('program',$program)
			->with('periode',$periode)
			->with('perrens',$perrens)
			->with('renstra',$ren);

		//return view('input.rencana.renstra');
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
		//var_dump($_POST);
		$kd_surat=Input::get('kd_surat');
		$periode=Input::get('periode');
		$ts=Input::get('ts');
		$ss=Input::get('ss');
		$ik=Input::get('ik');
		$prog=Input::get('prog');

		$ins=renstra::create(['kode_surat'=>$kd_surat,'id_periode'=>$periode,'id_tujuan'=>$ts,'id_sasaran'=>$ss,'id_indikator'=>$ik,'id_program'=>$prog]);
		return Redirect('inprenstra');
		//$input = array($kd_surat,$periode,$ts,$ss,$ik,$prog);
		//dd($input);
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
