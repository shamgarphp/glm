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

    public function save_task()
    {
        $data = array(
         'task_title' => $this->input->post("task_title"),
         'task_description' => $this->input->post("task_description"),
         'location_id' => $this->input->post("location_id"),
         'emp_number' => $this->input->post("emp_number")
        );

        $insert = $this->db->insert('gl_tasks', $data);
        $task_id = $this->db->insert_id();
        $count_day = count($this->input->post('day'));

        for($x = 0; $x < $count_day; $x++) {
            if($this->input->post('day')[$x] != ''){
                $items = array(
                    'task_id' => $task_id,
                    'day' => $this->input->post('day')[$x],
                    'start_time' => $this->input->post('start_time')[$x],
                    'end_time' => $this->input->post('end_time')[$x],
                );

                $this->db->insert('day_item', $items);
            }
        }

        $category = count($this->input->post('category'));

        for($x = 0; $x < $category; $x++) {
            if($this->input->post('category')[$x] != ''){
                $items = array(
                    'task_id' => $task_id,
                    'category' => $this->input->post('category')[$x],
                    'type' => $this->input->post('type')[$x],
                    'description' => $this->input->post('description')[$x],
                    'count' => $this->input->post('count')[$x],
                    'resource_id' => $this->input->post('resource_id')[$x],
                );

                $this->db->insert('participating_resources', $items);
            }
        }
    }

    public function  getall_tasks()
    {
        $this->db->select('t.task_id,t.task_title,t.task_description,l.area');
        $this->db->from('gl_tasks as t');
        $this->db->join('locations as l','t.location_id = l.location_id');
        $this->db->order_by('t.task_id','desc');
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

    public function getTask($id){
        $this->db->select('*');
        $this->db->from('gl_tasks t');
        $this->db->where('t.task_id = '.$id);
        // $this->db->join('day_item as d','t.task_id = d.task_id','left');
        // $this->db->join('participating_resources as r','t.task_id = r.task_id','left');        
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
    public function getDaysByTaskId($id){
        $this->db->select('*');
        $this->db->from('day_item d');
        $this->db->where('d.task_id = '.$id);
        // $this->db->join('day_item as d','t.task_id = d.task_id','left');
        // $this->db->join('participating_resources as r','t.task_id = r.task_id','left');        
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
    public function getParticipantsByTaskId($id){
        $this->db->select('*');
        $this->db->from('participating_resources p');
        $this->db->where('p.task_id = '.$id);
        // $this->db->join('day_item as d','t.task_id = d.task_id','left');
        // $this->db->join('participating_resources as r','t.task_id = r.task_id','left');        
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

    public function update_task($id){

        $data = array(
         'task_title' => $this->input->post("task_title"),
         'task_description' => $this->input->post("task_description"),
         'location_id' => $this->input->post("location_id"),
         'emp_number' => $this->input->post("emp_number")
        );

        $this->db->where('task_id', $id);
        $update = $this->db->update('gl_tasks', $data);

        $count_day = count($this->input->post('day'));

        $get_day_item = $this->getDaysByTaskId($id);

        for($x = 0; $x < $count_day; $x++) {
            if($this->input->post('day')[$x] != ''){

                $items = array(
                    'task_id' => $id,
                    'day' => $this->input->post('day')[$x],
                    'start_time' => $this->input->post('start_time')[$x],
                    'end_time' => $this->input->post('end_time')[$x],
                );
                $this->db->where('task_id', $id);
                $this->db->insert('day_item', $items);
            }
        }
    }

    public function delete_task($id){
        if($id) {
            $this->db->where('task_id', $id);
            $delete = $this->db->delete('gl_tasks');

            $this->db->where('task_id', $id);
            $delete_item = $this->db->delete('day_item');
            return ($delete == true && $delete_item) ? true : false;
        }
    }
}