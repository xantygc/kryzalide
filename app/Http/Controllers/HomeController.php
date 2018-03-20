<?php 
namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;

class HomeController extends Controller {

	/*
	| --------------------------------------
	| Please note that you should re-login to see the session work
	| --------------------------------------
	|
	*/
	public function index(Request $request) {

		$news = News::orderBy('created_at','desc')->get();

		$fellows = DB::table('fellows')->where('disabled',0)->count();
		$likes = DB::table('news')->sum('like');
		$padrinos = DB::table('relationships')->select('referrer')->distinct()->count();
		$apadrinados = DB::table('relationships')->select('referrered')->distinct()->count();

		$request->session()->put('fellows', $fellows);
		$request->session()->put('likes', $likes);
		$request->session()->put('padrinos', $padrinos);
		$request->session()->put('apadrinados', $apadrinados);

		return view('welcome')->with('news', $news);
	}

	public function like($newsId) {

		$selectedNew = News::find($newsId);
		$selectedNew->like +=1;
		$selectedNew->save();

		DB::table('stats')->insert(
		    ['name' => 'Like en noticia', 'value' => $newsId, 'created_at' => Carbon::now()]
		);

		return $selectedNew->like;
	}

	public function unlike($newsId) {

		$selectedNew = News::find($newsId);
		$selectedNew->unlike +=1;
		$selectedNew->save();

		DB::table('stats')->insert(
		    ['name' => 'Unlike en noticia', 'value' => $newsId, 'created_at' => Carbon::now()]
		);

		return $selectedNew->unlike;
	}
}