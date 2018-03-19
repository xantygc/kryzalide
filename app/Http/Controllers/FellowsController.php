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

		$fellows = DB::table('fellows')->where('disabled',0)->count();
		$likes = DB::table('news')->sum('like');
		$padrinos = 0;
		$apadrinados = 0;

		$request->session()->put('fellows', $fellows);
		$request->session()->put('likes', $likes);
		$request->session()->put('padrinos', $padrinos);
		$request->session()->put('apadrinados', $apadrinados);

		return view('fellow')->with('fellow', $fellow->first());
	}
}