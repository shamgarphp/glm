<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Location_model extends CI_Model
{
    private $location =  "locations";
    
	public function __construct()
	{
	    parent::__construct();
	}

    
    public function save_location($data)
    {
        $this->db->insert($this->location,$data);
        if ($this->db->affected_rows() > 0 ) 
        {
          	return TRUE;
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
        $this->db->order_by('location_id','desc');
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

    public function location_update($data,$location_id)
    {
        $this->db->where('location_id',$location_id);
        $query =  $this->db->update($this->location,$data);
        if($query) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function location_delete($location_id)
    {
        $this->db->where('location_id',$location_id);
        $this->db->delete($this->location);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }     
    }

    
}