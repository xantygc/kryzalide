<?php 
namespace App\Http\Controllers;

use App\Fellows;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use CB;

class FellowsController extends Controller 
{

	public function index(Request $request) 
	{

		$news = News::orderBy('created_at','desc')->get();

		$code = $request->input('facestoken');
		$fellow = Fellows::where('facescode', $code)->where('disabled', '0')->get();

		if($fellow->isEmpty() )
		{
			return redirect()->back()->withErrors(['the token entered is invalid']);
		}

		$fellows = DB::table('fellows')->where('disabled',0)->count();
		$likes = DB::table('news')->sum('like');
		$padrinos = DB::table('relationships')->select('referrer')->distinct()->count();
		$apadrinados = DB::table('relationships')->select('referrered')->distinct()->count();
		
		$apadrinadosCodes = DB::table('relationships')->distinct()->pluck('referrered');
		$padrinosCodes = DB::table('relationships')->distinct()->pluck('referrer');

		$request->session()->put('listaApadrinados', $apadrinadosCodes);
		$request->session()->put('listaPadrinos', $padrinosCodes);

		$request->session()->put('fellows', $fellows);
		$request->session()->put('likes', $likes);
		$request->session()->put('padrinos', $padrinos);
		$request->session()->put('apadrinados', $apadrinados);
		

		return view('fellow')->with('fellow', $fellow->first())->with('news',$news);
	}


	public function leave(Request $request)
	{

		$code = $request->input('facescode');

		DB::table('fellows')->where('facesCode', $code)->update(['disabled' => true],['disabled_at' => Carbon::now()]);
	
		$news = News::orderBy('created_at','desc')->get();

		$fellows = DB::table('fellows')->where('disabled',0)->count();
		$likes = DB::table('news')->sum('like');
		$padrinos = DB::table('relationships')->select('referrer')->distinct()->count();
		$apadrinados = DB::table('relationships')->select('referrered')->distinct()->count();

		$request->session()->put('fellows', $fellows);
		$request->session()->put('likes', $likes);
		$request->session()->put('padrinos', $padrinos);
		$request->session()->put('apadrinados', $apadrinados);

		DB::table('stats')->insert(
		    ['name' => 'Dejar la plataforma', 'value' => $code, 'created_at' => Carbon::now()]
		);

		return view('welcome')->with('news', $news);
	}

	public function activate(Request $request)
	{
		try
		{
		$this->validate($request, ['photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
		$token = $request->input('facestoken');
		$fellow = Fellows::where('facescode', $token)->where('disabled', '1')->first();
		$fellow->disabled = 0;
		$photo = $request->file('photo');
		$ext  = $photo->getClientOriginalExtension();
		$filename = str_slug(pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME));
		$filesize = $photo->getClientSize() / 1024;
		$file_path = 'uploads/'.CB::myId().'/'.date('Y-m');
		$filename = str_slug($filename,'_').'.'.$ext;
		//Create Directory Monthly						
		Storage::makeDirectory($file_path);	
		Storage::putFileAs($file_path,$photo,$filename);
		$fellow->photo = $file_path.'/'.$filename;
		$fellow->update();

		return redirect()->action('HomeController@index')->with('success', 'Your token has been activated !');
		}
		catch(\Exception $e)
		{
			return redirect()->action('HomeController@index')->withErrors('An error ocurred. Your token has not been activated.');
		}

	}
}