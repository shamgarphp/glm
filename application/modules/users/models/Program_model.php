<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Program_model extends CI_Model
{
    private $programs =  "programs";
    private $locations =  "locations";
    
	public function __construct()
	{
	    parent::__construct();
	}

    public function save_program()
    {
        $date = date("Y-m-d");
        $data = array(
         'program_name' => $this->input->post("program_name"),
         'program_aim' => $this->input->post("program_aim"),
         'location_id' => $this->input->post("location_id"),
         'created_on' => $date
        );

        $insert = $this->db->insert('programs', $data);
    }

    public function getall_programs(){
        $this->db->select('p.*,l.area');
        $this->db->from('programs as p');
        $this->db->join('locations as l','p.location_id = l.location_id','left');
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