<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Imovel;

class HomeController extends Controller
{
    public function index(){
    	$imoveis = Imovel::all();
    	return view('site.home',compact('imoveis'));
    }
}
