<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'admin/admin';
$route['dashboard'] = 'admin_dashboard/admin_dashboards';
$route['dashboardf'] = 'admin_dashboard/admin_dashboards/finance';
$route['dashboardaf'] = 'admin_dashboard/admin_dashboards/approve_funds';
$route['dashboardar'] = 'admin_dashboard/admin_dashboards/reports';
$route['dashboardadep'] = 'admin_dashboard/admin_dashboards/departments';
$route['db_allocate_dpt'] = 'admin_dashboard/admin_dashboards/allocate_fund_dept';
$route['db_vbs'] = 'admin_dashboard/admin_dashboards/vbs';
$route['db_vbs_reports'] = 'admin_dashboard/admin_dashboards/vbs_reports';


$route['admin'] = 'admin/admin/index';
$route['profile'] = 'admin/admin/update_user';
$route['admin_update'] = 'admin/admin/profile_update';


$route['forgotpass'] = 'admin/admin/forgotpass_email';
$route['create_pass'] = 'admin/admin/create_password';


$route['users'] = 'users/users/index';
$route['add_user'] = 'users/users/add_user';
$route['employees'] = 'users/users/employee_list';
$route['EmployeeEdit'] = 'users/users/employee_edit';

$route['tasks'] = 'users/task/task_list';
$route['create_task'] = 'users/task/create_task';
$route['saveTask'] = 'users/task/save_task';
$route['editTask'] = 'users/task/edit_task';
$route['updateTask'] = 'users/task/update_task';
$route['deleteTask'] = 'users/task/delete_task';
$route['my-calendar'] = "users/Calendar";

$route['attendance'] = 'users/Attendance/Attendance_list';
$route['AttendanceEdit'] = 'users/Attendance/Attendance_edit';

$route['Leaves'] = 'users/leave/leave_list';


$route['test'] = 'users/Attendance/test';

$route['activity'] = 'activities/activity/index';

$route['project']     = 'projects/projects/index';
$route['add_project'] = 'projects/projects/add_project';
$route['view_project'] = 'projects/projects/view_project';
$route['edit_project'] = 'projects/projects/edit_project';

$route['department'] = 'admin/administration/department_list';


$route['location_staff'] = 'vbs/vbs/staff_list_location';
$route['add_staff'] = 'vbs/vbs/add_user';
$route['StaffView'] = 'vbs/vbs/location_staff_view';
$route['StafDelete'] = 'vbs/vbs/location_staff_delete';


$route['allocate_fund_material'] = 'vbs/vbs/allocate_fund_materials';
$route['allocate_fund_material_view'] = 'vbs/vbs/program_view';
$route['allocate_fund_material_edit'] = 'vbs/vbs/program_edit';


$route['day_wise_report'] = 'vbs/vbs/day_wise_program_report';
$route['day_wise_report_view'] = 'vbs/vbs/day_wise_program_view';
$route['day_wise_report_edit'] = 'vbs/vbs/day_wise_program_edit';


$route['finance_report'] = 'vbs/vbs/finance_report';
$route['finance_report_view'] = 'vbs/vbs/finance_report_view';
$route['FinanceReportEdit'] = 'vbs/vbs/finance_report_edit';


$route['program_reviews'] = 'vbs/vbs/program_review';
$route['program_review_view'] = 'vbs/vbs/program_review_view';

$route['program_photos'] = 'vbs/vbs/program_photos';
$route['program_photo_view'] = 'vbs/vbs/program_photos_view';



// $route['department_add'] = 'department/department/department_add';
// $route['department_view'] = 'department/department/view_department';
// $route['department_edit'] = 'department/department/department_edit';
// $route['user_event'] = 'department/department/user_event';

$route['finance'] = 'finance/finance/index';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
