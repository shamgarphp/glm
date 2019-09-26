<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Task_model extends CI_Model
{
    private $roles =      "roles";
    private $employess =  "employees";
    private $department =  "departments";
    private $bank_names =  "bank_list";
    private $gl_tasks =  "gl_tasks";
    
    
	public function __construct()
	{
	    parent::__construct();
	}   

    public function save_task($task_title,$task_description,$location_id)
    {
        // $this->db->insert($this->gl_tasks,$data);
        // if ($this->db->affected_rows() > 0 ) 
        // {
        //   	return TRUE;
        // }
        // else
        // {
        // 	return FALSE;
        // }

        $query="INSERT INTO gl_task( 'task_title', 'task_description', 'location_id') 
        VALUES ('$task_title','$task_description','$location_id')";
        $this->db->query($query);
    }
}