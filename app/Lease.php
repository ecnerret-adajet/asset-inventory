<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lease extends Model
{
    protected $fillable  = [
    	'supplier',
    	'unit_type',
    	'model',
    	'serial',
    	'user_leased',
    	'date_received',
    	'end_contract',
    	'date_surrender',
        'photo'
    ];

    protected $dates = [
    	'date_received',
    	'end_contract',
    	'date_surrender'
    ];

    /**
     * Post User created a lease
     */

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * List all companies
     */

    public function acompanies()
    {
    	return $this->belongsToMany('App\Acompanie')->withTimestamps();
    }

    public function getAcompanieListAttribute()
    {
    	return $this->acompanies->lists('id')->all();
    }

    /**
     * list all department
     */

    public function adepartments()
    {
    	return $this->belongsToMany('App\Adepartment')->withTimestamps();
    }

    public function getAdepartmentListAttribute()
    {
    	return $this->adepartments->lists('id')->all();
    }

    /**
     * Set and get date_received field
     */

    public function setDateReceivedAttribute($date)
    {
    	$this->attributes['date_received'] = Carbon::parse($date);
    }

    public function getDateReceivedAttribute($date)
    {
    	return Carbon::parse($date)->format('Y-m-d');
    }

    /**
     * set and get end_contract field
     */

    public function setEndContractAttribute($date)
    {
    	$this->attributes['end_contract'] = Carbon::parse($date);
    }

    public function getEndContractAttribute($date)
    {
    	return Carbon::parse($date)->format('Y-m-d');
    }

     /**
     * set and get date_surrender field
     */

    public function setDateSurrenderAttribute($date)
    {
    	$this->attributes['date_surrender'] = Carbon::parse($date);
    }

    public function getDateSurrenderAttribute($date)
    {
    	return Carbon::parse($date)->format('Y-m-d');
    }







}
