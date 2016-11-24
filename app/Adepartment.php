<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adepartment extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function assignees()
    {
        return $this->belongsToMany('App\Assignee');
    }

     /**
     * list from loan tables
     */

    public function loans()
    {
        return $this->belongsToMany('App\Loan');
    }
}
