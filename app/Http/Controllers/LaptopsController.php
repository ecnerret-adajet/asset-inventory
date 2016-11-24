<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LaptopRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Flashy;
use Image;
use App\User;
use App\Laptop;
use App\Acompanie;

class LaptopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acompanies = Acompanie::lists('name','id');
        return view('laptops.create', compact('acompanies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaptopRequest $request)
    {
        $laptop = Auth::user()->laptops()->create($request->all());  
        $laptop->acompanies()->attach($request->input('acompanie_list'));

        flashy()->success('Laptop succesfully added.');

        return redirect('loans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        $acompanies = Acompanie::lists('name','id');
        return view('laptops.edit', compact('acompanies','laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaptopRequest $request, Laptop $laptop)
    {
        $laptop->update($request->all());
        
        $laptop->acompanies()->sync(  (array) $request->get('acompanie_list'));


        flashy()->success('Laptop succesfully Updated!.');
        return redirect('loans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();
        flashy()->info('Laptop succesfully Deleted!.');
        return redirect('loans');
    }
}
