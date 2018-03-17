<?php 
namespace App\Http\Controllers;

use App\Fellows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FellowsController extends Controller {

	public function index(Request $request) {

		$code = $request->input('facestoken');
		$fellow = Fellows::where('facescode', $code)->get();

		if($fellow->isEmpty())
		{
			return redirect()->back()->with($message, 'El token introducido no existe');
		}

		return view('fellow')->with('fellow', $fellow->first());
	}
}