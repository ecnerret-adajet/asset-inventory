<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Adepartment;
use App\Acompanie;
use App\Own;
use App\User;
use App\Assignee;
use App\Asset;
use App\Location;
use App\Statu;
use App\Disposal;
use App\Stock;
use DB;
use Response;
use App\Program;
use App\Place;
use Carbon\Carbon;
use Sofa\Revisionable\Laravel\Revision;
use Sofa\Revisionable\Laravel\AssigneePresenter;
use Flash;
use Gate;
use Javascript;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class PagesController extends Controller
{
    
    
    public function __construct()
	{
		$this->middleware('auth');
	}
    
    
    public function index()
    {
        $places = Place::with('assets')->get();
        $status = Statu::with('assets')->get();
        $owns = Own::with('assets')->get();
        
        $assignees = Assignee::lists('assignee_name','assignee_name');
        $locations = Location::lists('name','id');
      
        $asset = Asset::latest()->get();
    
        $revisions = Revision::all();
        
        $adepertments = Adepartment::all();
        $acompanies = Acompanie::all();
        $programs = Program::all();
        $assets = Asset::all();
        $users = User::all();
        
        return view('home', compact(
            'assignees',
            'revisions',
            'locations',
            'user',
            'status',
            'places',
            'adepartments',
            'owns',
            'programs',
            'acompanies',
            'assets',
            'asset',
            'users'));
    }
    
    public function assigned()
    {
        $assignees = Assignee::all();
        $assets = Asset::all();
        $owns = Own::with('assets')->get();
        
        
        return view('pages.assigned', compact(
            'assignees',
            'owns',
            'assets'
        ));
    }
    
    public function report()
    {
        $assets = Asset::all();
        $users = User::all();
        $places = Place::with('assets')->get();
        $status = Statu::with('assets')->get();
        $owns = Own::with('assets')->get();
        
        return view('pages.report',  compact(
            'assets',
            'users',
            'places',
            'status',
            'owns'
        ));
        
    }
    
    public function getreport(Request $request)
    {
         $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required'
        ]); 
        
         $start_date = $request->get('start_date');
         $end_date = $request->get('end_date');
       
        
        $assets = Asset::where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'>=',$start_date)
            ->where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'<=',$end_date)
            ->with('owns')->get(); 
        
       
        
        $places = Place::where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'>=',$start_date)
            ->where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'<=',$end_date)
            ->get();
        
        $owns = Own::where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'>=',$start_date)
            ->where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'<=',$end_date)
            ->get();
        
        
        return view('pages.report', compact(
            'assets',
            'start_date',
            'places',
            'owns',
            'end_date'
        ));
    }
    
    
    public function getsearch(Request $request)
    {
          $this->validate($request, [
            'search' => 'required'
        ]);
        
         $stocks = Stock::lists('name','id');
         $search = $request->get('search');
        
        $disposals = Disposal::with('asset')->get();


        $assets = Asset::where('brand', 'like', "%$search%")
            ->orWhere('model', 'like', "%$search%")
            ->orWhere('it_code', 'like', "%$search%")
            ->orWhere('trasfer_name', 'like', "%$search%")
            ->paginate()
             ->appends(['search' => $search]);



        
        
       

        return view('assets.search', compact('assets','search','stocks','disposals'));
        
    }
	
	  public function transfer(Asset $asset)
    {

        $owns = Own::lists('name','id');
        $assignees = Assignee::lists('assignee_name', 'assignee_name');
        $locations = Location::lists('name','id');
        $status = Statu::lists('name','id');
        $places = Place::lists('name','id');
        $assets = Asset::lists('trasfer_name','id');
        
        
        return view('assets.transfer',compact(
            'owns',
            'assignees',
            'places',
            'locations',
            'status',
            'assets',
            'asset'
        ));
    }


   
}
