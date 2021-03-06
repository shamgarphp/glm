<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transport extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Transport_model');
        $this->load->model('User_model');
        $this->load->library('upload');
    }

    public function transport_list()
    {
        $data['transport_list'] =  $this->Transport_model->getall_transports();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/transport/transport_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }
}