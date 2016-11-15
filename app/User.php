<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
     use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','department','company'
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
    
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function loans()
    {
        return $this->hasMany('App\Loan');
    }

    public function laptops()
    {
        return $this->hasMany('App\Laptop');
    }


    
}
