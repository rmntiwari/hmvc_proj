<?php

 class Googlechart extends MY_Controller{

 
 	function __construct(){

 		parent::__construct();
 		$this->load->helper('url');
 	}



 	function index(){

 		 $this->load->view('index');
 	}



    public function chart_pop(){
    	
    	$this->load->view('chartpop');
    }



    public function create_chart(){
    	  
    	$this->load->view('createchart');
    }



 }



?>