<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administration extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administration_model');
        //$this->load->library('upload');
    }
    

    public function department_list()
    {     
        $this->form_validation->set_rules('practicearea','practice area','required|trim');
        if ($this->form_validation->run() == FALSE) 
        {
            $data['file']              = 'admin/administration/department_list.php';
            $data['prat_area_data']    =  $this->practice_area->get_practicearea();
            $data['table_js']          = 'admin/cutom_common_js/admin_tables_js.php';
            $data['custom_js']         = 'practice_area/practice_area/custom_js/pract_area_js.php';
            /*This is admin front end validation*/ 
            $data['validation_js']     = 'admin/cutom_common_js/admin_validation_js';
             /*load admin templeate.send all data this admin templeate*/
            $this->load->view('admin_template/main', $data);
        } 
        else 
        {
            if (isset($_POST['prtarea_submit']) && !empty($_POST['prtarea_submit'])) 
            {
                if(check_premissions($role_id,"practice_area_add"))
                { 
                    $data   = array(
                        'name' => $this->input->post("practicearea"),
                        'created_on' => date('Y-m-d H:i:s'),
                        'user_id' => $user_id,
                        'status' => 1
                    );
                    $result = $this->practice_area->patarea_save($data);
                    if ($result) 
                    {
                        $this->session->set_flashdata('success', 'Practice area add successfully!');
                        redirect('practice_area/practice_area');
                    } 
                    else 
                    {
                        $this->session->set_flashdata('error', 'Practice area add failed!');
                        redirect('practice_area/practice_area');
                    }
                }
                else
                {
                    $this->session->set_flashdata('error', 'You dont have permission!'); 
                    redirect('practice_area/practice_area');
                } 

            }
            else
            {
                $this->session->set_flashdata('error', 'Practicearea update failed!');
                redirect('practice_area/practice_area');
            } 
            // else if (isset($_POST['patarea_update']) && !empty($_POST['patarea_update']))
            // {
            //     if (check_premissions($role_id,"practice_area_edit"))
            //     {   
            //         $pratarea_id = $_POST['pratarea_id'];
            //         $data        = array(
            //         'name' => $this->input->post("practicearea"),
            //         'updated_on' => date('Y-m-d H:i:s')
            //         );
            //         $result      = $this->practice_area->preatarea_update($data, $pratarea_id);
            //         if ($result) 
            //         {
            //             $this->session->set_flashdata('success', 'Practice area update successfully!');
            //              redirect('practice_area/practice_area');
            //         } 
            //         else 
            //         {
            //             $this->session->set_flashdata('error', 'Practice area update failed!');
            //              redirect('practice_area/practice_area');
            //         }   
            //     }
            //     else
            //     {
            //         $this->session->set_flashdata('error', 'You dont have permission!'); 
            //          redirect('practice_area/practice_area');
            //     } 

            // }
            // else
            // {
            //      $this->session->set_flashdata('error', 'Practicearea update failed!');
            //      redirect('practice_area/practice_area');
            // }
            
        }
        
} 

   
}