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
    }

    public function task_list()
    {
        $data['employee_list'] =  $this->User_model->getall_employees();
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

      // if(isset($_POST['add_user']) && !empty($_POST['add_user'])){

      //     $data = array(
      //    'task_title' => $this->input->post("task_title"),
      //    'task_description' => $this->input->post("task_description"),
      //    'location_id' => $this->input->post("location_id")
      //   );

      //   $result = $this->Task_model->save_task($data);

      //   if($result)
      //   {
      //     $this->session->set_flashdata('success', 'Task Created Successfully!'); 
      //     redirect('tasks');
      //   }
      // }
      if($this->input->post('type')==1)
        {
          $task_title=$this->input->post('task_title');
          $task_description=$this->input->post('task_description');
          $location_id=$this->input->post('location_id');
          $this->Task_model->save_task($task_title,$task_description,$location_id);  
          echo json_encode(array(
            "statusCode"=>200
          ));
        }
    }   
}