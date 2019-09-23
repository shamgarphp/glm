<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vbs extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Vbs_model');
        $this->load->library('upload');
    }

   public function staff_list_location()
   {
        $program_data  = '';
        if (isset($_POST['staff_search']) && !empty($_POST['staff_search'])) 
        {
             $program_data  = array(
                 'Location' => $this->input->post('staff_location'),                   
             );  
        }


       $programid =  '';
       $data['staff_locations'] = $this->Vbs_model->getall_location();
       $data['staff_list'] = $this->Vbs_model->getall_staff($programid,$program_data);
       $data['file'] = 'vbs/vbs/staff_location/staff_location_list';
       $data['custom_js']   = 'vbs/vbs/js/vbs_js';
       $data['table_js']    = 'vbs/vbs/js/table_js';
       $this->load->view('admin_template/main',$data);     
   }


   public function location_staff_view()
   {
        $program_data = '';
        if (isset($_GET['programid']) && !empty($_GET['programid'])) 
        {
            $program_id        = base64_decode($_GET['programid']);
            $data['program_staff'] =  $this->Vbs_model->getall_staff($program_id,$program_data);
            $data['resource_staff'] = $this->Vbs_model->getall_resourcestaff($program_id);
            $data['teaching_staff'] = $this->Vbs_model->getall_teachingstaff($program_id); 
            $data['file'] = 'vbs/vbs/staff_location/program_staff_view';    
            $this->load->view('admin_template/main',$data); 
        }
        else
        {
            $this->session->set_flashdata('error','Something went wrong.Try again.');
            redirect('allocate_fund_material'); 
        }      
    } 
 
   public function location_staff_delete()
   {
        if (isset($_GET['programid']) && !empty($_GET['programid'])) 
        {
            $program_id        = base64_decode($_GET['programid']);

            $result  = $this->Vbs_model->delete_program_staff($program_id);
            if($result)
            {
              $this->session->set_flashdata('success','Delete Successfully.');
              redirect('location_staff'); 
            }
            else
            {
              $this->session->set_flashdata('error','Error Delete failed.');
              redirect('location_staff'); 
            } 
            
        }
        else
        {
            $this->session->set_flashdata('error','Something went wrong.Try again.');
            redirect('location_staff'); 
        }      
    } 
 

    public function add_user()
    {   
        $this->form_validation->set_rules('location','location','required|trim');
        if ($this->form_validation->run() == FALSE)
        {
           $data['file']        = 'vbs/vbs/staff_location/add_user';
           $data['location_list'] = $this->Vbs_model->getall_location();
           $data['employee_list'] =  $this->Vbs_model->getall_employees();  
           $data['custom_js']   = 'vbs/vbs/js/vbs_js';
           $this->load->view('admin_template/main',$data);
        }
        else
        {
           if(isset($_POST['add_staff']) && !empty($_POST['add_staff']))
           {                     
                 $location             = '';
                 $program_admin        = '';
                 $finance_admin        = '';
                 $report_admin         = '';
                 $sec_report_admin_new = '';
                 $photography          = '';

               if (isset($_POST['location']) && !empty($_POST['location']))
               {
                  $location = $this->input->post("location");//print_r($location);exit;
               }
               else if(isset($_POST['new_location']) && !empty($_POST['new_location']))
               {
                  $location_new = array('area' => $this->input->post("new_location"));
                  $location = $this->Vbs_model->location_post($location_new); 
               }
                    
               if (isset($_POST['prog_admin']) && !empty($_POST['prog_admin']))
               {
                  $program_admin = $this->input->post("prog_admin");
               }
               else if(isset($_POST['prog_admin_new']) && !empty($_POST['prog_admin_new']))
               {
                  $program_admin_new = array(
                   'first_name' => $this->input->post("prog_admin_new"),
                   'phone' => $this->input->post("prog_admin_phone"),
                   'description' => $this->input->post("prog_admin_description")
                    );
                  $program_admin = $this->Vbs_model->add_new_person($program_admin_new);
                  
               }

               if (isset($_POST['finan_admin']) && !empty($_POST['finan_admin']))
               {
                  $finance_admin = $this->input->post("finan_admin");
               }
               else if(isset($_POST['fina_admin_new']) && !empty($_POST['fina_admin_new']))
               {
                  $finance_admin_new = array(
                   'first_name' => $this->input->post("fina_admin_new"),
                   'phone' => $this->input->post("finance_admin_phone"),
                   'description' => $this->input->post("finance_admin_descript")
                   );
                  $finance_admin = $this->Vbs_model->add_new_person($finance_admin_new);
               }

               if (isset($_POST['reprt_stf']) && !empty($_POST['reprt_stf']))
               {
                  $report_admin = $this->input->post("reprt_stf");
               }
               else if(isset($_POST['reprt_stf_new']) && !empty($_POST['reprt_stf_new']))
               {
                  $report_admin_new = array(
                   'first_name' => $this->input->post("reprt_stf_new"),
                   'phone' => $this->input->post("report_admin_phone"),
                   'description' => $this->input->post("report_admin_descript")
                   );
                  $report_admin = $this->Vbs_model->add_new_person($report_admin_new);
               }

               if (isset($_POST['second_reprt_stf']) && !empty($_POST['second_reprt_stf']))
               {
                  $second_report_admin = $this->input->post("second_reprt_stf");
               }
               else if(isset($_POST['sec_reprt_stf_new']) && !empty($_POST['sec_reprt_stf_new']))
               {
                  $sec_report_admin_new = array(
                   'first_name' => $this->input->post("sec_reprt_stf_new"),
                   'phone' => $this->input->post("report_second_phone"),
                   'description' => $this->input->post("report_second_descript")
                 );
                  $second_report_admin = $this->Vbs_model->add_new_person($sec_report_admin_new);   
               }

               if (isset($_POST['photography']) && !empty($_POST['photography']))
               {
                  $photography = $this->input->post("photography");
               }
               else if(isset($_POST['photography_new']) && !empty($_POST['photography_new']))
               {
                  $photography_new = array(
                   'first_name' => $this->input->post("photography_new"),
                   'phone' => $this->input->post("photography_phone"),
                   'description' => $this->input->post("photography_descript")
                 );
                  $photography = $this->Vbs_model->add_new_person($photography_new);
               }

               $data = array(
                        'location_id' => $location,
                        'program_admin' => $program_admin,
                        'finance_admin' => $finance_admin,
                        'report_staff1' => $report_admin,
                        'report_staff2' => $second_report_admin,
                        'photography' => $photography,
                        'status'  => 1,
                        'created_on' => date('Y-m-d H:i:s') 
                       );

               $result_id = $this->Vbs_model->all_program_staff($data);

               if ($result_id)
               {
                    $prog_staff_id = $result_id;
                    $resource = $this->input->post('resource');
                    $resource_new = $this->input->post('resource_new');
                    $resource_new_phone = $this->input->post("resource_phone"); 
                    $resource_new_descript = $this->input->post("resource_descript"); 
                    $res_count = count($resource);
                    if (isset($_POST['resource']) || isset($_POST['resource_new']))
                    {
                          $prog_staff_id = $result_id;
                          $resource = $this->input->post('resource');

                          for ($i=0; $i<$res_count; $i++)
                          {
                               if (isset($_POST['resource'][$i]) && !empty($_POST['resource'][$i]))
                               {
                                    $res_data = array(
                                      'program_staff_id' => $prog_staff_id, 
                                      'resource' => $resource[$i]
                                      ); 
                                    $result = $this->Vbs_model->resource_staff($res_data);   
                               }

                               else if(isset($_POST['resource_new'][$i]) && !empty($_POST['resource_new'][$i]))
                               {
                                    $resou_data = array(
                                      'first_name' => $resource_new[$i],
                                      'phone' => $resource_new_phone[$i],
                                      'description' => $resource_new_descript[$i]

                                     );
                                   $result_new = $this->Vbs_model->add_new_person($resou_data);
                                   if ($result_new)
                                   {
                                        $user_id = $result_new;
                                       $res_data = array(
                                       'program_staff_id' => $prog_staff_id, 
                                       'resource' => $user_id
                                       ); 
                                       $result = $this->Vbs_model->resource_staff($res_data);
                                   }                                   

                               }
                            
                           }
  
                   }
                  $prog_staff_id = $result_id;
                  $teaching = $this->input->post('teaching');
                  $teaching_new = $this->input->post('teach_new');
                  $resource_teach_phone = $this->input->post("teach_phone"); 
                  $resource_teach_descript = $this->input->post("teach_descript");
                  $teach_count = count($teaching);

                  if (isset($_POST['teaching']) || isset($_POST['teach_new']))
                  {
                         $prog_staff_id = $result_id;
                         $teaching = $this->input->post('teaching');

                        for ($i=0; $i<$teach_count; $i++)
                        {
                            if (isset($_POST['teaching'][$i]) && !empty($_POST['teaching'][$i]))
                            {
                                  $teach_data = array(
                                    'program_staff_id' => $prog_staff_id, 
                                    'teaching' => $teaching[$i]
                                    ); 
                                  $result = $this->Vbs_model->teaching_staff($teach_data);
                            }

                            else if(isset($_POST['teach_new'][$i]) && !empty($_POST['teach_new'][$i]))
                            {

                                  $teach_new_data = array(
                                     'first_name' => $teaching_new[$i],
                                     'phone' => $resource_teach_phone[$i],
                                     'description' => $resource_teach_descript[$i]
                                   );
                                 $result_teach = $this->Vbs_model->add_new_person($teach_new_data);
                                 if ($result_teach)
                                 {
                                       $user_id = $result_teach;
                                       $res_data = array(
                                       'program_staff_id' => $prog_staff_id, 
                                       'teaching' => $user_id
                                       ); 
                                       $result = $this->Vbs_model->teaching_staff($res_data);
                                 }
                            }
                          
                        }
                    }

                 $this->session->set_flashdata('success','Add Staff Successfully!');
                 redirect('location_staff');  

              }
              else
              {
                  $this->session->set_flashdata('error', 'Add Staff Failed!'); 
                    redirect('add_staff'); 
              }         
           }
       }
   }

    public function allocate_fund_materials()
    {
        $data['programs_list'] = $this->Vbs_model->get_all_programs();
        $data['file'] = 'vbs/vbs/allocate_fund_material/allocate_fund_material_list';
        $data['table_js']    = 'vbs/vbs/js/table_js';
        $data['custom_js']   = 'vbs/vbs/js/vbs_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function program_view()
    {
        if (isset($_GET['program_id']) && !empty($_GET['program_id'])) 
        {
            $program_id                = base64_decode($_GET['program_id']);

            $data['programs_time'] = $this->Vbs_model->program_timing($program_id);
            $data['programs_participent'] = $this->Vbs_model->participent_program($program_id);
            $data['program_finance'] = $this->Vbs_model->finance_program($program_id);
            $data['program_transport'] = $this->Vbs_model->transport_program($program_id);
            $data['file'] = 'vbs/vbs/allocate_fund_material/program_view';
            $this->load->view('admin_template/main',$data); 
        }
        else
        {
            $this->session->set_flashdata('error','Something went wrong.Try again.');
            redirect('allocate_fund_material'); 
        }      
    } 

    public function program_edit()
    {
        if (isset($_GET['program_id']) && !empty($_GET['program_id'])) 
        {
            $this->form_validation->set_rules('program_aim','program aim','required|trim');
            $this->form_validation->set_rules('location','location','required|trim');
            // $this->form_validation->set_rules('location','location','required|is_unique[programs.location_id]', array('is_unique' => 'This %s already exists.')); 
           
            // $this->form_validation->set_rules('from_time[]','from time','required|trim');
            // $this->form_validation->set_rules('to_time[]','to time','required|trim');
            // $this->form_validation->set_rules('date[]','program date','required|trim');
            // $this->form_validation->set_rules('participent_name[]','participent name','required|trim');
            // $this->form_validation->set_rules('Participant_Type[]','location','required|trim');
            // $this->form_validation->set_rules('paricipant_Phone[]','location','required|trim');
            // $this->form_validation->set_rules('men[]','location','required|trim');
            // $this->form_validation->set_rules('Women[]','location','required|trim');
            // $this->form_validation->set_rules('Child[]','location','required|trim');
            // $this->form_validation->set_rules('Description[]','location','required|trim');
            // $this->form_validation->set_rules('participent_date[]','location','required|trim');
            // $this->form_validation->set_rules('Finance_Category[]','location','required|trim');
            // $this->form_validation->set_rules('Vendor_Name[]','location','required|trim');
            // $this->form_validation->set_rules('Location_vendor[]','location','required|trim');
            // $this->form_validation->set_rules('Vendor_phone[]','location','required|trim');
            // $this->form_validation->set_rules('Total_Amount[]','location','required|trim');
            // $this->form_validation->set_rules('Payment_Type[]','location','required|trim');
            // $this->form_validation->set_rules('Bank[]','location','required|trim');
            // $this->form_validation->set_rules('bank_account_num[]','location','required|trim');
            // $this->form_validation->set_rules('bank_ifsc_code[]','location','required|trim');
            // $this->form_validation->set_rules('user_account[]','location','required|trim');
            // $this->form_validation->set_rules('Account_No[]','location','required|trim');
            // $this->form_validation->set_rules('bank_ifsc_code[]','location','required|trim');
            // $this->form_validation->set_rules('Vechile[]','location','required|trim');
            if ($this->form_validation->run() == FALSE)
            { 
                $program_id                = base64_decode($_GET['program_id']);
                $data['programs'] = $this->Vbs_model->program($program_id);
                $data['partcipant_types'] = $this->Vbs_model->partcipant_types();
                $data['bank_list'] = $this->Vbs_model->bank_names();
                $data['location_list'] = $this->Vbs_model->getall_location();
                $data['programs_time'] = $this->Vbs_model->program_timing($program_id);
                $data['programs_participent'] = $this->Vbs_model->participent_program($program_id);
                $data['program_finance'] = $this->Vbs_model->finance_program($program_id);
                $data['program_transport'] = $this->Vbs_model->transport_program($program_id);
                $data['file'] = 'vbs/vbs/allocate_fund_material/program_edit';
                $data['custom_js']   = 'vbs/vbs/js/program_js';
                $this->load->view('admin_template/main',$data);
            }
            else
            {
               if(isset($_POST['program_update']) && !empty($_POST['program_update']))
               {
                      $id_program = $this->input->post('program_id'); 
                      $data_program  = array(
                              'program_aim' => $this->input->post('program_aim'),  
                              'location_id' => $this->input->post('location'),  
                              'updated_on' => date('Y-m-d H:i:s'),
                      );

                      $result_program = $this->Vbs_model->program_update($data_program,$id_program);

                      if($result_program)
                      {  
                          if(isset($_POST['date'][0]) && !empty($_POST['date'][0]))
                          {
                              for($count = 0; $count < count($_POST['date']); $count++)
                              {    
                                  $program_time_id = $_POST["program_time_id"][$count];
                                  $change_date =date("Y-m-d",strtotime($_POST['date'][$count]));
                                  $data_times  = array(
                                  'date' =>  $change_date, 
                                  'from_time' =>$_POST["from_time"][$count],  
                                  'to_time' =>$_POST["to_time"][$count],  
                                  ); 

                                  $time_result = $this->Vbs_model->program_time_update($data_times,$id_program,$program_time_id);
                              }  

                          }

     
                        if(isset($_POST["participent_date"][0]) && !empty($_POST["participent_date"][0]))
                        { 
                              for($count = 0; $count < count($_POST["participent_date"]); $count++)
                              {    
                                  $partcipant_id = $_POST["participant_id"][$count];
                                  $chang_date = date("Y-m-d", strtotime($_POST["participent_date"][$count]));

                                  $data_partcipant  = array(
                                      'date' =>  $chang_date, 
                                      'participant_type' =>$_POST["Participant_Type"][$count],  
                                      'participant_name' =>$_POST["participent_name"][$count],  
                                      'phone' =>$_POST["paricipant_Phone"][$count],  
                                      'men' =>$_POST["men"][$count],  
                                      'women' =>$_POST["Women"][$count],  
                                      'child' =>$_POST["Child"][$count],  
                                      'description' =>$_POST["Description"][$count],  
                                  ); 

                                  $this->Vbs_model->participant_update($data_partcipant,$id_program,$partcipant_id); 
                              } 
                        } 

                       
                        if(isset($_POST["Vendor_Name"][0]) && !empty($_POST["Vendor_Name"][0]))
                        {
                              for($count = 0; $count < count($_POST["Vendor_Name"]); $count++)
                              {    
                                  $finance_id = $_POST["finance_id"][$count];
                                  $vendor_id = $_POST["vendor_id"][$count];

                                  //$img_url = base_url('uploads/programs/'.$filename);      
                                  $data_vendor  = array(
                                  'vendor_name' =>$_POST["Vendor_Name"][$count],  
                                  'location' =>$_POST["Location_vendor"][$count],  
                                  'phone' =>$_POST["Vendor_phone"][$count],  
                                  'total_amount' =>$_POST["Total_Amount"][$count],  
                                  'bank_id' =>$_POST["Bank"][$count],  
                                  'payment_type' =>$_POST["Payment_Type"][$count],  
                                  'bank_acno' =>$_POST["bank_account_num"][$count],  
                                  'bank_ifsc_code' =>$_POST["bank_ifsc_code"][$count],   
                                  //'quation_image' =>$img_url,   
                                  'expenditure_desc' =>$_POST["exp_Description"][$count],  
                                  'account_name' =>$_POST["user_account"][$count],  
                                  'finance_category' =>$_POST["Finance_Category"][$count],  
                                  ); 

                                  $this->Vbs_model->vendor_update($data_vendor,$finance_id,$vendor_id);
                              } 
                        } 

                        if(isset($_POST["vechile_name"][0]) && !empty($_POST["vechile_name"][0]))
                        {
                            for($count = 0; $count < count($_POST["vechile_name"]); $count++)
                            {        
                                $transport_id = $_POST["transport_id"][$count];
                                $data_transport  = array(
                                'vechile_name' =>$_POST["vechile_name"][$count],  
                                'register_no' =>$_POST["register_no"][$count],  
                                'driver_name' =>$_POST["driver_name"][$count],  
                                'licence_id' =>$_POST["licence_id"][$count],  
                                'vechicle_capacity' =>$_POST["vechicle_capacity"][$count],  
                                'from_location' =>$_POST["From_Location"][$count],  
                                'to_locatdion' =>$_POST["To_Location"][$count],  
                                'google_distance' =>$_POST["Google_Distance"][$count],   
                                'manual_distance' =>$_POST["Manual_distance"][$count],  
                                ); 

                                $transport_result = $this->Vbs_model->transport_update($data_transport,$id_program,$transport_id);
                            } 
                        }      
                
                        
                        $this->session->set_flashdata('success','Update Successfully.');
                         redirect('allocate_fund_material');        
                    }
                    else
                    {
                       $this->session->set_flashdata('success','Update Failed.Try again.');
                       redirect('allocate_fund_material');
                    }
                }
                else
                {
                     $this->session->set_flashdata('success','Update Failed.Try again.');
                      redirect('allocate_fund_material');  
                }    
                   
            }     
        }
        else
        {
            $this->session->set_flashdata('error','Something went wrong.Try again.');
            redirect('allocate_fund_material'); 
        }      
    } 

    public function program_delete()
    {
         if (isset($_GET['program_id']) && !empty($_GET['program_id'])) 
         {
             $program_id                = base64_decode($_GET['program_id']);
             $result = $this->Vbs_model->program_delete($program_id);
              if($result)
              {
                $this->session->set_flashdata('success','Delete Successfully.');
                redirect('allocate_fund_material'); 
              }
              else
              {
                $this->session->set_flashdata('error','Error Delete failed.');
                redirect('allocate_fund_material'); 
              } 
         }
         else
         {
             $this->session->set_flashdata('error','Delete failed. Try again.');
             redirect('allocate_fund_material'); 
         }
    }


    public function status_program() 
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) 
        {
            $program_status   = $_POST['program_status'];
            $program_id       = $_POST['id'];
            $status       = ($program_status == 1)?0:1;
            $program_data     = array('status' => $program_status,'updated_on' => date('Y-m-d H:i:s'));
            $updateStatus = $this->Vbs_model->program_status($program_data,$program_id);
            if ($updateStatus)
            {
              echo $status;  
            }
            else
            {
              return FALSE; 
            }
        }
        else
        {
            return FALSE;
        }
       
    }

    public function permission_program() 
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) 
        {
            $program_status   = $_POST['program_status'];
            $program_id       = $_POST['id'];
            $status       = ($program_status == 1)?0:1;
            $program_data     = array('approved_rejected' => $program_status,'updated_on' => date('Y-m-d H:i:s'));
            $updateStatus = $this->Vbs_model->program_permission($program_data,$program_id);
            if ($updateStatus)
            {
              echo $status;  
            }
            else
            {
              return FALSE; 
            }
        }
        else
        {
            return FALSE;
        }
       
    }

    public function day_wise_program_report()
    {       
        $program_data  = '';
        if (isset($_POST['program_search']) && !empty($_POST['program_search'])) 
        {
             $fromdate = '';
             if(isset($_POST['from_date']) && !empty($_POST['from_date']))
             {
                $fromdate = date("Y-m-d",strtotime($_POST['from_date']));
             }
             $todate = '';
             if(isset($_POST['to_date']) && !empty($_POST['to_date']))
             {
                $todate = date("Y-m-d",strtotime($_POST['to_date']));
             }
             $program_data  = array(
                 'Location' => $this->input->post('staff_location'),              
                 'from_date' => $fromdate,              
                 'to_date' => $todate, 
             );     
        }

        $data['daywise_reports'] = $this->Vbs_model->day_wise_reports($program_data);
        $data['locations_list'] = $this->Vbs_model->getall_location();
        $data['file'] = 'vbs/vbs/reports/day_wise_report';
        $data['custom_js']   = 'vbs/vbs/js/program_js';
        $data['table_js']    = 'vbs/vbs/js/table_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function day_wise_program_view()
    {
       if (isset($_GET['daywise_report_id']) && !empty($_GET['daywise_report_id'])) 
       {
          $daywise_report_id                = base64_decode($_GET['daywise_report_id']);
          $data['daywise_report_view'] = $this->Vbs_model->day_wise_program_view($daywise_report_id);
          $data['file'] = 'vbs/vbs/reports/day_wise_report_view';
          $this->load->view('admin_template/main',$data); 
       }
       else
       {
           $this->session->set_flashdata('error','Something went wrong. Try again.');
           redirect('day_wise_report'); 
       }      
    } 


    public function day_wise_program_edit()
    {
       if (isset($_GET['daywise_report_id']) && !empty($_GET['daywise_report_id'])) 
       {
          $this->form_validation->set_rules('program_aim','program aim','required|trim');
          $this->form_validation->set_rules('location','location','required|trim'); 
          if ($this->form_validation->run() == FALSE)
          { 
              $daywise_report_id                = base64_decode($_GET['daywise_report_id']);
              $data['daywise_report_edit'] = $this->Vbs_model->edit_day_wise_program($daywise_report_id);
              $data['file'] = 'vbs/vbs/reports/day_wise_report_edit';
              $this->load->view('admin_template/main',$data);
          }
          else
          {
                if(isset($_POST['daywise_report']) && !empty($_POST['daywise_report']))
                {
                      $data_daywisereport  = array(
                              'program_aim' => $this->input->post('program_aim'),  
                              'location_id' => $this->input->post('location'),  
                              'updated_on' => date('Y-m-d H:i:s'),
                      );

                      $result_program = $this->Vbs_model->program_update($data_program,$id_program);

                      if($result_program)
                      {   
                        $this->session->set_flashdata('success','Update Successfully.');
                         redirect('allocate_fund_material');        
                      }
                      else
                      {
                         $this->session->set_flashdata('success','Update Failed.Try again.');
                         redirect('allocate_fund_material');
                      }
                }
                else
                {
                     $this->session->set_flashdata('success','Update Failed.Try again.');
                      redirect('allocate_fund_material');  
                }    
          }   
       }
       else
       {
           $this->session->set_flashdata('error','Edit failed. Try again.');
           redirect('day_wise_report'); 
       }      
    } 

    public function day_wise_program_report_delete()
    {
         if (isset($_GET['daywise_report_id']) && !empty($_GET['daywise_report_id'])) 
         {
             $daywise_report_id                = base64_decode($_GET['daywise_report_id']);
             $result = $this->Vbs_model->day_wise_program_delete($daywise_report_id);
              if($result)
              {
                $this->session->set_flashdata('success','Delete Successfully.');
                redirect('day_wise_report'); 
              }
              else
              {
                $this->session->set_flashdata('error','Error Delete failed.');
                redirect('day_wise_report'); 
              } 
         }
         else
         {
             $this->session->set_flashdata('error','Something went wrong. Try again.');
             redirect('day_wise_report'); 
         }
    }

    public function finance_report()
    {   
        $program_data  = '';
        if (isset($_POST['finance_search']) && !empty($_POST['finance_search'])) 
        {
             $fromdate = '';
             if(isset($_POST['from_date']) && !empty($_POST['from_date']))
             {
                $fromdate = date("Y-m-d",strtotime($_POST['from_date']));
             }
             $todate = '';
             if(isset($_POST['to_date']) && !empty($_POST['to_date']))
             {
                $todate = date("Y-m-d",strtotime($_POST['to_date']));
             }
             $program_data  = array(
                 'Location' => $this->input->post('staff_location'),              
                 'from_date' => $fromdate,              
                 'to_date' => $todate, 
             );   
        }

        $data['finance_reports'] = $this->Vbs_model->finance_report($program_data);
        $data['file'] = 'vbs/vbs/reports/finance_report';
        $data['locations_list'] = $this->Vbs_model->getall_location();
        $data['custom_js']   = 'vbs/vbs/js/program_js';
        $data['table_js']    = 'vbs/vbs/js/table_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function finance_report_view()
    {
       if (isset($_GET['finance_report_id']) && !empty($_GET['finance_report_id'])) 
       {
          $finance_report_id                = base64_decode($_GET['finance_report_id']);
          $data['finance_report_view'] = $this->Vbs_model->finance_report_view($finance_report_id);
          $data['file'] = 'vbs/vbs/reports/finance_report_view';
          $this->load->view('admin_template/main',$data); 
       }
       else
       {
           $this->session->set_flashdata('error','Something went wrong. Try again.');
           redirect('program_reviews'); 
       }      
    } 

 
    public function finance_report_edit()
    {
        if (isset($_GET['financeid']) && !empty($_GET['financeid'])) 
        {
            $this->form_validation->set_rules('total_amount','actual amount','required|trim');
            $this->form_validation->set_rules('total_expenditure','total expenditure amount','required|trim'); 
            $this->form_validation->set_rules('location','location','required|trim'); 
            if ($this->form_validation->run() == FALSE)
            { 
                $financeid                   = base64_decode($_GET['financeid']);
                $data['locations_list']      = $this->Vbs_model->getall_location();
                $data['vendors_list']        = $this->Vbs_model->getall_vendors();
                $data['financereport_edit']  = $this->Vbs_model->edit_finance_report($financeid);
                $data['file'] = 'vbs/vbs/reports/finance_report_edit';
                $this->load->view('admin_template/main',$data);
            }
            else
            {
                if(isset($_POST['finance_report']) && !empty($_POST['finance_report']))
                {
                    $finance_reportid = $_POST['finance_report_id'];
                    $financedata  = array(
                          'act_amount' =>$_POST["total_amount"],  
                          'expenditure_amount' =>$_POST["total_expenditure"],  
                          'balance_amount' =>$_POST["balance_amount"],  
                          'vendor_id' => $this->input->post('vendor'), 
                          'location_id' => $this->input->post('location'),    
                          'updated_on' => date("Y-m-d"), 
                    );

                    $result_program = $this->Vbs_model->financereport_update($financedata,$finance_reportid);

                    if($result_program)
                    {   
                       $this->session->set_flashdata('success','Update Successfully.');
                       redirect('finance_report');        
                    }
                    else
                    {
                       $this->session->set_flashdata('success','Update Failed.Try again.');
                       redirect('FinanceReportEdit?financeid='.base64_encode($financeid));
                    }
                }
                else
                {
                     $this->session->set_flashdata('success','Update Failed.Try again.');
                     redirect('FinanceReportEdit?financeid='.base64_encode($financeid));  
                }    
            }   
       }
       else
       {
           $this->session->set_flashdata('error','Edit failed. Try again.');
           redirect('finance_report'); 
       }      
    } 



    public function finance_report_delete()
    {
         if (isset($_GET['finance_report_id']) && !empty($_GET['finance_report_id'])) 
         {
             $finance_report_id                = base64_decode($_GET['finance_report_id']);
             $result = $this->Vbs_model->delete_finance_report($finance_report_id);
              if($result)
              {
                $this->session->set_flashdata('success','Delete Successfully.');
                redirect('finance_report'); 
              }
              else
              {
                $this->session->set_flashdata('error','Error Delete failed.');
                redirect('finance_report'); 
              } 
         }
         else
         {
             $this->session->set_flashdata('error','Delete failed. Try again.');
             redirect('finance_report'); 
         }
    }


    public function program_review()
    {   
        $program_data  = '';
        if (isset($_POST['programreview_search']) && !empty($_POST['programreview_search'])) 
        {
             $fromdate = '';
             if(isset($_POST['from_date']) && !empty($_POST['from_date']))
             {
                $fromdate = date("Y-m-d",strtotime($_POST['from_date']));
             }

             $todate = '';
             if(isset($_POST['to_date']) && !empty($_POST['to_date']))
             {
                $todate = date("Y-m-d",strtotime($_POST['to_date']));
             }

             $program_data  = array(
                 'Location' => $this->input->post('staff_location'),              
                 'from_date' => $fromdate,              
                 'to_date' => $todate, 
             );    
        }

        $data['program_reviews'] = $this->Vbs_model->program_review_list($program_data);
        $data['file'] = 'vbs/vbs/reports/program_review';
        $data['locations_list'] = $this->Vbs_model->getall_location();
        $data['custom_js']   = 'vbs/vbs/js/program_js';
        $data['table_js']    = 'vbs/vbs/js/table_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function program_review_view()
    {
       if (isset($_GET['program_review_id']) && !empty($_GET['program_review_id'])) 
       {
          $program_review_id                = base64_decode($_GET['program_review_id']);
          $data['program_review_view'] = $this->Vbs_model->review_view($program_review_id);
          $data['file'] = 'vbs/vbs/reports/program_review_view';
          $this->load->view('admin_template/main',$data); 
       }
       else
       {
           $this->session->set_flashdata('error','Something went wrong. Try again.');
           redirect('program_reviews'); 
       }      
    }

    public function program_review_delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $program_review_id                = base64_decode($_GET['id']);
            $result = $this->Vbs_model->review_program_delete($program_review_id);
            if($result)
            {
                $this->session->set_flashdata('success','Delete Successfully.');
                redirect('program_reviews'); 
            }
            else
            {
                $this->session->set_flashdata('error','Delete failed. Try again.');
                redirect('program_reviews'); 
            } 
        }
        else
        {
           $this->session->set_flashdata('error','Delete failed. Try again.');
           redirect('program_reviews'); 
        }
    }

    public function program_photos()
    {   
        $program_data  = '';
        if (isset($_POST['photos_search']) && !empty($_POST['photos_search'])) 
        {
             $fromdate = '';
             if(isset($_POST['from_date']) && !empty($_POST['from_date']))
             {
                $fromdate = date("Y-m-d",strtotime($_POST['from_date']));
             }

             $todate = '';
             if(isset($_POST['to_date']) && !empty($_POST['to_date']))
             {
                $todate = date("Y-m-d",strtotime($_POST['to_date']));
             }
             
             $program_data  = array(
                 'Location' => $this->input->post('staff_location'),              
                 'from_date' => $fromdate,              
                 'to_date' => $todate, 
             );    
        }

        $data['program_photos'] = $this->Vbs_model->program_photos($program_data);
        $data['file'] = 'vbs/vbs/reports/program_phots';
        $data['custom_js']   = 'vbs/vbs/js/program_js';
        $data['locations_list'] = $this->Vbs_model->getall_location();
        $data['table_js']    = 'vbs/vbs/js/table_js';
        $this->load->view('admin_template/main',$data);     
    }

    public function program_photos_view()
    {
       if (isset($_GET['photo_id']) && !empty($_GET['photo_id'])) 
       {
          $program_photo_id                = base64_decode($_GET['photo_id']);
          $data['program_photo_view'] = $this->Vbs_model->photo_views($program_photo_id);
          $data['program_photo_images'] = explode(",",$data['program_photo_view']['image']);
          $data['file'] = 'vbs/vbs/reports/program_photo_view';
          $this->load->view('admin_template/main',$data); 
       }
       else
       {
           $this->session->set_flashdata('error','Something went wrong. Try again.');
           redirect('program_photos'); 
       }      
    }

    public function program_photos_delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $program_photo_id                = base64_decode($_GET['id']);
            $result = $this->Vbs_model->photos_program_delete($program_photo_id);
            if($result)
            {
                $this->session->set_flashdata('success','Delete Successfully.');
                redirect('program_photos'); 
            }
            else
            {
                $this->session->set_flashdata('error','Delete failed. Try again.');
                redirect('program_photos'); 
            } 
        }
        else
        {
           $this->session->set_flashdata('error','Delete failed. Try again.');
           redirect('program_photos'); 
        }
    }

    
}