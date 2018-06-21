<?php
 class Testcont extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 		$this->load->helper('url');
 	}

 	function index(){

 		// getting user list 
 		echo "Bhasuri ";
 	}


    function test(){

    	echo "helloooooooo";
    }


    

 }

?>