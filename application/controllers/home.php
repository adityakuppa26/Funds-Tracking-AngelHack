<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	var $site_name;
    var $site_config = array();
	var $data = array();
	var $id;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		$this->load->helper('url');
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->config->load('site_settings', TRUE);

		$this->site_config = $this->config->item('site_settings');
		$this->site_name = $this->site_config['site_name'];
		$this->page_data['site_name'] = $this->site_name;
	}

	public function index()
	{
		$this->login_user();
		$this->page_data['title'] = "Home|" . $this->site_name;
		$this->load->view('templates/header',$this->page_data); 
		$this->load->view('pages/home_page', $this->page_data);
		$this->load->view('templates/footer',$this->page_data); 
	}//index

	public function login(){
		$this->login_user();
		$this->page_data['title'] = "Login|" . $this->site_name;
		
		$this->load->view('templates/header',$this->page_data);

		$this->load->view('pages/login');
		$this->load->view('templates/footer',$this->page_data); 
    }// login
	
	
	
	function register_email_check() {
		$email = $this->input->post('email');
		if ($this->user_model->check_email_exists($email)) {
			$this->form_validation->set_message('register_email_check', 'Email: ' . $email . ' is already registered with ' . $this->site_name);
			return false;
		}
		return true;
	}// register_email_check

	public function login_user() {
		if (isset($_POST['submit_login'])) {
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|callback_login_credentials_check');
		if ($this->form_validation->run()) {
			$user_data = $this->user_model->get_user_data($this->input->post('email'));
			$session_data = array(
				'user_id' => $user_data['user_id'],
				'email' => $user_data['user_name'],
				'user_type' => $user_data['user_type'],
				'org_id' => $user_data['org_id'],
				'is_logged_in' => true
			);
			$this->session->set_userdata($session_data);
			if($user_data['user_type']==1)
			redirect('organization/all_org/');
			}
			 if($user_data['user_type']==2){
				redirect('organization/user_org/'.$user_data['org_id']);
			}
			$this->page_data['error'] = true;
		}  
	} //login user

	function login_credentials_check() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($this->user_model->check_email_exists($email)) {    
			if ($this->user_model->check_credentials($email, $password)) {
				return true;
			} else {
				$this->form_validation->set_message('login_credentials_check', 'Incorrect password');
				return FALSE;
			}
		}
		else{
			$this->form_validation->set_message('login_credentials_check', 'Email is not registered with ' . $this->site_name);
		return FALSE;
		}
	}


	 function logout()
	 {
	   $this->session->sess_destroy();
	   redirect('home', 'refresh');
	 }
}
