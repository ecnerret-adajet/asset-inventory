<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PersonallaptopRequest;
use Illuminate\Support\Facades\Auth;
use App\Personallaptop;
use App\Acompanie;
use App\Adepartment;
use App\User;
use Flashy;
use DB;

class PersonallaptopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personallaptops = Personallaptop::orderBy('id','incr')->paginate(10);
        return view('personallaptops.index', compact('personallaptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personallaptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonallaptopRequest $request)
    {
        $personallaptops = Auth::user()->personallaptops()->create($request->all());
        flashy()->success('Item successfully added!');
        return redirect('personallaptops');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personallaptop $personallaptop)
    {
        return view('personallaptops.show', compact('personallaptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personallaptop $personallaptop)
    {
        return view('personallaptops.edit', compact('personallaptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonallaptopRequest $request, Personallaptop $personallaptop)
    {
        $personallaptop->update($request->all());
        flashy()->success('Item successfully updated!');
        return redirect('personallaptops');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalLaptop $personallaptop)
    {
        $personallaptop->delete();
        flashy()->error('Item succesfully deleted!');
        return redirect('personallaptops');
    }
}
