<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LeaseRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Lease;
use App\Acompanie;
use App\Adepartment;
use App\User;
use Carbon\Carbon;
use DB;
use Flashy;


class LeasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $leases = Lease::orderBy('id','incr')->paginate(10);
        return view('leases.index', compact('leases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acompanies = Acompanie::lists('name','id');
        $adepartments = Adepartment::lists('name','id');
        return view('leases.create', compact('acompanies',
            'adepartments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaseRequest $request)
    {
        $lease = Auth::user()->leases()->create($request->all());
        $lease->acompanies()->attach($request->input('acompanie_list'));
        $lease->adepartments()->attach($request->input('adepartment_list'));
        flashy()->success('Lease Item successfully added !');
        return redirect('leases');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lease $lease)
    {
        return view('leases.show', compact('lease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lease $lease)
    {
        $acompanies = Acompanie::lists('name', 'id');
        $adepartments = Adepartment::lists('name','id');
        return view('leases.edit', compact('lease',
            'acompanies',
            'adepartments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeaseRequest $request, Lease $lease)
    {
        $lease->update($request->all());
        $lease->acompanies()->sync((array)$request->get('acompanie_list'));
        $lease->adepartments()->sync((array)$request->get('adepartment_list'));
        flashy()->success('Lease item successfully updated');
        return redirect('leases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lease $lease)
    {
        $lease->delete();
        flashy()->error('Lease item successfully deleted!');
        return redirect('leases');
    }
}
