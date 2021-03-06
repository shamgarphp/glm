<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fund extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Fund_model');
        $this->load->model('User_model');
        $this->load->library('upload');
    }

    public function fund_list()
    {
        $data['fund_list'] =  $this->Fund_model->getall_funds();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/fund/fund_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }

    // public function leave_list()
    // {
    //    $this->form_validation->set_rules('employee','employee','required|trim');
    //    $this->form_validation->set_rules('today_date','date','required|trim');
    //    $this->form_validation->set_rules('Sign_in_time','sign in time','required|trim');
    //    $this->form_validation->set_rules('Sign_Out_time','sign out time','required|trim');
    
    //     if ($this->form_validation->run() == FALSE)
    //     {
    //         $data['employee_list']    =  $this->User_model->getall_employees();
    //         $data['leave_types']      =  $this->Fund_model->leave_types();
    //         // $data['attendance_list']  =  $this->Fund_model->getall_attendance();
    
    //         $data['table_js'] = 'users/users/js/table_js'; 
    //         $data['file'] = 'users/users/leave/leave_list';
    //         $data['custom_js'] = 'users/users/leave/js/custom_js';
    //         $this->load->view('admin_template/main',$data); 
    //     }
    //     else
    //     {
    //         if(isset($_POST['add_attendance']) && !empty($_POST['add_attendance']))
    //         {                               
    //             if(isset($_POST['employee']) && !empty($_POST['employee']))
    //             {
    //                 $today_date = $this->input->post("today_date");
    //                 $newdate = date("Y-m-d", strtotime($today_date));
    //                 $employee_id =   $_POST['employee'];
    //                 // $usercheck  =  $this->Fund_model->attendance_check($employee_id,$newdate);

    //                 if(empty($usercheck))
    //                 {
    //                     $data = array(
    //                      'emp_id' => $this->input->post("employee"),
    //                      'atten_date' =>  $newdate,
    //                      'signin_time' => $this->input->post("Sign_in_time"),
    //                      'signout_time' => $this->input->post("Sign_Out_time"),
    //                      'status' => 1,
    //                     );

    //                     // $result = $this->Fund_model->save_attendance($data);    

    //                     if($result)
    //                     {
    //                         $this->session->set_flashdata('success', 'Attendance Add Successfully!'); 
    //                         redirect('attendance');
    //                     }
    //                     else
    //                     {
    //                         $this->session->set_flashdata('error', 'Attendance Failed!'); 
    //                         redirect('attendance');
    //                     }  
    //                 }
    //                 else
    //                 {
    //                     $this->session->set_flashdata('error', 'Already Exits!'); 
    //                     redirect('attendance');
    //                 }
    //             }              
    //         }
    //     }        
    // }
}