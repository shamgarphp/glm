<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller; // add Shankar

class Program_application extends REST_Controller {

    public function __construct() 
    { 
        parent::__construct();    
        //load user model
        $this->load->model('Program_model');
        //$this->load->library('upload');
        $this->load->helper('string');   
    }

    public function login_post()
    { 
        $email = $this->input->post('email');
        $pass  = md5($this->input->post('password'));
        if (isset($email,$pass) && !empty($email) && !empty($pass)) 
        { 
            $result_user = $this->Program_model->user_login($email,$pass);
            if (isset($result_user['user_id']) && !empty($result_user['user_id']))
            {
                $user_data = array(
                'username' => ucfirst($result_user['first_name'].' '.$result_user['last_name']),
                'user_id' => $result_user['user_id'],
                'logged_in' => TRUE
                );
             
                $user_id       = $user_data['user_id'];
                if (!empty($user_id)) 
                {
                    $this->session->set_userdata($user_data);

                    $this->response([
                    'status' => TRUE,
                    'message' => 'login successfully.', 
                    'data' => $user_data
                    ], REST_Controller::HTTP_OK);
                } 
                else 
                { 
                    $error = array(
                            'status' => FALSE,
                            'message' => 'Enter Wrong email or password!' 
                        );
                       
                     $this->response($error,REST_Controller::HTTP_NOT_FOUND);
                }
            } 
            else 
            {
               $error = array(
                            'status' => FALSE,
                            'message' => 'Enter Wrong email or password!' 
                        );
                       
                     $this->response($error,REST_Controller::HTTP_BAD_REQUEST);

            }         
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'Enter Wrong email or password!' 
                        );
                       
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);    
        }
               
    }

    public function location_get() 
    {    
        $loactions = $this->Program_model->get_locations();

        if(!empty($loactions))
        {
            $location_data = array(
                            'status' => TRUE,
                            'message' => $loactions 
                        );

            $this->response($location_data, REST_Controller::HTTP_OK); 
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'No loactions were found.' 
                        );
                       
            $this->response($error,REST_Controller::HTTP_NOT_FOUND);
        }      
    }

    public function programs_get() 
    {    
        $programs_list = $this->Program_model->get_programs();

        if(!empty($programs_list))
        {
            $programs_data = array(
                            'status' => TRUE,
                            'message' => $programs_list 
                        );

            $this->response($programs_data, REST_Controller::HTTP_OK); 
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'No loactions were found.' 
                        );
                       
            $this->response($error,REST_Controller::HTTP_NOT_FOUND);
        }      
    }


    public function participants_get() 
    {    
        $partcipants = $this->Program_model->get_participants();

        if(!empty($partcipants))
        {
            $partcipants_data = array(
                            'status' => TRUE,
                            'message' => $partcipants 
                        );

            $this->response($partcipants_data, REST_Controller::HTTP_OK); 
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'No loactions were found.' 
                        );
                       
            $this->response($error,REST_Controller::HTTP_NOT_FOUND);
        }      
    }

    public function accountname_get() 
    {    
        $account_names = $this->Program_model->get_account_name();

        if(!empty($account_names))
        {
            $account_types = array(
                            'status' => TRUE,
                            'message' => $account_names 
                        );

            $this->response($account_types, REST_Controller::HTTP_OK); 
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'No account types were found.' 
                        );
                       
            $this->response($error,REST_Controller::HTTP_NOT_FOUND);
        }         
    }

    public function program_post() 
    {
        if(isset($_POST['program_aim']) && !empty($_POST['location']))
        {
                $created_by = '';
                if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
                {
                    $created_by = $this->session->userdata('user_id'); 
                }
  

                $this->form_validation->set_rules('location','location','required|is_unique[programs.location_id]', array('is_unique' => 'This %s already exists.'));       
                if ($this->form_validation->run() == FALSE) 
                {
                   $error = array(
                            'status' => FALSE,
                            'message' => 'This location already exists.' 
                        );
                           
                    $this->response($error,REST_Controller::HTTP_BAD_REQUEST);  
                }
                else
                {
                     // $program      = $this->input->post("program_name");
                     // $program_name_data = $this->Program_model->get_programs_names($program);
                     // $program_name = $program_name_data['program_name'];
                     // $program_id    = $program_name_data['program_name_id'];
                     // if($program == $program_name)
                     // {
                     //    $program_name_id  =  $program_id;
                     // }
                     // else
                     // {
                     //    $program_new = array(
                     //    'program_name' => $this->input->post("program_name"),
                     //    'created_on' => date('Y-m-d H:i:s')
                     //    );
                     //    $program_name_id  = $this->Program_model->new_program_save($program_new); 
                     // }

                    $data_program  = array(
                        'program_aim' => $this->input->post('program_aim'),  
                        //'program_name' => $program_name_id,  
                        'location_id' => $this->input->post('location'),  
                        'implemented_by' =>$created_by,  
                        'created_on' => date('Y-m-d H:i:s'),
                    );

                    $result_program = $this->Program_model->program_save($data_program);

                    if($result_program)
                    {  
                        $data_time = json_decode($_POST['program_times']); 
                        $array =  (array) $data_time;
                        if(isset($array['date'][0]) && !empty($array['date'][0]))
                        {
                            for($count = 0; $count < count($array['date']); $count++)
                            {    
                                $change_date =date("Y-m-d", strtotime($array['date'][$count]));
                                $data_times  = array(
                                'date' =>  $change_date, 
                                'from_time' =>$array["from_time"][$count],  
                                'to_time' =>$array["to_time"][$count],  
                                'program_id' =>$result_program, 
                                ); 

                                $time_result = $this->Program_model->time_save($data_times);
                            }  

                        }
                        
                        $partcipant = json_decode($_POST['partcipants']); 

                        $array_participant =  (array) $partcipant;

                        if(isset($array_participant["participant_date"][0]) && !empty($array_participant["participant_date"][0]))
                        { 
                           
                            for($count = 0; $count < count($array_participant["participant_date"]); $count++)
                            {    
                                $chang_date =date("Y-m-d", strtotime($array_participant["participant_date"][$count]));

                                $data_partcipant  = array(
                                    'date' =>  $chang_date, 
                                    'participant_type' =>$array_participant["participant_type"][$count],  
                                    'participant_name' =>$array_participant["participant_name"][$count],  
                                    'phone' =>$array_participant["phone"][$count],  
                                    'men' =>$array_participant["men"][$count],  
                                    'women' =>$array_participant["women"][$count],  
                                    'child' =>$array_participant["child"][$count],  
                                    'description' =>$array_participant["description"][$count],  
                                    'program_id' =>$result_program, 
                                ); 

                                $time_result = $this->Program_model->participant_save($data_partcipant);
                            } 

                        }  

                        $data = array(
                                    'status' => TRUE,
                                    'message' => 'Program add successfully.' 
                        );  

                        $this->response($data,REST_Controller::HTTP_OK);   
                    }
                    else
                    {
                       
                        $error = array(
                                'status' => FALSE,
                                'message' => 'Program add failed.' 
                            );
                               
                        $this->response($error,REST_Controller::HTTP_BAD_REQUEST); 
                    }

            } 
        }
        else
        {
            $error = array(
                        'status' => FALSE,
                        'message' => 'Program add failed.' 
                    );
                       
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);  
        }  
       
    }


    public function finance_post() 
    {
        $finance = json_decode($_POST['finance_list']); 
        $array_finance =  (array) $finance;

        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '';
            if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }


            $data_finance  = array(
                'program_id' => $this->input->post('program_id'),  
                'location_id' => $this->input->post('location_id'),  
                'implemented_by' => $created_by,  
                'status' => 1,   
                'created_on' => date('Y-m-d H:i:s'),
            );

            $result_finance = $this->Program_model->finance_save($data_finance);

            if($result_finance)
            {  
                if(isset($array_finance["vendor_name"][0]) && !empty($array_finance["vendor_name"][0]))
                {
                    for($count = 0; $count < count($array_finance["vendor_name"]); $count++)
                    {    
                        $filename  = random_string('alnum',8).'.jpg';
                        $img       = $array_finance['quation_image'][$count];
                        $upload_path = './uploads/programs/'.$filename;

                        file_put_contents($upload_path,base64_decode($img));
                         
                        $img_url = base_url('uploads/programs/'.$filename);      
                        $data_vendor  = array(
                        'vendor_name' =>$array_finance["vendor_name"][$count],  
                        'location' =>$array_finance["location"][$count],  
                        'phone' =>$array_finance["phone"][$count],  
                        'total_amount' =>$array_finance["total_amount"][$count],  
                        'bank_id' =>$array_finance["account_name"][$count],  
                        'payment_type' =>$array_finance["payment_type"][$count],  
                        'bank_acno' =>$array_finance["bank_acno"][$count],  
                        'bank_ifsc_code' =>$array_finance["bank_ifsc_code"][$count],   
                        'quation_image' =>$img_url,   
                        'expenditure_desc' =>$array_finance["expenditure_desc"][$count],  
                        'account_name' =>$array_finance["userAccountName"][$count],  
                        'finance_category' =>$array_finance["finance_category"][$count],  
                        'finance_id' =>$result_finance, 
                        ); 

                        $time_result = $this->Program_model->vendor_save($data_vendor);
                    } 

                    $data = array(
                            'status' => TRUE,
                                'message' => 'Finance add successfully.' 
                    );  

                    $this->response($data,REST_Controller::HTTP_OK); 

                }      
            
            }
            else
            {
                $error = array(
                            'status' => FALSE,
                            'message' => 'Finance add failed.' 
                        );
                           
                $this->response($error,REST_Controller::HTTP_BAD_REQUEST);  
            } 
        }
        else
        {
              $error = array(
                            'status' => FALSE,
                            'message' => 'Finance add failed.' 
                        );
                           
                $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }  
       
    }


    // public function transport_post() 
    // {
    //     $transport = json_decode($_POST['transport_list']); 
    //     $array_transport =  (array) $transport;

    //     if(isset($_POST['program_id']) && !empty($_POST['program_id']))
    //     {
    //         if(isset($array_transport["vechile_name"][0]) && !empty($array_transport["vechile_name"][0]))
    //         {
    //             for($count = 0; $count < count($array_transport["vechile_name"]); $count++)
    //             {        
    //                 $data_transport  = array(
    //                 'vechile_name' =>$array_finance["vechile_name"][$count],  
    //                 'register_no' =>$array_finance["register_no"][$count],  
    //                 'driver_name' =>$array_finance["phone"][$count],  
    //                 'licence_id' =>$array_finance["total_amount"][$count],  
    //                 'vechicle_capacity' =>$array_finance["account_name"][$count],  
    //                 'from_location' =>$array_finance["payment_type"][$count],  
    //                 'to_locatdion' =>$array_finance["bank_acno"][$count],  
    //                 'google_distance' =>$array_finance["bank_ifsc_code"][$count],   
    //                 'manual_distance' =>$array_finance["expenditure_desc"][$count],  
    //                 'program_id' =>$_POST['program_id'], 
    //                 ); 

    //                 $program_result = $this->Program_model->transport_save($data_transport);
    //             } 

    //             $data = array(
    //                     'status' => TRUE,
    //                     'message' => 'Transport add successfully.' 
    //             );  

    //             $this->response($data,REST_Controller::HTTP_OK); 

    //         }        
    //     }
    //     else
    //     {
    //         $error = array(
    //                         'status' => FALSE,
    //                         'message' => 'Transport add failed.' 
    //                     );
                           
    //         $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
    //     }  
       
    // }

    public function transport_post() 
    {
        $transport = json_decode($_POST['transport_list']); 
        $array_transport =  (array) $transport;

        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '';
            if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }

            if(isset($array_transport["vechile_name"][0]) && !empty($array_transport["vechile_name"][0]))
            {
                for($count = 0; $count < count($array_transport["vechile_name"]); $count++)
                {        
                    $data_transport  = array(
                    'vechile_name' =>$array_transport["vechile_name"][$count],  
                    'register_no' =>$array_transport["register_no"][$count],  
                    'driver_name' =>$array_transport["driver_name"][$count],  
                    'licence_id' =>$array_transport["licence_id"][$count],  
                    'vechicle_capacity' =>$array_transport["vechicle_capacity"][$count],  
                    'from_location' =>$array_transport["from_location"][$count],  
                    'to_locatdion' =>$array_transport["to_locatdion"][$count],  
                    'google_distance' =>$array_transport["google_distance"][$count],   
                    'manual_distance' =>$array_transport["manual_distance"][$count],  
                    'implemented_by' => $created_by,  
                    'program_id' =>$_POST['program_id'],
                    'location_id' => $this->input->post('location_id'),   
                    ); 

                    $transport_result = $this->Program_model->transport_save($data_transport);
                } 

                $data = array(
                        'status' => TRUE,
                        'message' => 'Transport add successfully.' 
                );  

                $this->response($data,REST_Controller::HTTP_OK); 

            } 
            else
            {
                $error = array(
                                'status' => FALSE,
                                'message' => 'Transport add failed.' 
                            );
                               
                $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
            }        
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'Transport add failed.' 
                        );
                           
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }  
       
    }


    public function daywise_report_post() 
    {
        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '0';
            if(!empty($this->session->userdata('user_id')) && $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }
   
            $originalDate = $_POST["date"];
            $newDate = date("Y-m-d", strtotime($originalDate));
            $data_report  = array(
            'date' =>$newDate,  
            'men' =>$_POST["men"],  
            'women' =>$_POST["women"],  
            'boys' =>$_POST["boys"],  
            'girls' =>$_POST["girls"],  
            'place_of_work' =>$_POST["place_of_work"],  
            'work_information' =>$_POST["work_information"],  
            'prayer_points' =>$_POST["prayer_points"],   
            'achievements' =>$_POST["achievements"],  
            'challenges' =>$_POST["challenges"],  
            'program_id' =>$_POST['program_id'],
            'implemented_by' =>$created_by,
            'location_id' => $this->input->post('location_id') 
            ); 

            $program_result = $this->Program_model->daywise_report_save($data_report);

            if($program_result)
            {
                $data = array(
                    'status' => TRUE,
                    'message' => 'Report add successfully.' 
                );  

                $this->response($data,REST_Controller::HTTP_OK);
            }  
                
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'Report add failed.' 
                        );
                           
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }    
    }


    public function finance_report_get()
    {
        if(isset($_GET['program_id']) && !empty($_GET['program_id']))
        {
            $finance_data = $this->Program_model->get_finance($_GET['program_id'],$_GET['location_id']);

            if(!empty($finance_data))
            {
                $finance_list = array(
                                'status' => TRUE,
                                'message' => $finance_data 
                            );

                $this->response($finance_list, REST_Controller::HTTP_OK); 
            }
            else
            {
                $error = array(
                                'status' => FALSE,
                                'message' => 'No Finance data were found.' 
                            );
                           
                $this->response($error,REST_Controller::HTTP_NOT_FOUND);
            }   
             
        }
    }


    public function total_finance_report_post() 
    {
        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '';
            if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }

            $filename  = random_string('alnum',8).'.jpg';
            $img       = $_POST['quation_image'];
            $upload_path = './uploads/programs/'.$filename;

            file_put_contents($upload_path,base64_decode($img));
             
            $img_url = base_url('uploads/programs/'.$filename);  

            $data_financereport  = array(
            
            'act_amount' =>$_POST["total_amount"],  
            'expenditure_amount' =>$_POST["total_expenditure"],  
            'balance_amount' =>$_POST["balance_amount"],  
            'bill_image' =>$img_url,  
            'program_id' =>$_POST['program_id'], 
            'finance_id' =>$_POST['finance_id'], 
            'vendor_id' =>$_POST['vendor_id'],
            'location_id' => $this->input->post('location_id'), 
            'implemented_by' =>$created_by,
            'created_on' => date('Y-m-d H:i:s')
            ); 

            $financereport_result = $this->Program_model->finance_report_save($data_financereport);

            if($financereport_result)
            {
                $data = array(
                    'status' => TRUE,
                    'message' => 'Finance report add successfully.' 
                );  

                $this->response($data,REST_Controller::HTTP_OK);
            }  
                
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'Finance report add failed.' 
                        );
                           
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }    
    }


    public function program_review_post() 
    {
        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '';
            if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }

            $filename  = random_string('alnum',8).'.jpg';
            $img       = $_POST['review_image'];
            $upload_path = './uploads/programs/'.$filename;

            file_put_contents($upload_path,base64_decode($img));
             
            $img_url = base_url('uploads/programs/'.$filename);  

            $data_review  = array(
            
            'phone' =>$_POST["phone"],  
            'email' =>$_POST["email"],  
            'review' =>$_POST["review"],     
            'image' =>$img_url,  
            'program_id' =>$_POST['program_id'],
            'review_category' =>$_POST["review_category"],  
            'location_id' => $this->input->post('location_id'),
            'created_on' => date('Y-m-d H:i:s'), 
            'implemented_by' =>$created_by 
            ); 

            $financereport_result = $this->Program_model->program_review_save($data_review);

            if($financereport_result)
            {
                $data = array(
                    'status' => TRUE,
                    'message' => 'review add successfully.' 
                );  

                $this->response($data,REST_Controller::HTTP_OK);
            }  
                
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'Review add failed.' 
                        );
                           
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }    
    }

    public function program_images_post() 
    {
        $program_img = json_decode($_POST['images_list']); 
        $array_image =  (array) $program_img;
        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '';
            if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }

            $originalDate = $_POST["date"];
            $newDate = date("Y-m-d", strtotime($originalDate));

            if(isset($array_image["program_img"][0]) && !empty($array_image["program_img"][0]))
            { 
                for($count = 0; $count < count($array_image["program_img"]); $count++)
                {    
                    $filename  = random_string('alnum',8).'.jpg';
                    $img       = $array_image['program_img'][$count];
                    $upload_path = './uploads/programs/'.$filename;
                    file_put_contents($upload_path,base64_decode($img)); 
                    $img_url[] = base_url('uploads/programs/'.$filename);       
                } 

                $data_images  = array(
                    'program_id' =>$_POST['program_id'],
                    'location_id' => $this->input->post('location_id'), 
                    'img_category' => $this->input->post('img_category'), 
                    'img_desc' => $this->input->post('img_desc'), 
                    'date' => $newDate, 
                    'image' => implode(",",$img_url), 
                    'implemented_by' => $created_by, 
                    ); 

                $image_result = $this->Program_model->images_save($data_images);

                $data = array(
                        'status' => TRUE,
                            'message' => 'Program Images add successfully.' 
                );  

                $this->response($data,REST_Controller::HTTP_OK); 

            }      
        }
        else
        {
              $error = array(
                            'status' => FALSE,
                            'message' => 'Program Images add failed.' 
                        );
                           
                $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }  
       
    }


    public function success_report_post() 
    {
        if(isset($_POST['program_id']) && !empty($_POST['program_id']))
        {
            $created_by = '';
            if(!empty($this->session->userdata('user_id')) &&  $this->session->userdata('logged_in') == TRUE)
            {
                $created_by = $this->session->userdata('user_id'); 
            }

            $filename  = random_string('alnum',8).'.jpg';
            $img       = $_POST['story_image'];
            $upload_path = './uploads/programs/'.$filename;

            file_put_contents($upload_path,base64_decode($img));
             
            $img_url = base_url('uploads/programs/'.$filename);  

            $data_story  = array(
            
            'phone' =>$_POST["phone"],  
            'email' =>$_POST["email"],  
            'success_story' =>$_POST["success_story"],     
            'image' =>$img_url,  
            'program_id' =>$_POST['program_id'],
            'location_id' => $this->input->post('location_id'),
            'implemented_by' =>$created_by, 
            'created_on' => date('Y-m-d H:i:s') 
            ); 

            $story_result = $this->Program_model->story_save($data_story);

            if($story_result)
            {
                $data = array(
                    'status' => TRUE,
                    'message' => 'Success story add successfully.' 
                );  

                $this->response($data,REST_Controller::HTTP_OK);
            }  
                
        }
        else
        {
            $error = array(
                            'status' => FALSE,
                            'message' => 'Success story add failed.' 
                        );
                           
            $this->response($error,REST_Controller::HTTP_BAD_REQUEST);
        }    
    }

    public function logout_get()
    {
         $this->session->unset_userdata('user_id'); 
         $this->response([
                    'status' => TRUE,
                    'message' => 'Logout successfully.'
                ], REST_Controller::HTTP_OK); 
    }

    

  
}

?>