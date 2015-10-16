<?php namespace festa\Http\Controllers;

use festa\Http\Requests;
use festa\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


use Request;

class CrudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function __construct() {
		$this->middleware('nosso-middleware',
		['only' => ['perfil']]);
	}
	public function index() {
		return view('navegacao.index');
	}

	public function sobre() {
		return view('navegacao.sobre');
	}

	public function perfil() {	
		//$id = Request::input('email');
		$tudo = DB::select('select * from users');
		return view('navegacao.perfil')->with('t', $tudo);
	}

	public function contatos() {
		return view('navegacao.contato');
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
