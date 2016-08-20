<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AssigneeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Assignee;
use App\Adepartment;
use App\Acompanie;
use Sofa\Revisionable\Laravel\Revision;
use App\Asset;
use App\Own;
use App\User;
use Flash;

class AssigneesController extends Controller
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
        $assignees = Assignee::latest()->get();
        $assignees = Assignee::all();
        $adepertments = Adepartment::all();
        $acompanies = Acompanie::all();
        $assets = Asset::all();
        $owns = Own::all();
        $revisions = Revision::all();
        $users = User::all();
        
        $adepartments = Adepartment::lists('name','id');
        $acompanies = Acompanie::lists('name','id');
        
      
        return view('assignees.index', compact(
            'assignees',
            'adepartments',
            'acompanies',
            'revisions',
            'assets',
            'users'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adepartments = Adepartment::lists('name','id');
        $acompanies = Acompanie::lists('name','id');
     
        return view('assignees.create', compact(
            'adepartments',
            'acompanies'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssigneeRequest $request)
    {
        $assignee = Auth::user()->assignees()->create($request->all());        
      
        
        $assignee->adepartments()->attach($request->input('adepartment_list'));
        $assignee->acompanies()->attach($request->input('acompanie_list'));
       
        flashy()->success('You have added an assignee succesfully.');
        
    }

    /**s
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Assignee $assignee)
    {
        $assets = Asset::all();
 
        
        return view('assignees.show', compact(
            'owns',
            'assets',
            'assignee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignee $assignee)
    {
        $adepartments = Adepartment::lists('name','id');
        $acompanies = Acompanie::lists('name','id');

        
        return view('assignees.edit',compact(
            'adepartments',
            'acompanies',
            'assignee'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssigneeRequest $request, Assignee $assignee)
    {
        $assignee->update($request->all());
    
        
        $assignee->adepartments()->sync($request->input('adepartment_list'));
        $assignee->acompanies()->sync($request->input('acompanie_list'));
        
        flashy()->success('successfully updated.');
        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignee $assignee)
    {
        $assignee->delete();
        
        flashy()->success('You have delete an assignee.');
        return redirect('assignees');
    }
}
