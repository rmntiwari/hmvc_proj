<?php
 class Home extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 	}

 	function index(){

 		 
 		/*
	     // example of  how to use other controller of home module in home controller. we have a home module and home module contains two  controllers first one is home that is default controller of home module and second is Home1 controller. we can not call directly home1 so we have to go thrue home to home1. you can access home1 from url like  'http://localhost/raman/hmvc/home/home1'

 		$this->load->module('home/home1');
		$this->home1->index();
		
		*/



		// example of how to communicate current module with other module .
		// here we are in home controller of home module and 
		//using testcont controller of googlechart module 
		// conclusion is that  using hmvc  one module can communicate with other module one controller can communicate with other contrroller.

 		$this->load->module('googlechart/testcont');
 		$this->testcont->index();

 		 
 	}


    function test(){

    	echo "I am test method of home controller of home module.";
    }



 }

?>