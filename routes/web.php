<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'accesslevel'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth:sanctum')->get('/user/{dashboard}', function($dashboard){
   
    try {

            $role =Auth::user()->role;
            $roles=['admin', 'school','parent','student','teacher','account', 'superadmin']; 
            $checkrole=in_array($role, $roles);

                                
            switch($checkrole){
                case true: 
                    if($role=='superadmin') {
                        return view("dashboards.$dashboard");
                    } else 
                    
                     if($role==$dashboard) {
                         return view("dashboards.$role");
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


})->name('user');
