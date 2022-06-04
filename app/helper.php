<?php
   //this is a helper file 
   //add this file inside composer.json / "autoload": {
    // "files": [
    //     "app\\helper.php"
    // ], 
    // now run composer dump-autoload
  
   if(!function_exists("print_data")){
       function print_data($data){
           echo "<pre>";
           print_r($data);
           echo "<pre>";
       }
   }
   if(!function_exists("getHiddenEmail")){
       function getHiddenEmail($email){
        $em   = explode("@",$email);
        $name = implode('@', array_slice($em, 0, count($em)-1));
        $len  = floor(strlen($name)/2);
        return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);
       }
   }