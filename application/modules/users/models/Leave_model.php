<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leave_model extends CI_Model
{
    private $emp_leave =  "emp_leave";
    private $leave_types =  "leave_types";
    
	public function __construct()
	{
	    parent::__construct();
	}


    public function  leave_types()
    {
        $this->db->select();
        $this->db->from('leave_types');
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