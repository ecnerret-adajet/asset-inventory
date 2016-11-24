<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acompanie extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function assignees()
    {
        return $this->belongsToMany('App\Assignee');
    }

    /**
     * list laptop to loan table
     */

    public function laptops()
    {
    	return $this->belongsToMany('App\Laptop');
    }

    /**
     * list from loan tables
     */

    public function loans()
    {
        return $this->belongsToMany('App\Loan');
    }

}
