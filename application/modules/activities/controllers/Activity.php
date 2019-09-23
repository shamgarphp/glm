<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        //$this->load->model('Activity_model');
        $this->load->library('upload');
    }

    public function index()
    {
        //$data['activity_list'] =  $this->Activity_model->getall_employee();
        $data['file'] = 'activities/activities/activity_list';
        $data['table_js']    = 'admin/all_common_js/admin_tables_js.php';
        $this->load->view('admin_template/main',$data);
    }


}