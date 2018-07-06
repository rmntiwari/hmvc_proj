<?php
 class Exitpopup extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 	}

 	function index(){
		$this->load->view('exit');
	}
	
	function popup(){
		echo 'Calling';
	}
 }