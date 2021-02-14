<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Gate;

use Auth; 

class AccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        try {
    
            // Does User Have a Valid Role IF so Redirect to User's Dashboard

            $role = Auth::user()->role;

            if (! Gate::allows($role)) {
                abort(403,"Access Denied"); 
               
            } 

           else 

            {
                
                  return redirect()->route('user', ['dashboard' => $role]); 

            }}
            
        

        catch (exception $e) {
            return $e->getmessage();
        }

        
    }
}
