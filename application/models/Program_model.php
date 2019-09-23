<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Program_model extends CI_Model {

    private $location  = "locations";
    private $program  = "programs";
    private $program_times  = "program_times";
    private $participants  = "participants";
    private $finance  = "finance";
    private $vendor  = "vendors";
    private $account_name  = "bank_list";
    private $participant_types  = "participant_type";
    private $employees  = "employees";
    private $transport  = "transport";
    private $daywise_report  = "daywise_report";
    private $finance_report  = "finance_report";
    private $program_review  = "program_review";
    private $program_names  = "program_names";
    private $program_images  = "program_images";
    private $success_story  = "progam_success_stories";
   

    public function __construct() {
        parent::__construct(); 
    }

    /*
     * User login 
    */
    public function user_login($email,$pwd)
    {
        $this->db->select('user_id,first_name,last_name,email');
        $this->db->where('email',$email);
        $this->db->where('password',$pwd);
        $query = $this->db->get($this->employees);  
        if($query)
        {
            return $query->row_array();   
        }
        else
        {
            return FALSE;
        }     
    }

    public  function get_programs_names($program_name) 
    {
        $sql = "SELECT * from program_names WHERE program_name ='$program_name'"; 
        $query = $this->db->query($sql);
        if($query->num_rows() > 0) 
        {
           return $query->row_array();
        }
        else
        {
            return FALSE;
        }   
    }

    public function new_program_save($program_new)
    {
        $this->db->insert($this->program_names,$program_new);
        if($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id();;
        }
        else
        {
            return FALSE;
        }       
    }


    /*
     * Insert program data
     */
    public function program_save($data_program = array()) 
    {
        $query = $this->db->insert($this->program,$data_program);
        if($query)
        {
            return $this->db->insert_id();
        }
        else
        {
            return FALSE;
        }
    }

   
    /*
     * Insert program time data
     */
    public function time_save($data_times = array()) 
    {
        $query = $this->db->insert($this->program_times,$data_times);
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
     * Insert Particpant data
     */
    public function participant_save($data_partcipant = array()) 
    {
        $query = $this->db->insert($this->participants,$data_partcipant);
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
     * Insert Finance data
     */
    public function finance_save($data_finance = array()) 
    {
        $query = $this->db->insert($this->finance,$data_finance);
        if($query)
        {
            return $this->db->insert_id();;
        }
        else
        {
            return FALSE;
        }
    }

    /*
    * Insert Finance data
    */
    public function vendor_save($data_vendor = array()) 
    {
        $query = $this->db->insert($this->vendor,$data_vendor);
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
    * Get locations data
    */
    public function get_locations()
    {
        $this->db->select('location_id,area');
        $query = $this->db->get($this->location);
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        } 
           
    } 

    /*
    * Get participants data
    */
    public function get_participants()
    {
        $this->db->select();
        $query = $this->db->get($this->participant_types);
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        } 
           
    } 


    /*
    * Get programs data
    */
    public function get_programs()
    {
        $this->db->select('a.program_id,a.location_id,b.area');
        $this->db->from('programs as a');
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

    /*
    * Get account names data
    */
    public function get_account_name()
    {
        $this->db->select();
        $query = $this->db->get($this->account_name);
        if ($query->num_rows() > 0) 
        {
           return $query->result_array();
        }
        else
        {
            return FALSE;
        } 
           
    } 

    /*
     * Insert transport data
    */
    public function  transport_save($data_transport = array()) 
    {
        $query = $this->db->insert($this->transport,$data_transport);
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
     * Insert transport data
    */
    public function  daywise_report_save($data_report = array()) 
    {
        $query = $this->db->insert($this->daywise_report,$data_report);
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
     * User login 
    */
   
    public function get_finance($program_id,$location_id)
    {
        $this->db->select('a.*,b.finance_id,d.bank_name');
        $this->db->from('vendors as a');
        $this->db->where('b.program_id',$program_id);
        $this->db->where('b.location_id',$location_id);
        $this->db->join('finance as b','a.finance_id = b.finance_id','left');
        $this->db->join('bank_list as d','a.bank_id = d.bank_id','left');
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

    /*
     * Insert finance report data
    */
    public function  finance_report_save($data_financereport = array()) 
    {
        $query = $this->db->insert($this->finance_report,$data_financereport);
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
     * Insert review data
    */
    public function  program_review_save($data_review = array()) 
    {
        $query = $this->db->insert($this->program_review,$data_review);
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
    * Program images save
    */
    public function images_save($data_images = array()) 
    {
        $query = $this->db->insert($this->program_images,$data_images);
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
     * Insert story save data
    */
    public function  story_save($data_story = array()) 
    {
        $query = $this->db->insert($this->success_story,$data_story);
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
?>