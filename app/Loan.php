<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Loan extends Model
{
    protected $fillable = [
            'user_loan',
    		'from_date',
    		'to_date',
            'on_loan',
    		'remarks'
    ];

    protected $date = [
    	'from_date',
    	'to_date'
     ];

     /* list from user creator */
     public function user(){
        return $this->belongsTo('App\User');
     }



     /* list all available laptop to loan */

     public function laptops(){
     	return $this->belongsToMany('App\Laptop')->withTimestamps();
     }

     public function getLaptopListAttribute()
     {
     	return $this->laptops->lists('id')->all();
     }

     /**
      * List all available companies user loan
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
     * list all available department's user loan
     */

    public function adepartments()
    {
        return $this->belongsToMany('App\Adepartment')->withTimestamps();
    }

    public function getAdepartmentListAttribute()
    {
        return $this->adepartments->lists('id')->all();
    }

}
