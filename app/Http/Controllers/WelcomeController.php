<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('guest');
	// }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('data'=>\App\Posts::paginate(5));
		return view('welcome')->with($data);
	}

	public function show($slug)
	{
		$artikel = \App\Posts::where('slug', $slug)->first();

		if(!empty($artikel)) {
			
			$data = array('data'=>$artikel);
			return view('artikel.show')->with($data);
		}
		else{
			return redirect(url());
		}
	}

	public function showpdf($slug)
	{
		$artikel = \App\Posts::where('slug', $slug)->first();

		if(!empty($artikel)) {
			
			$data = array('data'=>$artikel);
			$pdf = \PDF::loadView('artikel.pdf', $data);
			return $pdf->stream();
			// return $pdf->download($slug.',pdf'); //download
		}
		else{
			return redirect(url());
		}
	}
}