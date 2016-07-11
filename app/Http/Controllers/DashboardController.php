<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Generation;
class DashboardController extends Controller
{
    public function home()
    {
    	$entres = Generation::where('mode', 1)->take(10)->get();
        $sorties = Generation::where('mode', 2)->take(10)->get();
    	return view('dashboard.home')->with('entres',$entres)->with('sorties',$sorties);
    }
}
