<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Revisionable\Laravel\RevisionableTrait;
use Sofa\Revisionable\Revisionable;

class Assignee extends Model implements Revisionable
{
    use RevisionableTrait;
    
    protected $revisionPresenter = 'App\Presenters\Revisions\AssigneePresenter';

      protected $revisionable = [
        'assignee_name',
    ];
    
    protected $fillable = [
        'assignee_name',
        'assignee_position',
        'assignee_id',
    ];
    
    /* user belongs to department */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /* lists for Departments */
    
    public function adepartments()
    {
        return $this->belongsToMany('App\Adepartment')->withTimestamps();
    }
    
    public function getAdepartmentListAttribute()
    {
        return $this->adepartments->lists('id')->all();
    }
    
    /* lists for Company */
    
    public function acompanies()
    {
        return $this->belongsToMany('App\Acompanie')->withTimestamps();
    }
    
    public function getAcompanieListAttribute()
    {
        return $this->acompanies->lists('id')->all();
        
    }
    
    /* lists for asset */
    
    public function assets()
    {
        return $this->belongsToMany('App\Asset')->withTimestamps();
    }
    

    
    
}
