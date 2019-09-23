<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{
    private $roles =      "roles";
    private $employess =  "employees";
    private $department =  "departments";
    private $bank_names =  "bank_list";
    
    
	public function __construct()
	{
	    parent::__construct();
	}

    public function  getall_roles()
    {
        $this->db->select();
        $this->db->from($this->roles);
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

    public function  getall_banks()
    {
        $this->db->select();
        $this->db->from($this->bank_names);
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

    public function  getall_department()
    {
        $this->db->select();
        $this->db->from($this->department);
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

    public function save_user($data)
    {
        $this->db->insert($this->employess,$data);
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

    public function  getall_employees()
    {
        $this->db->select();
        $this->db->from($this->employess);
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


    public function get_resume($user_id)
    {
         $query = $this->db->select('resume')->where('user_id',$user_id)->from($this->employess)->get();
        if($query)
        {
          return $query->row_array(); 
        }
        else
        {
            return FALSE;
        }   
    }

    // public function employee_edit($employee_id)
    // {
    //    $this->db->select();
    //    $this->db->from($this->employess);
    //    $this->db->where('user_id',$employee_id);
    //    $query = $this->db->get();
    //    if($query->num_rows() > 0)
    //    {
    //        return $query->row_array();
    //    } 
    //    else 
    //    {
    //        return FALSE;
    //    }   
    // }

    public function update_employee($data,$employee_id)
    {
        $this->db->where('user_id',$employee_id);
        $this->db->update($this->employess, $data);
        //echo $this->db->last_query();exit;
        if($this->db->affected_rows() > 0) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function employee_edit($employee_id)
    {
        $this->db->select('a.*,b.dept_name,c.bank_name');
        $this->db->from('employees as a');
        $this->db->where('a.user_id',$employee_id);
        $this->db->join('departments as b','a.department = b.dept_id','left');
        $this->db->join('bank_list as c','a.bank_Name = c.bank_id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
            return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    } 

    public function user_status($register_data,$user_id)
    {     
        $this->db->where('user_id',$user_id);
        $query = $this->db->update($this->employess,$register_data);
        if ($query) 
        {
           return TRUE;
        }
        else
        {
          return FALSE;
        }
    } 

    
}