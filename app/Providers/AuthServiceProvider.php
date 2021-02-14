<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Define Gates for User Roles [school, student, parent, teacher, accountant, admin, superadmin] 
        
        $LoggedInUser=Auth::user(); 
        
        Gate::define('school', function ($LoggedInUser){

                if($LoggedInUser->role=='school') {
                    return true; 
                } 
                
                return false; 

            }
        );

        Gate::define('student', function ($LoggedInUser){
                if($LoggedInUser->role=='student') {
                    return true; 
                }
                return false;
        });

        Gate::define('parent', function($LoggedInUser){
            if($LoggedInUser->role=='parent') {
                return true; 
            }
            return false; 
        }); 

        Gate::define('teacher', function ($LoggedInUser){
            if($LoggedInUser->role=='teacher') {
                return true;
            }
            return false; 
        }); 

        Gate::define('accountant', function($LoggedInUser){
            if($LoggedInUser->role=='accountant') {
                return true;
            }
            return false; 
        }); 

        Gate::define('admin', function($LoggedInUser){
            if($LoggedInUser->role=='admin') {
                return true; 
            }
            return false;
        });

        Gate::define('superadmin', function($LoggedInUser){
            if($LoggedInUser->role=='superadmin') {
                return true;
            }
            return false;
        }); 

    }
}
