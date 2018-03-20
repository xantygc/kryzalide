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
		$padrinos = DB::table('relationships')->select('referrer')->distinct()->count();
		$apadrinados = DB::table('relationships')->select('referrered')->distinct()->count();
		
		$apadrinadosCodes = DB::table('relationships')->distinct()->pluck('referrered');
		$padrinosCodes = DB::table('relationships')->distinct()->pluck('referrer');

		$request->session()->put('fellows', $fellows);
		$request->session()->put('likes', $likes);
		$request->session()->put('padrinos', $padrinos);
		$request->session()->put('apadrinados', $apadrinados);

		$request->session()->put('listaApadrinados', $apadrinadosCodes);
		$request->session()->put('listaPadrinos', $padrinosCodes);
		

		return view('fellow')->with('fellow', $fellow->first());
	}
}