<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Location extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Location_model');
    }

    public function index() 
    {  
        $this->form_validation->set_rules('location','location','required|trim|is_unique[locations.location]|strtolower');
        if ($this->form_validation->run() == FALSE) 
        {
            $data['location_list'] =  $this->Location_model->getall_location();
            $data['file']         = 'location/location/location_list';
            $data['custom_css']        = 'admin/custom_common_css/edit_popup.css';
            $data['custom_js']       = 'location/location/js/location_js';
            $data['table_js']    = 'admin/all_common_js/admin_tables_js.php';
            $this->load->view('admin_template/main',$data);
        } 
        else 
        {
            if (isset($_POST['add_location']) && !empty($_POST['add_location'])) 
            {
                $data = array(

                         'location' => $this->input->post("location"),
                         'status'  => 1,
                         'created_on' => date('Y-m-d H:i:s') 
                );  

                $result = $this->Location_model->save_location($data);
                if($result)
                {
                    $this->session->set_flashdata('success', 'Add location successfully.'); 
                    redirect('location');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Add location failed.Please try again.'); 
                    redirect('location');
                }   
            } 
            else if (isset($_POST['location_update']) && !empty($_POST['location_update']))
            { 
                $location_id = $this->input->post("location_id");
                $data = array(

                         'location' => $this->input->post("location"),
                         'updated_on' => date('Y-m-d H:i:s') 
                );  

                $result      = $this->Location_model->location_update($data,$location_id);
                if ($result) 
                {
                    $this->session->set_flashdata('success', 'Update location successfully.'); 
                     redirect('location');
                } 
                else 
                {
                    $this->session->set_flashdata('error', 'Update location failed.'); 
                     redirect('location');
                } 
            }
            else
            {
                 $this->session->set_flashdata('error', 'Update location failed.'); 
                  redirect('location');
            }  
        }
              
    }
    
    public function delete_location() /*admin user delete*/ 
    {   
        if (isset($_GET['locationid']) && !empty($_GET['locationid'])) 
        {
            $location_id     = base64_decode($_GET['locationid']);
            $result = $this->Location_model->location_delete($location_id);
            if ($result) 
            {
                $this->session->set_flashdata('success', 'Delete Successfully!');
                 redirect('location'); 
            } 
            else 
            {
                $this->session->set_flashdata('error', 'Delete failed!');
                 redirect('location'); 
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Delete failed!');
            redirect('location'); 
        }     
    }


}