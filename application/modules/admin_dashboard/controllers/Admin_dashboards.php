<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_dashboards extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*if user not loged in redirect to home page*/
        modules::run('admin/admin/is_logged_in');
        $this->load->model('Admin_dashboard_model','dashboard');
        $this->load->library('upload');
    }
    
  	public function index()
  	{
        $data['file'] = 'admin_dashboard/admin_dashboard/dashboards.php';
        //$data['custom_js']  = 'admin_dashboard/admin_dashboard/custom_js/admin_dashboard_js.php';
        // $data['total_events']     = $this->dashboard->count_events();
        // $data['total_services']     = $this->dashboard->count_services();
        // $data['total_products']     = $this->dashboard->count_products();
        // $data['total_locations']     = $this->dashboard->count_locations();
        $this->load->view('admin_template/main',$data); 
        //$this->load->view('admin_dashboard/admin_dashboard/dashboards.php'); 
  	}

    public function finance()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/finance/dashboard';
       $this->load->view('admin_template/main',$data);  
    }

    public function approve_funds()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/finance/allocate_finance/funds_dashboard';
       $this->load->view('admin_template/main',$data);  
    }

    public function reports()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/finance/report_dashboard';
       $this->load->view('admin_template/main',$data);  
    } 

    public function departments()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/finance/dpt_dashboard';
       $this->load->view('admin_template/main',$data);  
    } 

    public function allocate_fund_dept()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/finance/allocate_finance/allocate_dept';
       $this->load->view('admin_template/main',$data);  
    } 

    public function vbs()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/vbs/dashboard_vbs';
       $this->load->view('admin_template/main',$data);  
    }

    public function vbs_reports()
    {
       $data['file'] = 'admin_dashboard/admin_dashboard/vbs/dashboard_vbs_reports';
       $this->load->view('admin_template/main',$data);  
    }
	
}