<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PragmaRX\Countries\Package\Countries;


class UserAccessManager extends Controller
{
    //Manage User Access Privileges 

    public function __invoke($dashboard) {

        try {

            $role =Auth::user()->role;
            $roles=['admin', 'school','parent','student','teacher','account', 'superadmin', 'onboarding']; 
            $checkrole=in_array($role, $roles);
 
                                
            switch($checkrole){
                case true: 
                    if($role=='superadmin') {
                        return view("dashboards.$dashboard");
                    } else 
                    
                     if($role==$dashboard) {
                        
                        // $nations = new Countries(); 
                        $countries=Countries::all();

                         return view("dashboards.$role", compact('countries'));
  
                    } else abort(403, 'Invalid Request');
 
                case false: abort(403,'Access Denied');
 
            }
 
        }
          
 
    catch (exception $e) {
 
        $error = $e->getmessage(); 
        
        if($role=='superadmin'){
            $error = 'Something Went Wrong :('; 
        }
        
       
    }
    
 
    abort(403, "Error: $error");

    }

    
}
