<?php



 spl_autoload_register(function($class){

 if(file_exists('includes/classes/class.'.$class.'.php')){ 

 include_once('includes/classes/class.'.$class.'.php'); 
 
 }  }); 
 
  ?>