<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events_model extends CI_Model
{
    private $events =  "events";
    private $service =  "services";
    private $package =  "packages";
    private $packag_images =  "package_images";
    
	public function __construct()
	{
	    parent::__construct();
	}

    public function save_event($data)
    {
        $this->db->insert($this->events,$data);
        if ($this->db->affected_rows() > 0 ) 
        {
          	return TRUE;
        }
        else
        {
        	return FALSE;
        }
    }
	
	public function  getall_events()
	{
        $this->db->select();
        $this->db->from($this->events);
        $this->db->order_by('event_id','desc');
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

    public function event_view($eventid)
    {
        $this->db->select();
        $this->db->from($this->events);
        $this->db->where('event_id',$eventid);
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

    public function edit_event($eventid)
    {
        $this->db->where('event_id',$eventid);
        $query = $this->db->get($this->events);
        if($query)
        {
            return $query->row_array();   
        }
        else
        {
            return FALSE;
        }    
    }

    public function update_event($data,$eventid)
    {
        $this->db->where('event_id',$eventid);
        $this->db->update($this->events, $data);
        if($this->db->affected_rows() > 0) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    // public function event_delete($eventid)
    // {
    //     $this->db->where('event_id',$eventid);
    //     $this->db->delete($this->events);
    //     if($this->db->affected_rows() > 0)
    //     {
    //         return TRUE;
    //     }
    //     else
    //     {
    //         return FALSE;
    //     }     
    // }

    public function event_delete($eventid)
    {
        $this->db->select('image');
        $this->db->from('events');
        $this->db->where('event_id',$eventid);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
            $result =  $query->row_array(); 
            unlink("uploads/events/".$result['image']);
            $img_delete =  $this->db->delete('events', array('event_id' => $eventid));
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