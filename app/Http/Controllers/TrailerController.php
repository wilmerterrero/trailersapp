<?php

namespace App\Http\Controllers;

use App\Models\Trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth')->except('index', 'show');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$trailers = Trailer::latest()->paginate(12);
		return view('trailers.index', compact('trailers'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function adminIndex()
	{
		$trailers = Trailer::latest()->paginate(100);
		return view('admin', compact('trailers'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('trailers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'titulo' => 'required',
			'descripcion' => 'required',
			'reparto' => 'required',
			'director' => 'required',
			'estudio' => 'required',
			'fecha_estreno' => 'required',
			'link' => 'required',
			'thumbnail' => 'required',
		]);

		Trailer::updateOrCreate(
			[
				'id' => $request->trailer_id
			],
			[
				'titulo' => $request->titulo,
				'descripcion' => $request->descripcion,
				'reparto' => $request->reparto,
				'director' => $request->director,
				'estudio' => $request->estudio,
				'fecha_estreno' => $request->fecha_estreno,
				'link' => $request->link,
				'thumbnail' => $request->thumbnail
			]
		);

		if (empty($request->trailer_id))
			$msg = 'Trailer creado satisfactoriamente.';
		else
			$msg = 'Trailer data ha sido actualizada.';

		return redirect()->route('admin')->with('success', $msg);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$where = array('id' => $id);
		$trailer = Trailer::where($where)->first();
		return view(
			'trailers.show',
			['trailer' => $trailer]
		);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$where = array('id' => $id);
		$trailer = Trailer::where($where)->first();
		return response()->json($trailer);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$trailer = Trailer::where('id', $id)->delete();
		return response()->json($trailer);
	}
}
