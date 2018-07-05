<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Bcrypt $bcrypt The Bcrypt library
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Ion_auth_modelrmn extends CI_Model
{
	/**
	 * Holds an array of tables used
	 *
	 * @var array
	 */
	public $tables = array();

	/**
	 * activation code
	 *
	 * @var string
	 */
	public $activation_code;

	/**
	 * forgotten password key
	 *
	 * @var string
	 */
	public $forgotten_password_code;

	/**
	 * new password
	 *
	 * @var string
	 */
	public $new_password;

	/**
	 * Identity
	 *
	 * @var string
	 */
	public $identity;

	/**
	 * Where
	 *
	 * @var array
	 */
	public $_ion_where = array();

	/**
	 * Select
	 *
	 * @var array
	 */
	public $_ion_select = array();

	/**
	 * Like
	 *
	 * @var array
	 */
	public $_ion_like = array();

	/**
	 * Limit
	 *
	 * @var string
	 */
	public $_ion_limit = NULL;

	/**
	 * Offset
	 *
	 * @var string
	 */
	public $_ion_offset = NULL;

	/**
	 * Order By
	 *
	 * @var string
	 */
	public $_ion_order_by = NULL;

	/**
	 * Order
	 *
	 * @var string
	 */
	public $_ion_order = NULL;

	/**
	 * Hooks
	 *
	 * @var object
	 */
	protected $_ion_hooks;

	/**
	 * Response
	 *
	 * @var string
	 */
	protected $response = NULL;

	/**
	 * message (uses lang file)
	 *
	 * @var string
	 */
	protected $messages;

	/**
	 * error message (uses lang file)
	 *
	 * @var string
	 */
	protected $errors;

	/**
	 * error start delimiter
	 *
	 * @var string
	 */
	protected $error_start_delimiter;

	/**
	 * error end delimiter
	 *
	 * @var string
	 */
	protected $error_end_delimiter;

	/**
	 * caching of users and their groups
	 *
	 * @var array
	 */
	public $_cache_user_in_group = array();

	/**
	 * caching of groups
	 *
	 * @var array
	 */
	protected $_cache_groups = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->database();	 
		$this->load->helper('cookie');
		$this->load->helper('date');
		 
		// initialize messages and error
		$this->messages    = array();
		$this->errors      = array();
	 

		// load the error delimeters either from the config file or use what's been supplied to form validation
		  
	}
	public function set_error($error)
	{
		$this->errors[] = $error;

		return $error;
	}


	public function login($identity,$password,$remember=FALSE){

		//check if id or pass is empty and rais error
		if (empty($identity) || empty($password))
		{
			$this->set_error('login_unsuccessful');
			return FALSE;
		}

		//check if maximum attempt count exceed
		/*if(){
			$this->set_error('login_timeout');
		}*/

		$query = $this->db->select('username, email, id, password, active, last_login')
				->where(array('username'=>$identity))
				->limit(1)
				->order_by('id', 'desc')
				->get('users');


			 

		if($query->num_rows() === 1)
		{
			$user = $query->row();
			$password = $this->hash_password_db($user->id, $password); // taking true by defalute 

			if ($password === TRUE)
			{
				if ($user->active == 0)
				{					 
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

		 

	}

	public function update_last_login($userid){

		//$this->trigger_events('update_last_login');

		$this->load->helper('date');

		//$this->trigger_events('extra_where');

		$this->db->update('users', array('last_login' => time()), array('id' => $id));		 
		return $this->db->affected_rows() == 1;

	}

	public function hash_password_db($id, $password, $use_sha1_override = FALSE)
	{
		if (empty($id) || empty($password))
		{
			return FALSE;
		}		 

		 
		$query = $this->db->select('password, salt')
		                  ->where('id', $id)
		                  ->limit(1)
		                  ->order_by('id', 'desc')
		                  ->get('users');

		$hash_password_db = $query->row(); //object(stdClass)#33 (2) { ["password"]=> string(60) "$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36" ["salt"]=> string(0) "" } 
		 


		if ($query->num_rows() !== 1)
		{
			return FALSE;
		}

		// bcrypt
		if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt')
		{

			die("ddddddddddddd");
			if ($this->bcrypt->verify($password,$hash_password_db->password))
			{
				return TRUE;
			}

			return FALSE;
		}

		// sha1
		if ($this->store_salt)
		{
			die("deeeeeee");

			$db_password = sha1($password . $hash_password_db->salt);
		}
		else
		{
			die("ttttttttttttt");
			$salt = substr($hash_password_db->password, 0, $this->salt_length);

			$db_password =  $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
		}

		if($db_password == $hash_password_db->password)
		{
			return TRUE;
		}
		else
		{
			return TRUE;
		}

	}



} //end of class

?>