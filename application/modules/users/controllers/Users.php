<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('User_model');
        $this->load->library('upload');
    }

    public function add_user()
    {   
       $this->form_validation->set_rules('first_name','first name','required|trim');
       $this->form_validation->set_rules('last_name','last name','required|trim');
       $this->form_validation->set_rules('email','email','required|trim');
       $this->form_validation->set_rules('pass','password','required|trim');
       $this->form_validation->set_rules('roles','role','required|trim');
    
        if ($this->form_validation->run() == FALSE)
        {
              $data['file']        = 'users/users/add_user';
              $data['roles_list']             = $this->User_model->getall_roles();
              $data['department_list']             = $this->User_model->getall_department();
              $data['bank_names']             = $this->User_model->getall_banks();
              $data['validation_js']       = 'admin/all_common_js/frontend_validation_js';
              $this->load->view('admin_template/main',$data);
        }
        else
        {
            if(isset($_POST['add_user']) && !empty($_POST['add_user']))
            {                               
                if (!empty($_FILES['Profile_pic']['name'])) 
                {
                    /*create img required details size,path*/
                    $img_data = array(
                        'img_name' => 'Profile_pic',
                        'img_path' => './uploads/users',
                        'max_size' => '',
                        'allowed_types' => 'gif|jpg|png',
                        'max_height' => '',
                        'max_width' => ''
                    );
                    /*This is the file upload Custom library file*/
                    $this->load->library('my_file_upload');
                    $file     = $this->my_file_upload->do_upload($img_data);
                    if(isset($file['message']['file_name']) && !empty($file['message']['file_name']))
                    {
                        $filename = preg_replace("/[^A-Za-z0-9\_\-\.]/",'',basename($file['message']['file_name']));   
                    }
                    else
                    {
                         $filename = '';
                    }
                }
                else
                {
                    $filename = ''; 
                }


                if (!empty($_FILES['resume']['name'])) 
                {
                    /*create img required details size,path*/
                    $img_data = array(
                        'img_name' => 'resume',
                        'img_path' => './uploads/users',
                        'max_size' => '',
                        'allowed_types' => '*',
                        'max_height' => '',
                        'max_width' => ''
                    );
                    /*This is the file upload Custom library file*/
                    $this->load->library('my_file_upload');
                    $file     = $this->my_file_upload->do_upload($img_data);
                    if(isset($file['message']['file_name']) && !empty($file['message']['file_name']))
                    {
                        $files = preg_replace("/[^A-Za-z0-9\_\-\.]/",'',basename($file['message']['file_name']));   
                    }
                    else
                    {
                         $files = '';
                    }
                }
                else
                {
                    $files = ''; 
                }

                $dob = $this->input->post("dob");
                $newDob = date("Y-m-d", strtotime($dob));

                $data = array(
                         'first_name' => $this->input->post("first_name"),
                         'last_name' => $this->input->post("last_name"),
                         'gender' => $this->input->post("gender"),
                         'role_id' => $this->input->post("roles"),
                         'email' => $this->input->post("email"),
                         'password' => md5($this->input->post("pass")),
                         'birth_date' => $newDob,
                         'father_name' => $this->input->post("father_name"),
                         'aadhar' => $this->input->post("Aadhar_no"),
                         'pan_number' => $this->input->post("pan_number"),
                         'account_name' => $this->input->post("account_name"),
                         'account_number' => $this->input->post("accojunt_no"),
                         'ifsc_Code' => $this->input->post("ifsc_code"),
                         'bank_Name' => $this->input->post("bank_name"),
                         'highest_qualification' => $this->input->post("high_qual"),
                         'job_description' => $this->input->post("job_desc"),
                         'place_appointment' => $this->input->post("place_apnmt"),
                         'reporting_to' => $this->input->post("report_to"),
                         'dev_qualification' => $this->input->post("dev_qual"),
                         'Job_title' => $this->input->post("job_title"),
                         'account_type' => $this->input->post("account_type"),
                         'department' => $this->input->post("department"),
                         'disc_profile' => $filename,
                         'resume' => $files,
                         'status'  => 1,
                         'created_on' => date('Y-m-d H:i:s') 
                        );

                $result = $this->User_model->save_user($data);    

                if($result)
                {
                      $this->session->set_flashdata('success', 'Registration Successfully!'); 
                      redirect('employees');
                }
                else
                {
                     $this->session->set_flashdata('error', 'Registration Failed!'); 
                    redirect('add_user');
                }           
            }
       }
    }

    public function employee_list()
    {
        $data['employee_list'] =  $this->User_model->getall_employees();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/employee_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }


    public function user_status()
    {  
        if (isset($_POST['id']) && !empty($_POST['id'])) 
        {            
            $reg_status   = $_POST['emp_status'];
            $user_id       = $_POST['id'];
            $status       = ($reg_status == 1)?0:1;
            $register_data     = array('status' => $status,'updated_on' => date('Y-m-d H:i:s'));
            $updateStatus = $this->User_model->user_status($register_data,$user_id);
            if ($updateStatus)
            {
                return true;
            }
            else
            {
                return FALSE; 
            }
        }
        else
        {
            echo  "user status not change.";
        } 
    }

    public function employee_edit()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
           $employee_id      = base64_decode($_GET['id']);
           $this->form_validation->set_rules('first_name','first name','required|trim');
           $this->form_validation->set_rules('last_name','last name','required|trim');
           $this->form_validation->set_rules('email','email','required|trim');
           $this->form_validation->set_rules('roles','role','required|trim');
          
            if ($this->form_validation->run() == FALSE)
            { 
                
                $data['roles_list']             = $this->User_model->getall_roles();
                $data['department_list']             = $this->User_model->getall_department();
                $data['bank_names']             = $this->User_model->getall_banks();
                $data['employee_edit'] = $this->User_model->employee_edit($employee_id);
                $data['validation_js']       = 'admin/all_common_js/frontend_validation_js';
                $data['file'] = 'users/users/employee_edit'; 
                $this->load->view('admin_template/main',$data);
            }
            else
            {
               if(isset($_POST['Student_Update']) && !empty($_POST['Student_Update']))
               {
                    if (!empty($_FILES['Profile_pic']['name'])) 
                    {
                            /*create img required details size,path*/
                            $img_data = array(
                                'img_name' => 'Profile_pic',
                                'img_path' => './uploads/users',
                                'max_size' => '',
                                'allowed_types' => 'gif|jpg|png',
                                'max_height' => '',
                                'max_width' => ''
                            );
                            /*This is the file upload Custom library file*/
                            $this->load->library('my_file_upload');
                            $file     = $this->my_file_upload->do_upload($img_data);
                            if(isset($file['message']['file_name']) && !empty($file['message']['file_name']))
                            {
                                $filename = preg_replace("/[^A-Za-z0-9\_\-\.]/",'',basename($file['message']['file_name']));   
                            }
                            else
                            {
                                 $filename = '';
                            }
                    }
                    else
                    {
                        $filename = $this->input->post("old_pic"); 
                    }


                    if (!empty($_FILES['resume']['name'])) 
                    {
                        /*create img required details size,path*/
                        $img_data = array(
                            'img_name' => 'resume',
                            'img_path' => './uploads/users',
                            'max_size' => '',
                            'allowed_types' => '*',
                            'max_height' => '',
                            'max_width' => ''
                        );
                        /*This is the file upload Custom library file*/
                        $this->load->library('my_file_upload');
                        $file     = $this->my_file_upload->do_upload($img_data);
                        if(isset($file['message']['file_name']) && !empty($file['message']['file_name']))
                        {
                            $files = preg_replace("/[^A-Za-z0-9\_\-\.]/",'',basename($file['message']['file_name']));   
                        }
                        else
                        {
                            $files = '';
                        }
                    }
                    else
                    {
                        $files = $this->input->post("old_resume"); 
                    }

                    $dob = $this->input->post("dob");
                    $newDob = date("Y-m-d", strtotime($dob));

                    $data = array(
                             'first_name' => $this->input->post("first_name"),
                             'last_name' => $this->input->post("last_name"),
                             'gender' => $this->input->post("gender"),
                             'role_id' => $this->input->post("roles"),
                             'email' => $this->input->post("email"),
                             'password' => md5($this->input->post("pass")),
                             'birth_date' => $newDob,
                             'father_name' => $this->input->post("father_name"),
                             'aadhar' => $this->input->post("Aadhar_no"),
                             'pan_number' => $this->input->post("pan_number"),
                             'account_name' => $this->input->post("account_name"),
                             'account_number' => $this->input->post("account_no"),
                             'ifsc_Code' => $this->input->post("ifsc_code"),
                             'bank_Name' => $this->input->post("bank_name"),
                             'highest_qualification' => $this->input->post("high_qual"),
                             'job_description' => $this->input->post("job_desc"),
                             'place_appointment' => $this->input->post("place_apnmt"),
                             'reporting_to' => $this->input->post("report_to"),
                             'dev_qualification' => $this->input->post("dev_qual"),
                             'Job_title' => $this->input->post("job_title"),
                             'account_type' => $this->input->post("account_type"),
                             'department' => $this->input->post("department"),
                             'disc_profile' => $filename,
                             'resume' => $files,
                             'updated_on' => date('Y-m-d H:i:s') 
                            );


                    $result = $this->User_model->update_employee($data,$employee_id);    

                    if($result)
                    {
                          $this->session->set_flashdata('success', 'Updated Successfully!'); 
                          redirect('employees');
                    }
                    else
                    {
                         $this->session->set_flashdata('error', 'Updated Failed!'); 
                        redirect('EmployeeEdit');
                    }   
                }
            }

        }
        else
        {
            $this->session->set_flashdata('error','Something went wrong.Try again.');
            redirect('employees'); 
        }      
    }

    public function file_download()
    {
        if(isset($_GET['employee_id']) && !empty($_GET['employee_id']))
        {
              $id = base64_decode($_GET['employee_id']);
              //load download helper
              $this->load->helper('download');
              $resume = $this->User_model->get_resume($id);
              //file path
              $file = base_url('uploads/users/'.$resume['resume']); 
              $data = file_get_contents($file);
              //download file from directory
              force_download($resume['resume'],$data); 
        }
    } 

    
}