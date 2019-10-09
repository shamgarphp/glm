<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Program_model extends CI_Model
{
    private $programs =  "programs";
    private $locations =  "locations";
    
	public function __construct()
	{
	    parent::__construct();
	}


    // public function getall_programs()
    // {
    //     $this->db->select('*');
    //     $this->db->from('programs');
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

    public function getall_programs(){
        $this->db->select('p.*,l.area');
        $this->db->from('programs as p');
        $this->db->join('locations as l','p.location_id = l.location_id','left');
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