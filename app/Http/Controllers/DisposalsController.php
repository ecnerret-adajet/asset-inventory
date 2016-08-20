<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisposalRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Flashy;
use Gate;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use App\Disposal;
use App\Asset;
use App\Own;
use App\Location;
use App\Statu;
use App\Assignee;

class DisposalsController extends Controller
{
    
     public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disposals = Disposal::with('asset')->get();
        
        return view('disposals.index', compact('disposals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        return view('disposals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(DisposalRequest $request)
    {
        $disposal = Auth::user()->disposals()->create($request->all()); 
        
        Flashy::message('Disposal succesfully added!');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Disposal $disposal)
    {
        $disposals = Disposal::all();
 
        
        return view('disposal.show', compact(
            'disposals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
