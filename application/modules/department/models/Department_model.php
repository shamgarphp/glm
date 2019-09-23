<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service_model extends CI_Model
{
    private $service =  "services";
    private $events =  "events";
    
	public function __construct()
	{
	    parent::__construct();
	}

   

    public function save_service($data)
    {
        $this->db->insert($this->service,$data);
        if ($this->db->affected_rows() > 0 ) 
        {
          	return TRUE;
        }
        else
        {
        	return FALSE;
        }
    }
	
	public function  getall_service()
	{
        $this->db->select();
        $this->db->from($this->service);
        $this->db->order_by('service_id','desc');
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

    public function service_view($serviceid)
    {
        $this->db->select();
        $this->db->from($this->service);
        $this->db->where('service_id',$serviceid);
        $query = $this->db->get();
        if($query)
        {
           return $query->row_array(); 
        }
        else
        {
            return FALSE;
        }    
    }

    public function edit_service($serviceid)
    {
        $this->db->where('service_id',$serviceid);
        $query = $this->db->get($this->service);
        if($query)
        {
            return $query->row_array();   
        }
        else
        {
            return FALSE;
        }    
    }

    public function update_services($data,$service_id)
    {
        $this->db->where('service_id',$service_id);
        $this->db->update($this->service,$data);
        if($this->db->affected_rows() > 0) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function service_delete($service_id)
    {
        $this->db->select('image');
        $this->db->from('services');
        $this->db->where('service_id',$service_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
            $result =  $query->row_array(); 
            unlink("uploads/services/".$result['image']);
            $img_delete =  $this->db->delete('services', array('service_id' => $service_id));
            if ($img_delete)
            {
                return TRUE;
            }
            else
            {
                 return FALSE;
            }

        }
        else
        {
           return FALSE;
        } 
    } 


    
}