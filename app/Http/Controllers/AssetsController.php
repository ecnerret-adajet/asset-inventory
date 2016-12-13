<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AssetRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Collection;
use App\Adepartment;
use App\Acompanie;
use App\Own;
use App\User;
use App\Assignee;
use App\Asset;
use App\Location;
use App\Statu;
use DB;
use Response;
use App\Program;
use App\Place;
use Carbon\Carbon;
use Sofa\Revisionable\Laravel\Revision;
use Sofa\Revisionable\Laravel\AssigneePresenter;
use Flashy;
use Gate;
use App\Laptop;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class AssetsController extends Controller
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
        $asset = Asset::latest()->get();
        
        $places = Place::lists('name','id');
        $assignees = Assignee::lists('assignee_name','assignee_name');
        $locations = Location::lists('name','id');
        $status = Statu::lists('name','id');
        $owns = Own::lists('name', 'id');
        $users = User::all();
    
        $revisions = Revision::all();
        
        
        $adepertments = Adepartment::all();
        $acompanies = Acompanie::all();
        $programs = Program::all();
        $assets = Asset::all();
        $users = User::all();
        
        return view('assets.index', compact(
            'assignees',
            'revisions',
            'locations',
            'status',
            'users',
            'places',
            'adepartments',
            'owns',
            'programs',
            'acompanies',
            'assets',
            'asset',
            'users'));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owns = Own::lists('name','id');
        $locations = Location::lists('name','id');
        $status = Statu::lists('name','id');
        $places = Place::lists('name','id');
        $assignees = Assignee::lists('assignee_name','assignee_name');
        $programs = Program::all();
        
        return view('assets.create', compact(
            'owns',
            'places',
            'locations',
            'status',
            'assignees',
            'programs'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetRequest $request)
    {
        $asset = Auth::user()->assets()->create($request->all());          
        
        
        $asset->owns()->attach($request->input('own_list'));
        $asset->locations()->attach($request->input('location_list'));
        $asset->status()->attach($request->input('statu_list'));
        $asset->places()->attach($request->input('place_list'));
        /*
        $asset->assignees()->attach($request->input('assignee_list'));
        */
        
		if($request->hasFile('image')) {
            
             $imageName = $asset->id . '.' . 
                 $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(
                base_path() . '/public/images/', $imageName
            );
            
            /*
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();
            
            $asset->filePath = $name;

            $file->move(public_path().'/images/', $name);
            */
        }
        
        flashy()->success('asset succesfully added.');

        return redirect('assets');
    }

     /**
     * Transfer a item from laptop database to asset database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function pass()
     {
        $owns = Own::lists('name','id');
        $locations = Location::lists('name','id');
        $status = Statu::lists('name','id');
        $places = Place::lists('name','id');
        $assignees = Assignee::lists('assignee_name','assignee_name');
        $programs = Program::all();
        
        return view('assets.transfer', compact(
            'owns',
            'places',
            'locations',
            'status',
            'assignees',
            'programs'
        ));
     }


    public function move(Request $request, $id)
    {
                $asset = Auth::user()->assets()->create($request->all());          
        
        
        $asset->owns()->attach($request->input('own_list'));
        $asset->locations()->attach($request->input('location_list'));
        $asset->status()->attach($request->input('statu_list'));
        $asset->places()->attach($request->input('place_list'));
        /*
        $asset->assignees()->attach($request->input('assignee_list'));
        */
        
        if($request->hasFile('image')) {
            
             $imageName = $asset->id . '.' . 
                 $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(
                base_path() . '/public/images/', $imageName
            );
            
            /*
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();
            
            $asset->filePath = $name;

            $file->move(public_path().'/images/', $name);
            */
        }
        
 

        $laptop = Laptop::findOrFail($id);
        $laptop->delete();

       flashy()->success('asset succesfully added.');
        return redirect('assets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        $owns = Own::lists('name','id');
        $assignees = Assignee::lists('assignee_name', 'id');
        $locations = Location::lists('name','id');
        $status = Statu::lists('name','id');
        $places = Place::lists('name','id');
        
         
        
        return view('assets.edit',compact(
            'owns',
            'assignees',
            'places',
            'locations',
            'status',
            'asset'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssetRequest $request, Asset $asset)
    {
        $asset->update($request->all());
        

        $asset->assignees()->sync((!$request->input('assignee_list') ? [] : $request->input('assignee_list')));
        $asset->locations()->sync((!$request->input('location_list') ? [] : $request->input('location_list')));
        $asset->status()->sync((!$request->input('statu_list') ? [] : $request->input('statu_list')));
        $asset->places()->sync((!$request->input('place_list') ? [] : $request->input('place_list')));
    
       
        
         flashy()->success('successfully updated.');
        
       return redirect('home');
    }
    
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect('assets');
    }
    
    
 
    
    

    
 
}
