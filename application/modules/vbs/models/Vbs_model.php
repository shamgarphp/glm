<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vbs_model extends CI_Model
{
    private $employees =  "employees";
    private $location =  "locations";
    private $program_staff =  "program_staff";
    private $resource_staff =  "resource_staff";
    private $programs =  "programs";
    private $daywise_repotrt = "daywise_report";
    private $finance_report = "finance_report";
    private $teaching_staff =  "teaching_staff";
    private $program_review =  "program_review";
    private $program_images  = "program_images";
    private $partcipant_type  = "participant_type";
    private $banks  = "bank_list";
    private $program_times  = "program_times";
    private $participants  = "participants";
    private $vendors  = "vendors";
    private $transport  = "transport";

   
    public function __construct()
    {
        parent::__construct();
    }

    // public function save_service($data)
    // {
    //     $this->db->insert($this->service,$data);
    //     if ($this->db->affected_rows() > 0 ) 
    //     {
    //          return TRUE;
    //     }
    //     else
    //     {
    //      return FALSE;
    //     }
    // }
    
    public function  getall_employees()
    {
        $this->db->select();
        $this->db->from($this->employees);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    } 

    public function  getall_location()
    {
        $this->db->select();
        $this->db->from($this->location);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    } 

    public function  getall_vendors()
    {
        $this->db->select();
        $this->db->from($this->vendors);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    } 

    public function location_post($location_new)
    {
        $this->db->insert($this->location,$location_new);
        if ($this->db->affected_rows() > 0)
        {
            return $this->db->last_id();
        }
        else
        {
            return FALSE;
        }

    }

   
   
    public function  get_all_programs()
    {
        $this->db->select('a.*,b.area,c.program_name as program');
        $this->db->from('programs as a');
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->join('program_names as c','a.program_name = c.program_name_id','left');
        $this->db->order_by('a.program_id','desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    } 

    public function program_status($program_data,$program_id)
    {     
        $this->db->where('program_id',$program_id);
        $query =  $this->db->update($this->programs,$program_data);
        if ($query) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }  

    public function program_permission($program_data,$program_id)
    {     
        $this->db->where('program_id',$program_id);
        $query =  $this->db->update($this->programs,$program_data);
        if ($query) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    } 

   public function program($program_id)
   {
       $this->db->select('a.program_aim,a.program_id,a.location_id,b.area');
       $this->db->from('programs as a');
       $this->db->where('a.program_id',$program_id);
       $this->db->join('locations as b','a.location_id = b.location_id','left');
       $query = $this->db->get();
       if($query->num_rows() > 0)
       {
           return $query->row_array();
       } 
       else 
       {
           return FALSE;
       }   
   }

    public function  partcipant_types()
    {
        $this->db->select();
        $this->db->from($this->partcipant_type);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    } 

    public function  bank_names()
    {
        $this->db->select();
        $this->db->from($this->banks);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    } 

   
   public function program_timing($program_id)
   {
       $this->db->select('a.program_aim,b.*');
       $this->db->from('programs as a');
       $this->db->where('a.program_id',$program_id);
       $this->db->join('program_times as b','a.program_id = b.program_id','left');
       $query = $this->db->get();
       if($query->num_rows() > 0)
       {
           return $query->result_array();
       } 
       else 
       {
           return FALSE;
       }   
   }
   
   public function participent_program($program_id)
   {
       $this->db->select('a.program_id,a.program_aim,c.participant_type as participant,c.*,d.*');
       $this->db->from('programs as a');
       $this->db->where('a.program_id',$program_id);
       $this->db->join('participants as c','a.program_id = c.program_id','left');
       $this->db->join('participant_type as d','c.participant_type = d.participant_type_id','left');
       $query = $this->db->get();
       if($query->num_rows() > 0)
       {
           return $query->result_array();
       } 
       else 
       {
           return FALSE;
       }   
   }

   public function finance_program($program_id)
   {
       $this->db->select('a.created_on,b.*,c.area,d.bank_name');
       $this->db->from('finance as a');
       $this->db->where('a.program_id',$program_id);
       $this->db->join('vendors as b','a.finance_id = b.finance_id','left');
       $this->db->join('locations as c','a.location_id = c.location_id','left');
       $this->db->join('bank_list as d','b.bank_id = d.bank_id','left');
       $query = $this->db->get();
       if($query->num_rows() > 0)
       {
           return $query->result_array();
       } 
       else 
       {
           return FALSE;
       }   
   }

   public function transport_program($program_id)
   {
       $this->db->select('a.*,b.area');
       $this->db->from('transport as a');
       $this->db->where('a.program_id',$program_id);
       $this->db->join('locations as b','a.location_id = b.location_id','left');
       $query = $this->db->get();
       //echo $this->db->last_query();exit;
       if($query->num_rows() > 0)
       {
           return $query->result_array();
       } 
       else 
       {
           return FALSE;
       }   
   }


    public function add_new_person($data)
    {
        
        $query = $this->db->insert($this->employees,$data);//echo $this->db->last_query();exit;
        if ($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id();
        }
        else
        {
            return FALSE;
        }

    }
    
    public function all_program_staff($data)
    {
        $this->db->insert($this->program_staff,$data);
        if ($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id();
        }
        else
        {
            return FALSE;
        }

    }
    public function resource_staff($resource)
    {
        $this->db->insert($this->resource_staff,$resource);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }
    public function teaching_staff($teach_data)
    {
        $this->db->insert($this->teaching_staff,$teach_data);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }

    public function day_wise_reports($program_data)
    {
        $this->db->select('a.*,b.area');
        $this->db->from('daywise_report as a');
        if (isset($program_data['Location']) && !empty($program_data['Location']))
        {
          $this->db->where('a.location_id',$program_data['Location']);
        }
        if (isset($program_data['from_date']) && !empty($program_data['from_date']))
        {
          $this->db->where('a.date >=',$program_data['from_date']);
        }
        if (isset($program_data['to_date']) && !empty($program_data['to_date']))
        {
          $this->db->where('a.date <=',$program_data['to_date']);
        }
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function day_wise_program_view($daywise_report_id)
    {
        $this->db->select();
        $this->db->from($this->daywise_repotrt);
        $this->db->where('daywise_report_id',$daywise_report_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }


    public function edit_day_wise_program($daywise_report_id)
    {
        $this->db->select('a.*,b.area');
        $this->db->from('daywise_report as a');
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->where('daywise_report_id',$daywise_report_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }


    // public function finance_report()
    // {
    //     $this->db->select();
    //     $this->db->from($this->finance_report);
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) 
    //     {
    //        return $query->result_array();
    //     }
    //     else
    //     {
    //         return FALSE;
    //     }
    // }

    public function finance_report($program_data)
    {
        $this->db->select('a.*,c.program_aim,b.area,f.first_name,f.last_name,g.vendor_name');
        $this->db->from('finance_report as a');
        if (isset($program_data['Location']) && !empty($program_data['Location']))
        {
          $this->db->where('a.location_id',$program_data['Location']);
        }
        if (isset($program_data['from_date']) && !empty($program_data['from_date']))
        {
          $this->db->where('a.created_on >=',$program_data['from_date']);
        }
        if (isset($program_data['to_date']) && !empty($program_data['to_date']))
        {
          $this->db->where('a.created_on <=',$program_data['to_date']);
        }
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->join('programs as c','a.program_id = c.program_id','left');
        $this->db->join('finance as e','a.finance_id = e.finance_id','left');
        $this->db->join('employees as f','e.implemented_by = f.user_id','left');
        $this->db->join('vendors as g','a.vendor_id = g.vendor_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    }


    public function  getall_staff($program_id,$program_data)
    {
        $this->db->select('a.program_staff_id,b.user_id,b.first_name as program_admin,c.first_name as finance_admin,d.first_name as report_staff1,e.first_name as photograph,d.first_name as report_staff2,g.area');
        $this->db->from('program_staff as a');

        if(isset($program_id) && !empty($program_id))
        {
          $this->db->where('a.program_staff_id',$program_id);
        }
        if(isset($program_data['Location']) && !empty($program_data['Location']))
        {
          $this->db->where('a.location_id',$program_data['Location']);
        }

        $this->db->group_by('a.program_staff_id');
        $this->db->join('employees as b','a.program_admin = b.user_id','left');
        $this->db->join('employees as c','a.finance_admin = c.user_id','left');
        $this->db->join('employees as d','a.report_staff1 = d.user_id','left');
        $this->db->join('employees as e','a.photography = e.user_id','left');
        $this->db->join('employees as f','a.report_staff2 = d.user_id','left');
        $this->db->join('locations as g','a.location_id = g.location_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
           return FALSE;
        }
    } 

    public function  getall_resourcestaff($program_id)
    {     
        $this->db->select('b.first_name,b.last_name');
        $this->db->from('resource_staff as a');
        $this->db->where('a.program_staff_id',$program_id);
        $this->db->join('employees as b','a.resource = b.user_id','left');
       
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
           return FALSE;
        }
    } 

    public function  getall_teachingstaff($program_id)
    {
        $this->db->select('b.first_name,b.last_name');
        $this->db->from('teaching_staff as a');
        $this->db->where('a.program_staff_id',$program_id);
        $this->db->join('employees as b','a.teaching = b.user_id','left');
       
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
           return FALSE;
        }
    } 

    // public function program_review_list()
    // {
    //     $this->db->select();
    //     $this->db->from($this->program_review);
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) 
    //     {
    //        return $query->result_array();
    //     }
    //     else
    //     {
    //         return FALSE;
    //     }
    // }

    public function program_review_list($program_data)
    {
        $this->db->select('a.*,c.program_aim,b.area');
        $this->db->from('program_review as a');
        if (isset($program_data['Location']) && !empty($program_data['Location']))
        {
          $this->db->where('a.location_id',$program_data['Location']);
        }
        if (isset($program_data['from_date']) && !empty($program_data['from_date']))
        {
          $this->db->where('a.created_on >=',$program_data['from_date']);
        }
        if (isset($program_data['to_date']) && !empty($program_data['to_date']))
        {
          $this->db->where('a.created_on <=',$program_data['to_date']);
        }
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->join('programs as c','a.program_id = c.program_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function review_view($program_review_id)
    {
        $this->db->select();
        $this->db->from($this->program_review);
        $this->db->where('program_review_id',$program_review_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function finance_report_view($finance_report_id)
    {
        $this->db->select();
        $this->db->from($this->finance_report);
        $this->db->where('finance_report_id',$finance_report_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function edit_finance_report($financeid)
    {
        $this->db->select('a.*,c.program_aim,b.area,g.vendor_name');
        $this->db->from('finance_report as a');
        if (isset($financeid) && !empty($financeid))
        {
          $this->db->where('a.finance_report_id',$financeid);
        }
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->join('programs as c','a.program_id = c.program_id','left');
        $this->db->join('finance as e','a.finance_id = e.finance_id','left');
        //$this->db->join('employees as f','e.implemented_by = f.user_id','left');
        $this->db->join('vendors as g','a.vendor_id = g.vendor_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function financereport_update($financedata,$finance_reportid) 
    {
        $this->db->where('finance_report_id',$finance_reportid);
        $query = $this->db->update($this->finance_report,$financedata);
        //echo $this->db->last_query();exit;
        if($query)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


      /*
    * Get program images 
    */
    // public function program_photos()
    // {
    //     $this->db->select('a.*,b.area');
    //     $this->db->from('program_images as a');
    //     $this->db->join('locations as b','a.location_id = b.location_id','left');
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) 
    //     {
    //     return $query->result_array();
    //     }
    //     else
    //     {
    //     return FALSE;
    //     }            
    // }  


    public function program_photos($program_data)
    {
        $this->db->select('a.*,c.program_aim,b.area,d.first_name,d.last_name');
        $this->db->from('program_images as a');
        if (isset($program_data['Location']) && !empty($program_data['Location']))
        {
          $this->db->where('a.location_id',$program_data['Location']);
        }
        if (isset($program_data['from_date']) && !empty($program_data['from_date']))
        {
          $this->db->where('a.date >=',$program_data['from_date']);
        }
        if (isset($program_data['to_date']) && !empty($program_data['to_date']))
        {
          $this->db->where('a.date <=',$program_data['to_date']);
        }
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->join('programs as c','a.program_id = c.program_id','left');
        $this->db->join('employees as d','a.implemented_by = d.user_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function delete_program_staff($program_id)
    {
        $this->db->where('program_staff_id',$program_id);
        $this->db->delete($this->program_staff);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }

    public function photo_views($program_photo_id)
    {
        $this->db->select();
        //$this->db->from($this->program_images);
        $this->db->from('program_images as a');
        $this->db->join('locations as b','a.location_id = b.location_id','left');
        $this->db->where('program_image_id',$program_photo_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }

    public function day_wise_program_delete($daywise_report_id)
    {
        $this->db->where('daywise_report_id', $daywise_report_id);
        $this->db->delete($this->daywise_repotrt);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }

    public function program_delete($program_id)
    {
        $this->db->where('program_id',$program_id);
        $this->db->delete($this->programs);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }

    public function delete_finance_report($finance_report_id)
    {
        $this->db->where('finance_report_id',$finance_report_id);
        $this->db->delete($this->finance_report);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }


    public function review_program_delete($program_review_id)
    {
        $this->db->where('program_review_id',$program_review_id);
        $this->db->delete($this->program_review);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }

    public function photos_program_delete($program_photo_id)
    {
        $this->db->where('program_image_id',$program_photo_id);
        $this->db->delete($this->program_images);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }

 
     /*
     * Update program data
     */
    public function program_update($data_program,$id_program) 
    {
        $this->db->where('program_id',$id_program);
        $query = $this->db->update($this->programs,$data_program);
        if($query)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


     /*
     * Update program times data
     */
    public function program_time_update($data_times = array(),$id_program,$program_time_id) 
    {
        $this->db->where('program_id',$id_program);
        $this->db->where('program_time_id',$program_time_id);
        $query = $this->db->update($this->program_times,$data_times);
        if($query)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

     /*
     * Update partcipants data
     */
    public function participant_update($data_partcipant = array(),$id_program,$partcipant_id) 
    {
        $this->db->where('program_id',$id_program);
        $this->db->where('participant_id',$partcipant_id);
        $query = $this->db->update($this->participants,$data_partcipant);
        if($query)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

     /*
     * Vendor update 
     */
    public function vendor_update($data_vendor,$finance_id,$vendor_id) 
    {
        $this->db->where('finance_id',$finance_id);
        $this->db->where('vendor_id',$vendor_id);
        $query = $this->db->update($this->vendors,$data_vendor);
        if($query)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

   /*
   * Vendo partcipants data
   */
    public function transport_update($data_transport,$id_program,$transport_id) 
    {
        $this->db->where('program_id',$id_program);
        $this->db->where('transport_id',$transport_id);
        $query = $this->db->update($this->transport,$data_transport);
        if($query)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


}