<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fund_model extends CI_Model
{
    // private $funds =  "funds";
    // private $locations =  "locations";
    
	public function __construct()
	{
	    parent::__construct();
	}


    // public function getall_funds()
    // {
    //     $this->db->select('*');
    //     $this->db->from('funds');
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

    public function getall_funds(){
        $this->db->select('f.*,p.program_name');
        $this->db->from('glm_funds as f');
        $this->db->join('programs as p','p.program_id = f.program_id','left');
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

}