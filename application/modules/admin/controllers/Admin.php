<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('upload');
        // $this->load->library('session');
        // $this->load->helper('url');
    }
    
    public function index() /*admin users login*/ 
    {
        $this->form_validation->set_rules('admin_email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('pass','Password','trim|required');
        if ($this->form_validation->run() == FALSE) 
        { 
            $this->load->view('login');
            /*admin front end validations*/
            //$this->load->view('all_common_js/frontend_validation_js.php');    
        } 
        else 
        {  
            $email =   $this->input->post('admin_email');
            if (isset($email) && !empty($email))
            {
                $email  = $this->input->post('admin_email');
                $pwd    = base64_encode($this->input->post('pass'));
                $result = $this->Admin_model->getOne($email,$pwd);
                $emp = $this->Admin_model->getEmp($email,$pwd);

                if (isset($result['admin_id']) && !empty($result['admin_id'])) 
                {
                    $newdata = array(
                        'admin_email' => $result['email'],
                        'admin_id' => $result['admin_id'],
                        'admin_username' => $result['name'],
                        'admin_phone' => $result['phone'],
                        'admin_logged_in' => TRUE
                    );
                    if ($newdata['admin_logged_in'] == 1) 
                    {
                        $this->session->set_userdata($newdata);
                        $this->session->set_flashdata('success','Welcome '.$_SESSION['admin_username']);
                        redirect('dashboard');
                    } 
                    else 
                    {
                        $this->session->set_flashdata('error', 'Invalid details provided.');
                        redirect('admin');
                    }
                } 
                else 
                {
                    $this->session->set_flashdata('error', 'Invalid details provided.');
                    redirect('admin');
                }
            }
            else
            {
               $this->session->set_flashdata('error', 'Invalid details provided.');
                redirect('admin'); 
            }
            
        }    
    }
    

    public function profile_update()
    {
        if (isset($_POST['admin_update']) &&  !empty($_POST['admin_update'])) 
        {     
            $admin_id = $this->input->post("admin_id");
            $admin_update  = array(
                'admin_id' => $admin_id,
                'name'    => $this->input->post("name"),
                'email'    => $this->input->post("email"),
                'phone'    => $this->input->post("mobile"),
                'updated_on' => date('Y-m-d H:i:s')
            );
            $result = $this->Admin_model->update_admin_data($admin_update,$admin_id);
            if ($result) 
            {     
                $this->session->set_flashdata('success', 'Profile updated successfully!. Next time login show your updaed details.');
                redirect('dashboard');
            } 
            else 
            {
                $this->session->set_flashdata('error', 'Profile updated failed');
                redirect('dashboard');
            }
        }
        else 
        {
            $this->session->set_flashdata('error', 'Profile updated failed');
                redirect('dashboard');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

    public function is_logged_in() 
    {
        $is_logged_in = $this->session->userdata('admin_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != TRUE && empty($this->session->userdata('admin_username')))
        {
            redirect('admin');    
        } 
    } 


   
}