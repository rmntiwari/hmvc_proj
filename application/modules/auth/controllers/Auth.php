<?php
//defined(BASEPATH) OR exit('No direct script access allowed');

class Auth extends MY_Controller{

 	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation')); 
		$this->load->model('ion_auth_modelrmn');
		//$this->load->library(array('form_validation'));
		$this->load->helper(array('url', 'language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');  // only auth has been written to load auth_lang.php file  from application/language/

	}
 	 

     function index()
     {
 
		 if( $this->input->post('identiry') ) 
		 {
            $this->login();
         }
         else
         { 

			$data['message'] = (validation_errors())? validation_errors() : $this->session->flashdata('message');

			$data['identity'] = array("name" =>'identity','id'=>'identity','type'=>'text','value'=>$this->form_validation->set_value('identiry'));

			$data['password'] = array('name' => 'password',	'id' => 'password',	'type' => 'password',);

			$this->load->view('/auth/login', $data); 
         }
     	 
     }

    public function login()
     {
     	
     	 
     	$data['title'] = $this->lang->line('login_heading');
     	$this->form_validation->set_rules('identity', str_replace(":","", $this->lang->line('login_identity_label')), 'required');
     	$this->form_validation->set_rules('password' ,str_replace(":","", $this->lang->line('login_password_label')),'required');



     	if($this->form_validation->run() === true)
     	{

     	 		// echo "logged in successfully";
     		 

		/*if (empty($identity) || empty($password))
		{
			$this->set_error('login_unsuccessful');
			return FALSE;
		}

		$this->trigger_events('extra_where');

		$query = $this->db->select($this->identity_column . ', email, id, password, active, last_login')
						  ->where($this->identity_column, $identity)
						  ->limit(1)
						  ->order_by('id', 'desc')
						  ->get($this->tables['users']);

		if ($this->is_max_login_attempts_exceeded($identity))
		{
			// Hash something anyway, just to take up time
			$this->hash_password($password);

			$this->trigger_events('post_login_unsuccessful');
			$this->set_error('login_timeout');

			return FALSE;
		}

		if ($query->num_rows() === 1)
		{
			$user = $query->row();

			$password = $this->hash_password_db($user->id, $password);

			if ($password === TRUE)
			{
				if ($user->active == 0)
				{
					$this->trigger_events('post_login_unsuccessful');
					$this->set_error('login_unsuccessful_not_active');

					return FALSE;
				}

				$this->set_session($user);

				$this->update_last_login($user->id);

				$this->clear_login_attempts($identity);

				if ($remember && $this->config->item('remember_users', 'ion_auth'))
				{
					$this->remember_user($user->id);
				}

				$this->trigger_events(array('post_login', 'post_login_successful'));
				$this->set_message('login_successful');

				return TRUE;
			}
		}

		// Hash something anyway, just to take up time
		$this->hash_password($password);

		$this->increase_login_attempts($identity);

		$this->trigger_events('post_login_unsuccessful');
		$this->set_error('login_unsuccessful');

		return FALSE;*/

     		$remember = (bool)$this->input->post('remember');

     		if($this->input->post('identity') && $this->input->post('password')){

     			$this->ion_auth_modelrmn->login($this->input->post('identity'),$this->input->post('password'));

     		}
     		 

     	}
     	else
     	{
  		 

     		$data['message'] = (validation_errors())?  validation_errors() : $this->session->flashdata('flashdata message ');
 

     		$data['identity'] = array(

				"name" =>'identity',
				'id'=>'identity',
				'type'=>'text',
				'value'=>$this->form_validation->set_value('identity')
     		);

     		$data['password'] = array(

     			'name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);

			//$this->load->view('/auth/login', $data);
			$this->_render_page('/auth/login', $data);

     	}

     }

     public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}















     // going to write all library functhion here temporarly 
    public function register($identity, $password, $email, $additional_data = array(), $group_ids = array()){}
    public function logged_in(){}
    public function logout(){}    
    public function get_user_id(){}
    public function is_admin($id = FALSE){}
    public function in_group($check_group, $id = FALSE, $check_all = FALSE){}






}// end of class

?>