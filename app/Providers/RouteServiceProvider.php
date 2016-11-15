<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
        
           $router->model('assignees', 'App\Assignee');
           $router->model('assets', 'App\Asset');
           $router->model('disposals', 'App\Disposal');
           $router->model('plcs', 'App\Plc');
           $router->model('loans', 'App\Loan');
           $router->model('laptops', 'App\Laptop');
        
        
         $router->bind('owns', function($name){
            return \App\Own::where('name',$name)->firstOrFail();
        
        });
        
        $router->bind('disposals', function($name){
            return \App\Disposal::where('name',$name)->firstOrFail();
        
        });
        
         $router->bind('types', function($name){
            return \App\Type::where('name',$name)->firstOrFail();
        
        });

        $router->bind('acompanies', function($name){
            return \App\Acompanie::where('name',$name)->firstOrFail();
        
        });
        
     
        
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
