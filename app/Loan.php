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

    



}
