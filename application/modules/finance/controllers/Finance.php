<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Finance extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        //$this->load->model('Service_model');
        $this->load->library('upload');
    }

    public function index()
    {
        //$data['service_list'] =  $this->Service_model->getall_service();
        $data['file'] = 'finance/finance/finance_list';
        $data['table_js']        = 'admin/all_common_js/admin_tables_js.php';
        $this->load->view('admin_template/main',$data);     
    }

    public function department_add()
    {   
     
        $this->form_validation->set_rules('service_name','service','required|trim|is_unique[services.name]|strtolower');
        if ($this->form_validation->run() == FALSE)
        { 
              $data['file']        = 'services/service/add_service';
              $data['custom_js']   = 'services/service/js/service_js';
              $data['validation_js'] = 'admin/all_common_js/frontend_validation_js';
              $this->load->view('admin_template/main',$data);
        }
        else
        {
            if(isset($_POST['add_service']) && !empty($_POST['add_service']))
            {               
                if (!empty($_FILES['service_image']['name'])) 
                {
                    /*create img required details size,path*/
                    $img_data = array(
                        'img_name' => 'service_image',
                        'img_path' => './uploads/services',
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
                        $filename = $filename;
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

                $data = array(
                         'name' => $this->input->post("service_name"),
                         'description' => $this->input->post("service_desc"),
                         'image' => $filename,       
                         'status'  => 1,
                         'created_on' => date('Y-m-d H:i:s') 
                );

                $result = $this->Service_model->save_service($data);    

                if($result)
                {
                    $this->session->set_flashdata('success', 'Add service successfully.'); 
                    redirect('service');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Add service failed.Please try again.'); 
                    redirect('add_service');
                }           
            }
        }
    }

    public function view_service() 
    {      
       
        if (isset($_GET['idservice']) && !empty($_GET['idservice'])) 
        {
            $serviceid              = base64_decode($_GET['idservice']);
            $data['service_view']     = $this->Service_model->service_view($serviceid);
            $data['file']           = 'services/service/service_view';
             /*load admin templeate.send all data this admin templeate*/
            $this->load->view('admin_template/main', $data);
        }
        else
        {
            
            $this->session->set_flashdata('error', 'Data not showing.');
            redirect('service'); 
        }
           
    }  

    public function service_edit() 
    { 
        if (isset($_GET['idservice']) && !empty($_GET['idservice'])) 
        {
            $service_id                    = base64_decode($_GET['idservice']);
              
            $data['services_edit'] = $this->Service_model->edit_service($service_id);
            $this->form_validation->set_rules('service_name','service','required|trim|strtolower');
            if ($this->form_validation->run() == FALSE) 
            {
                $data['file']           = 'services/service/service_edit';
                $data['custom_js']      = 'services/service/js/service_js';
                /*event front end  validations*/
                $data['validation_js']       = 'admin/all_common_js/frontend_validation_js';
                /*load admin templeate.send all data this admin templeate*/
                $this->load->view('admin_template/main', $data);
            } 
            else 
            {
                if (!empty($_POST['update_service']) && isset($_POST['update_service'])) 
                {
                    if (!empty($_FILES['service_image']['name'])) 
                    {
                        /*create img required details size,path*/
                        $img_data = array(
                            'img_name' => 'service_image',
                            'img_path' => './uploads/services',
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
                            $filename = $filename;
                        }   
                    }
                    else 
                    {
                        $filename = $this->input->post("old_image");
                    }

                    $data = array(
                             'name' => $this->input->post("service_name"),
                             'description' => $this->input->post("service_desc"),
                             'image' => $filename,
                             'updated_on' => date('Y-m-d H:i:s') 
                    );

                    $result = $this->Service_model->update_services($data,$service_id );

                    if ($result) 
                    {
                        $this->session->set_flashdata('success','Updated Successfully!');
                        redirect('service'); 
                    } 
                    else 
                    {
                        $this->session->set_flashdata('error', 'updated failed. please try again!');
                        redirect('service_edit?idservice='.base64_encode($service_id)); 
                    }
                    
                }
                else
                {
                    $this->session->set_flashdata('error', 'updated failed. please try again!');
                    redirect('service_edit?idservice='.base64_encode($service_id));  
                }
            }
            
        }
        else
        {
           $this->session->set_flashdata('error', 'updated failed. please try again!');
           redirect('service_edit?idservice='.base64_encode($service_id)); 
        }
    }

    public function delete_service() /*admin user delete*/ 
    { 
        
        if (isset($_GET['idservice']) && !empty($_GET['idservice'])) 
        {
            $service_id     = base64_decode($_GET['idservice']);
            $result = $this->Service_model->service_delete($service_id);
            if ($result) 
            {
                $this->session->set_flashdata('success', 'Delete Successfully!');
                redirect('service'); 
            } 
            else 
            {
                $this->session->set_flashdata('error', 'Delete failed!');
                redirect('service'); 
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Delete failed!');
            redirect('service'); 
        }
           
    }


}