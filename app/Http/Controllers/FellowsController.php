<?php 
namespace App\Http\Controllers;

use App\Fellows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FellowsController extends Controller {

	public function index(Request $request) {

		$code = $request->input('facestoken');
		$fellow = Fellows::where('facescode', $code)->where('disabled', '0')->get();

		if($fellow->isEmpty() )
		{
			return redirect()->back()->withErrors(['El token introducido no existe']);
		}

		return view('fellow')->with('fellow', $fellow->first());
	}
}