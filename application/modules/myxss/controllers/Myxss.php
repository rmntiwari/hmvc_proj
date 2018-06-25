<?php

class Myxss extends MY_Controller{

 	function __construct(){

 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->helper('form');
 		$this->load->helper('security');
 	}

 	function index(){

 		 
 		 
 		$this->load->view('xssview');
 	}


    function myxss_submit(){

    	$data['non_xss_data'] = array(

    		'employeename' => $this->input->post('empname'),
    		'employeeemail' => $this->input->post('email')

    	);

    	 $data['xss_data']= $this->security->xss_clean($data['non_xss_data']);
		 $this->load->view('xssview',$data);


    }

    function csrf_function(){

 		$this->load->module('myxss/mycsrf');
 		$this->mycsrf->index();
    }


    

 }

 ?>