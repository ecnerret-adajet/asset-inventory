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

    public function laptops()
    {
    	return $this->belongsToMany('App\Laptop');
    }

}
