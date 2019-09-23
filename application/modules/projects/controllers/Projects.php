<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projects extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        //$this->load->model('Events_model');
        $this->load->library('upload');
    }

    public function index()
    {
        //$data['event_list'] =  $this->Events_model->getall_events();
        $data['file'] = 'projects/projects/project_list';
        $data['table_js']    = 'admin/all_common_js/admin_tables_js.php';
        $this->load->view('admin_template/main',$data);
    }

    public function add_project()
    {   
       $this->form_validation->set_rules('event_name','Event name','required|trim|is_unique[events.event_name]|strtolower');
       if ($this->form_validation->run() == FALSE)
       {
          $data['file']        = 'projects/projects/add_project';
          $data['custom_js']   = 'projects/projects/js/project_js';
          $data['validation_js']       = 'admin/all_common_js/frontend_validation_js';
          $this->load->view('admin_template/main',$data);
       }
       else
       {
            if(isset($_POST['add_event']) && !empty($_POST['add_event']))
            {                               
                if (!empty($_FILES['event_image']['name'])) 
                {
                    /*create img required details size,path*/
                    $img_data = array(
                        'img_name' => 'event_image',
                        'img_path' => './uploads/events',
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
                         'event_name' => $this->input->post("event_name"),
                         'description' => $this->input->post("event_desc"),
                         'image' => $filename,
                         'status'  => 1,
                         'created_on' => date('Y-m-d H:i:s') 
                        );

                $result = $this->Events_model->save_event($data);    

                if($result)
                {
                      $this->session->set_flashdata('success', 'Add event successfully.'); 
                      redirect('event');
                }
                else
                {
                     $this->session->set_flashdata('error', 'Add event failed.'); 
                    redirect('add_event');
                }           
            }
       }
    }

    
    public function view_project() 
    {
        if (isset($_GET['id_event']) && !empty($_GET['id_event'])) 
        {
            $eventid                     = base64_decode($_GET['id_event']);
            $data['event_view']     = $this->Events_model->event_view($eventid);
            $data['file']           = 'events/events/event_view';
             /*load admin templeate.send all data this admin templeate*/
            $this->load->view('admin_template/main', $data);
        }
        else
        {
            $this->session->set_flashdata('error', 'Data not showing.');
            redirect('event'); 
        }
           
    }  


    public function edit_project() 
    { 
        if (isset($_GET['id_event']) && !empty($_GET['id_event'])) 
        {
            $eventid                     = base64_decode($_GET['id_event']);
            $data['events_edit']         = $this->Events_model->edit_event($eventid);
            $this->form_validation->set_rules('event_name','Event name','required|trim|strtolower');
            if ($this->form_validation->run() == FALSE) 
            {
                $data['file']           = 'events/events/event_edit';
                $data['custom_js']      = 'events/events/js/event_js';
                /*event front end  validations*/
                $data['validation_js']       = 'admin/all_common_js/frontend_validation_js';
                /*load admin templeate.send all data this admin templeate*/
                $this->load->view('admin_template/main', $data);
            } 
            else 
            {
                if (!empty($_POST['update_event']) && isset($_POST['update_event'])) 
                {
                    if (!empty($_FILES['event_image']['name'])) 
                    {
                        /*create img required details size,path*/
                        $img_data = array(
                            'img_name' => 'event_image',
                            'img_path' => './uploads/events',
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
                         'event_name' => $this->input->post("event_name"),
                         'description' => $this->input->post("event_desc"),
                         'image' => $filename,
                         'status'  => 1,
                         'updated_on' => date('Y-m-d H:i:s') 
                    );

                    $result = $this->Events_model->update_event($data,$eventid);

                    if ($result) 
                    {
                        $this->session->set_flashdata('success', 'Updated Successfully!');
                        redirect('event');
                    } 
                    else 
                    {
                        $this->session->set_flashdata('error', 'updated failed. please try again!');
                        redirect('event');
                    }
                    
                }
                else
                {
                    $this->session->set_flashdata('error', 'updated failed. please try again!');
                    redirect('event'); 
                }
            }
            
        }
        else
        {
           $this->session->set_flashdata('error', 'updated failed. please try again!');
           redirect('event');
        }
    }

    public function delete_event() /*admin user delete*/ 
    { 
        if (isset($_GET['id_event']) && !empty($_GET['id_event'])) 
        {
            $id_event     = base64_decode($_GET['id_event']);
            $result = $this->Events_model->event_delete($id_event); 
            if ($result) 
            {
                $this->session->set_flashdata('success', 'Delete Successfully!');
                redirect('event');
            } 
            else 
            {
                $this->session->set_flashdata('error', 'Delete failed!');
                redirect('event');
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Delete failed!');
            redirect('event');
        }
           
    }


}