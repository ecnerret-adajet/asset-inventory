<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoanRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Collection;
use Carbon\Carbon;
use Flashy;
use App\Loan;
use App\Own;
use App\Assignee;
use App\Asset;
use App\Laptop;
use App\Acompanie;
use Mail;

class LoansController extends Controller
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

        $laptops = Laptop::all();
        $acompanies = Acompanie::with('laptops')->get();
        $loans = Loan::all();

        return view('loans.index', compact('loans',
            'acompanies',
            'last_user',
            'laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $loans = Loan::all();
        $laptop_url = Laptop::locatedAt($id);
        $laptops = Laptop::lists('model','id');


        return view('loans.create', compact('laptops',
            'loans',
            'laptop_url',
            'id'));
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoanRequest $request)
    {
        $loan = Auth::user()->loans()->create($request->all());
        $loan->laptops()->attach($request->input('laptop_list'));

        // send email notification to confirm loan laptop
       Mail::send('emails.report-laptop', ['loan' => $loan], function($message) use ($loan) {
         $message->to('ecnerret.adajet@gmail.com', 'Asset Inventory')
                  ->subject('Loan Laptop Notification');
         $message->from('admin@assetinventory.com','Administrator');
      });

        flashy()->success('Loan Successfully');
        return redirect('loans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
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
    public function update(Request $request, Loan $loan)
    {
        $input = $request->all();
        $input['on_loan'] = $request->input('on_loan', 0);
        $loan->update($input);

        flashy()->info('Marked as return laptop!');
        return redirect('loans');
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
