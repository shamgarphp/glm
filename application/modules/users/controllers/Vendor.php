<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendor extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Vendor_model');
        $this->load->model('User_model');
        $this->load->library('upload');
    }

    public function vendor_list()
    {
        $data['vendor_list'] =  $this->Vendor_model->getall_vendors();
        $data['table_js'] = 'users/users/js/table_js';  
        $data['file'] = 'users/users/vendor/vendor_list';
        $data['custom_js'] = 'users/users/js/custom_js';
        $this->load->view('admin_template/main',$data);     
    }
}