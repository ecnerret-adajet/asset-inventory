<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','department','company','role'
    ];
  
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function assignees()
    {
        return $this->hasMany('App\Assignee');
    }
    
    public function assets()
    {
        return $this->hasMany('App\Asset');
    }
 
    public function disposals()
    {
        return $this->hasMany('App\Disposal');
    }
    

    
}
