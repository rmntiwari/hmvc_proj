<?php
 class Home1 extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 	}

 	function index(){

 		// getting user list 
 		echo "I am from home module and home controller and index function jhjkhj";


 		var_dump(base_url());
 	}


    function test(){

    	echo "helloooooooofd      d";
    }



 }

?>