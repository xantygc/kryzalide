<?php 
namespace App\Http\Controllers;

use App\Relationships;
use App\Fellows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelationshipsController extends Controller {

	public function addRelationship(Request $request) {

		$padrino = $request->input('padrino');
		$apadrinado = $request->input('apadrinado');
		$code = $request->input('facescode');

		$relationship = new Relationships;
		$relationship->referrer = $padrino;
		$relationship->referrered = $apadrinado;

		$relationship->save();

		$fellow = Fellows::where('facescode', $code)->where('disabled', '0')->get();
		
		$fellows = DB::table('fellows')->where('disabled',0)->count();
		$likes = DB::table('news')->sum('like');
		$padrinos = DB::table('relationships')->select('referrer')->distinct()->count();
		$apadrinados = DB::table('relationships')->select('referrered')->distinct()->count();
		
		$request->session()->put('fellows', $fellows);
		$request->session()->put('likes', $likes);
		$request->session()->put('padrinos', $padrinos);
		$request->session()->put('apadrinados', $apadrinados);

		$apadrinadosCodes = DB::table('relationships')->distinct()->pluck('referrered');
		$padrinosCodes = DB::table('relationships')->distinct()->pluck('referrer');

		$request->session()->put('listaApadrinados', $apadrinadosCodes);
		$request->session()->put('listaPadrinos', $padrinosCodes);
		

		return view('fellow')->with('fellow', $fellow->first());
	}

}