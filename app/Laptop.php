<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = [
    		'model',
    		'serial',
    		'finance_code',
            'it_code',
    		'remarks',
    		'photo'
    ];

    public function loans(){
    	return $this->belongsToMany('App\Loan');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * List all avaible companie to databaase;
     */

    public function acompanies()
    {
        return $this->belongsToMany('App\Acompanie')->withTimestamps();
    }

    public function getAcompanieListAttribute()
    {
        return $this->acompanies->lists('id')->all();
    }

    public static function locatedAt($id)
    {
          return static::where(compact('id'))->firstOrFail();
    }



  
    
}
