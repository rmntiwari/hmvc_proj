<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sitepreview extends MY_Controller{

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		 
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}




?>