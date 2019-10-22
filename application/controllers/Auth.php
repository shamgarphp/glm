<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{


		// $this->logged_in();

		$this->form_validation->set_rules('admin_email', 'Email', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            // true case
           	$email_exists = $this->model_auth->check_email($this->input->post('admin_email'));

           	if($email_exists == TRUE) {
           		$login = $this->model_auth->login($this->input->post('admin_email'), $this->input->post('pass'));;

           		if($login) {

           			$logged_in_sess = array(
           				'user_id' => $login['user_id'],
				        'role_id'  => $login['role_id'],
				        'email'     => $login['email'],
				        'logged_in' => TRUE
					);

					$this->session->set_userdata($logged_in_sess);
           			redirect('dashboard', 'refresh');
           		}
           		else {
           			$this->data['errors'] = 'Incorrect username/password combination';
           			$this->load->view('admin', $this->data);
           		}
           	}
           	else {
           		$this->data['errors'] = 'Email does not exists';

           		$this->load->view('admin', $this->data);
           	}	
        }
        else {
            // false case
            $this->load->view('admin');
        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login', 'refresh');
	}

}
