<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Attendance_model extends CI_Model
{
    private $attendance =  "attendance";
    
	public function __construct()
	{
	    parent::__construct();
	}

	public function save_attendance($data)
    {
        $this->db->insert($this->attendance,$data);
        if ($this->db->affected_rows() > 0 ) 
        {
          	return TRUE;
        }
        else
        {
        	return FALSE;
        }
    }

    public function  getall_attendance()
	{
        $this->db->select('a.atten_date as attendance_date,a.signin_time,a.signout_time,a.attendace_id,a.status,b.first_name,b.last_name');
        $this->db->from('attendance as a');
        $this->db->join('employees as b','a.emp_id = b.user_id','left');
        $this->db->order_by('a.attendace_id','desc');
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

    public function  get_attendance($attendance_id)
    {
        $this->db->select('a.atten_date as attendance_date,a.signin_time,a.signout_time,a.status,a.emp_id,b.first_name,b.last_name');
        $this->db->from('attendance as a');
        $this->db->where('a.attendace_id',$attendance_id);
        $this->db->join('employees as b','a.emp_id = b.user_id','left');
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


	public function attendance_check($employee_id,$newdate)
	{
        $this->db->select();
        $this->db->from($this->attendance);
        $this->db->where('emp_id',$employee_id);
        $this->db->where('atten_date',$newdate);
        $query = $this->db->get();
        if ($query->num_rows() > 0) 
        {
           return true;
        }
        else
        {
        	return FALSE;
        }
	}


    public function update_attendance($data,$attendance_id)
    {
        $this->db->where('attendace_id',$attendance_id);
        $this->db->update($this->attendance, $data);
        if($this->db->affected_rows() > 0) 
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function delete_Attendance($attendance_id)
    {
        $this->db->where('attendace_id',$attendance_id);
        $this->db->delete($this->attendance);
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