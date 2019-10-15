<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Program extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Program_model');
        $this->load->model('User_model');
        $this->load->library('upload');

    }

    public function program_list()
    {
        $data['program_list'] =  $this->Program_model->getall_programs();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/program/program_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function add_program()
    {   
      $this->load->model('vbs/Vbs_model');
      $data['file']        = 'users/users/program/add_program';
      // $data['leaveTypes'] =  $this->Leave_model->leave_types();
      $data['staff_locations'] = $this->Vbs_model->getall_location();
      $data['validation_js']  = 'admin/all_common_js/frontend_validation_js';
      $this->load->view('admin_template/main',$data);
    }

    public function save_program(){
        
      if(isset($_POST['add']) && !empty($_POST['add'])){

        $result = $this->Program_model->save_program();
        redirect('Programs');
      }
    }
}