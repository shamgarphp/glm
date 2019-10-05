<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Task extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('User_model');
        $this->load->model('vbs/Vbs_model');
        $this->load->library('upload');
        $this->load->model('Task_model');
    }

    public function task_list()
    {
      $this->load->model('Task_model');
        $data['employee_list'] =  $this->User_model->getall_employees();
        $data['task_list'] =  $this->Task_model->getall_tasks();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/task_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function create_task()
    {   
      $data['file']        = 'users/users/create_task';
      $data['employee_list'] =  $this->User_model->getall_employees();
      $data['staff_locations'] = $this->Vbs_model->getall_location();
      $data['validation_js']  = 'admin/all_common_js/frontend_validation_js';
      $this->load->view('admin_template/main',$data);
    }

    public function save_task(){
      $this->load->model('Task_model');

      if(isset($_POST['add_user']) && !empty($_POST['add_user'])){

        $result = $this->Task_model->save_task();
        redirect('tasks');

        // if($result)
        // {
        //   $this->session->set_flashdata('success', 'Task Created Successfully!'); 
        //   redirect('tasks');
        // }
      }
    }

    public function edit_task(){

      $taskId = $_GET['taskId'];

      $data['file']        = 'users/users/edit_task';
      $data['tasks'] =  $this->Task_model->getTask($taskId);
      $data['days'] =  $this->Task_model->getDaysByTaskId($taskId);
      $data['participants'] =  $this->Task_model->getParticipantsByTaskId($taskId);
      $data['employee_list'] =  $this->User_model->getall_employees();
      $data['staff_locations'] = $this->Vbs_model->getall_location();
      $data['validation_js']  = 'admin/all_common_js/frontend_validation_js';
      $this->load->view('admin_template/main',$data);
      
    }

    public function update_task(){
      $taskId = $_GET['taskId'];
      $result = $this->Task_model->update_task($taskId);
      redirect('tasks');
    } 

    public function delete_task(){
      $taskId = $_GET['taskId'];
      $result = $this->Task_model->delete_task($taskId);
      redirect('tasks');
    }  
}