<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity_model extends CI_Model
{
    private $activities =  "activities";
    
	public function __construct()
	{
	    parent::__construct();
	}

    public function  get_employees()
    {
        $this->db->select();
        $this->db->from($this->activities);
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