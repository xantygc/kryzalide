<?php 
namespace App\Http\Controllers;

use DB;
use Session;
use Request;
use App\Stats;
use Carbon\Carbon;

class StatsController extends Controller {


	public function index() {


	}


	public function entrar() {
			DB::table('stats')->insert(['name' => 'Quiero entrar', 'value' => 1, 'created_at' => Carbon::now()]);
		return 0;
	}

	public function saber() {
			DB::table('stats')->insert(['name' => 'Quiero saber más', 'value' => 1, 'created_at' => Carbon::now()]);
		return 0;
	}





}