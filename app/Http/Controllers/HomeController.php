<?php 
namespace App\Http\Controllers;

use DB;
use Session;
use Request;
use App\News;

class HomeController extends Controller {

	/*
	| --------------------------------------
	| Please note that you should re-login to see the session work
	| --------------------------------------
	|
	*/
	public function index() {

		$news = News::orderBy('created_at','desc')->get();
		return view('welcome')->with('news', $news);
	}

	public function like($newsId) {

		$selectedNew = News::find($newsId);
		$selectedNew->like +=1;
		$selectedNew->save();

		return $selectedNew->like;
	}

	public function unlike($newsId) {

		$selectedNew = News::find($newsId);
		$selectedNew->unlike +=1;
		$selectedNew->save();

		return $selectedNew->unlike;
	}
}