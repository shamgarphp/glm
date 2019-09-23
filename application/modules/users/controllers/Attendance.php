<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Attendance extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Attendance_model');
        $this->load->model('User_model'); 
    }


    public function Attendance_list()
    {
       $this->form_validation->set_rules('employee','employee','required|trim');
       $this->form_validation->set_rules('today_date','date','required|trim');
       $this->form_validation->set_rules('Sign_in_time','sign in time','required|trim');
       $this->form_validation->set_rules('Sign_Out_time','sign out time','required|trim');
    
        if ($this->form_validation->run() == FALSE)
        {
            $data['employee_list']    =  $this->User_model->getall_employees();
            $data['attendance_list']  =  $this->Attendance_model->getall_attendance();
            // print_r($data['attendance_list']);exit;
            $data['table_js'] = 'users/users/js/table_js'; 
            $data['file'] = 'users/users/attendance/attendance_list';
            $data['custom_js'] = 'users/users/attendance/js/custom_js';
            $this->load->view('admin_template/main',$data); 
        }
        else
        {
            if(isset($_POST['add_attendance']) && !empty($_POST['add_attendance']))
            {                               
                if(isset($_POST['employee']) && !empty($_POST['employee']))
                {
                    $today_date = $this->input->post("today_date");
                    $newdate = date("Y-m-d", strtotime($today_date));
                    $employee_id =   $_POST['employee'];
                    $usercheck  =  $this->Attendance_model->attendance_check($employee_id,$newdate);

                    if(empty($usercheck))
                    {
                        $data = array(
                         'emp_id' => $this->input->post("employee"),
                         'atten_date' =>  $newdate,
                         'signin_time' => $this->input->post("Sign_in_time"),
                         'signout_time' => $this->input->post("Sign_Out_time"),
                         'status' => 1,
                        );

                        $result = $this->Attendance_model->save_attendance($data);    

                        if($result)
                        {
                            $this->session->set_flashdata('success', 'Attendance Add Successfully!'); 
                            redirect('attendance');
                        }
                        else
                        {
                            $this->session->set_flashdata('error', 'Attendance Failed!'); 
                            redirect('attendance');
                        }  
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Already Exits!'); 
                        redirect('attendance');
                    }
                }              
            }
        }        
    }

  
    public function Attendance_edit()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
           $attendance_id      = base64_decode($_GET['id']);
           $this->form_validation->set_rules('today_date','date','required|trim');
           $this->form_validation->set_rules('Sign_in_time','sign in time','required|trim');
           $this->form_validation->set_rules('Sign_Out_time','sign out time','required|trim');
        
            if ($this->form_validation->run() == FALSE)
            {
                $data['employee_list']    =  $this->User_model->getall_employees();
                $data['Attendance_edit']  =  $this->Attendance_model->get_attendance($attendance_id);
               
                $data['table_js'] = 'users/users/js/table_js';
                $data['file'] = 'users/users/attendance/attendance_edit';
                
                $data['custom_js'] = 'users/users/attendance/js/custom_js';
                //$data['custom_js'] = 'users/users/attendance/js/custom_js';
                $this->load->view('admin_template/main',$data); 
            }
            else
            {
                if(isset($_POST['update_attendance']) && !empty($_POST['update_attendance']))
                {                               
                    
                    $today_date = $this->input->post("today_date");
                    $newdate = date("Y-m-d", strtotime($today_date));
                   
                    $data = array(
                     'atten_date' =>  $newdate,
                     'signin_time' => $this->input->post("Sign_in_time"),
                     'signout_time' => $this->input->post("Sign_Out_time"),
                     'updated_on' => date('Y-m-d H:i:s'),
                    );

                    $result = $this->Attendance_model->update_attendance($data,$attendance_id);    

                    if($result)
                    {
                        $this->session->set_flashdata('success', 'Attendance Update Successfully!'); 
                        redirect('attendance');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Attendance Update Failed! Try Again!'); 
                        redirect('AttendanceEdit');
                    }  
                }
                else
                {
                    $this->session->set_flashdata('error', 'Attendance Update Failed! Try Again!'); 
                    redirect('AttendanceEdit');
                }               
                
            }
        }            
    }


    public function Attendance_delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $attendance_id        = base64_decode($_GET['id']);

            $result  = $this->Attendance_model->delete_Attendance($attendance_id);
            if($result)
            {
              $this->session->set_flashdata('success','Attendance Delete Successfully.');
              redirect('attendance'); 
            }
            else
            {
              $this->session->set_flashdata('error','Attendance Delete failed.');
              redirect('attendance'); 
            } 
            
        }
        else
        {
            $this->session->set_flashdata('error','Attendance Delete failed.Try again.');
            redirect('attendance'); 
        }      
    } 



}