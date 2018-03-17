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

		$news = News::all()->orderBy('created_at', 'desc');
		return view('welcome')->with('news', $news);
	}
}