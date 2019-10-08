<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leave_model extends CI_Model
{
    private $glm_leaves =  "glm_leaves";
    private $leave_types =  "glm_leave_type";
    
	public function __construct()
	{
	    parent::__construct();
	}


    public function leave_types()
    {
        $this->db->select();
        $this->db->from('glm_leave_type');
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

    public function getall_leaves(){
        $this->db->select('lt.name,l.id,l.start_date,l.end_date,l.description');
        $this->db->from('glm_leaves as l');
        $this->db->join('glm_leave_type as lt','l.leave_type_id = lt.id','left');
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