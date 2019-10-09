<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transport_model extends CI_Model
{
    // private $transports =  "transports";
    // private $locations =  "locations";
    
	public function __construct()
	{
	    parent::__construct();
	}


    // public function getall_transports()
    // {
    //     $this->db->select('*');
    //     $this->db->from('transports');
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

    public function getall_transports(){
        $this->db->select('t.*,p.program_name');
        $this->db->from('transport as t');
        $this->db->join('programs as p','p.program_id = t.program_id','left');
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