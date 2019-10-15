<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leave extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Leave_model');
        $this->load->model('User_model');
        $this->load->library('upload');
    }

    public function leave_list()
    {
        $data['leave_list'] =  $this->Leave_model->getall_leaves();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/leave/leave_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function apply_leave()
    {   
      $data['file']        = 'users/users/leave/apply_leave';
      $data['leaveTypes'] =  $this->Leave_model->leave_types();
      //$data['staff_locations'] = $this->Vbs_model->getall_location();
      $data['validation_js']  = 'admin/all_common_js/frontend_validation_js';
      $this->load->view('admin_template/main',$data);
    }

    public function save_leave(){
        $this->load->model('Leave_model');

      if(isset($_POST['apply_leave']) && !empty($_POST['apply_leave'])){

        $result = $this->Leave_model->save_leave();
        redirect('Leaves');
      }
    }
}