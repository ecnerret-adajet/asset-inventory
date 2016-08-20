<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Own;
use DB;
use App\Stock;
use App\Disposal;
use App\Asset;

class OwnsController extends Controller
{

    public function __construct()
	{
		$this->middleware('auth');
	}
    
    
    public function index(Own $own)
    {
        $assets = $own->assets;
        $stocks = Stock::lists('name','id');
        

        $disposals = Disposal::with('asset')->get();        
        return view('assets.category', compact('assets','stocks','disposals'));
    }
    
}
