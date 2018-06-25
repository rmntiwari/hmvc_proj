<?php
 
 class Mycsrf extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->helper('form');
 		$this->load->helper('security');
 	}


 	 function index(){

 		echo "234324324";
 	}


 	 function test1(){

 		echo "hrrrrrrrrrrrrrrrrrrrrrrrrr";
 	}
 }
?>