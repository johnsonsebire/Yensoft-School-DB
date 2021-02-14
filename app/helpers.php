<?php 

//Helper Functions Here

/*

Send me a few screenshots. The dashboard, student creation Form, 
student list, 
payment section 
and the billing section. 
I need only these to put in my presentation.

*/

function getFirstWord($attribute)
{   
    try {

        $attribute = strtolower($attribute); 
        $response = explode(' ',trim($attribute))[0];
        
        return ucfirst($response);
    
    }
    
    catch (exception $e) {

    return '!ErrorFirstName!'; 
       
    
    }

     


}

if (! function_exists('themeSwitch')) {
    function themeSwitch($version) {

    // Set Theme Mode [light or dark] based on User Preferences or System Color Mode
    
    $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
        if ($color_scheme === false) $color_scheme = 'light'; 

        if(isset($color_scheme) && $color_scheme=='dark') {

            $version = 'dark-mode';
        } 
     
             else {

            switch($version) {
        
                case "light": $version ="theme-cyan";  
        
                break; 
        
                case "dark": $version ="dark-mode"; 
        
                break; 
        
                default: { 
                    
                    $version ="theme-cyan";
        
                }
        

        }
  
    
    }
    
    return $version; 

}
}


if (! function_exists('getUserRole')) {
    function getUserRole(){
     
        try {
            $role = Auth::user()->role;
            return ucFirst($role);
        }
        catch (exception $e) {
            $error = $e->getmessage; 
            return $error; 
        }

        
    }
}


?> 