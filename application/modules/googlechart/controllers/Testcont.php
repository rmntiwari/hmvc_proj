<?php
 class Testcont extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 		$this->load->helper('url');
 	}

 	function index(){

 		// getting user list 
 		echo "I am from home module and home controller and index function ";
 	}


    function test(){

    	echo "helloooooooo";
    }


    

 }

?>