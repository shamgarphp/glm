<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    private $admin = "admin";
    private $employees = "employees";
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getOne($email,$pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        $query = $this->db->get($this->admin);
        if($query) 
        {
            return $query->row_array();
        } 
        else 
        {
            return FALSE;
        }  
    }

    public function getEmp($email,$pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        $query = $this->db->get($this->employees);
        if($query) 
        {
            return $query->row_array();
        } 
        else 
        {
            return FALSE;
        }  
    }

    

    public function get_user($id)
    {
        $this->db->where('admin_id', $id);
        $query = $this->db->get($this->admin);
        if($query)
        {
           return $query->row_array();   
        }
        else
        {
           return FALSE;
        }    
    }
    
  
    public  function update_admin_data($admin_update,$admin_id) 
    {
        $this->db->where('admin_id',$admin_id);
        $query = $this->db->update($this->admin,$admin_update);
        if($query)
        {
          return TRUE;
        }
        else
        {
          return FALSE;
        } 
    } 


}