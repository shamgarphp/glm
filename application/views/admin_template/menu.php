<?php
 function main_menu_active($selected_class,$selected_method)
 {
     $ci =& get_instance();
     $class = $ci->router->fetch_class(); //current class
     $method = $ci->router->fetch_method(); // current method
     if (($class == $selected_class) && (in_array($method, $selected_method)))
     {
         return "--active"; 
     }  
     return false;
 }

 function main_menu_open($selected_class,$selected_method)
 {
     $ci =& get_instance();
     $class = $ci->router->fetch_class(); //current class
     $method = $ci->router->fetch_method(); // current method
     if (($class == $selected_class) && (in_array($method, $selected_method)))
     {
         return "--open  m-menu__item--active"; 
     }  
     return false;
  }
?>
  
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">

          <!-- BEGIN: Aside Menu -->
          <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
            <ul class="m-menu__nav ">
              <li class="m-menu__item  m-menu__item<?php echo main_menu_open("admin_dashboards",array("index")); ?>" aria-haspopup="true"><a href="<?php echo base_url('dashboard'); ?>" class="m-menu__link "><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-home"></i><span class="m-menu__link-text">Dashboard</span></a></li>
         
           <!--   <li class="m-menu__item  m-menu__item" aria-haspopup="true"><a href="<?php //echo base_url('employees'); ?>" class="m-menu__link "><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-user"></i><span class="m-menu__link-text">Employess</span></a></li> -->

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("users",array("employee_list","employee_edit")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Employess</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("users",array("employee_list","employee_edit")); ?>" aria-haspopup="true"><a href="<?php echo base_url('employees'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Employess List</span></a></li>

                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("users",array("task_list","task_edit")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Task Management</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("users",array("task_list","task_edit")); ?>" aria-haspopup="true"><a href="<?php echo base_url('tasks'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Task List</span></a></li>
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("users",array("task_list","task_edit")); ?>" aria-haspopup="true"><a href="<?php echo base_url('my-calendar'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Calender View</span></a></li>

                  </ul>
                </div>
              </li>

               <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("Attendance",array("Attendance_list","Attendance_edit")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Attendance</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("Attendance",array("Attendance_list")); ?>" aria-haspopup="true"><a href="<?php echo base_url('attendance'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Attendance List</span></a></li>
                     <li class="m-menu__item m-menu__item<?php echo main_menu_active("Attendance",array("employee_list","employee_edit")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Attendance</span></a></li>
                      <!-- <li class="m-menu__item m-menu__item<?php echo main_menu_active("Attendance",array("employee_list","employee_edit")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Attendance Report</span></a></li>   --> 
                  </ul>
                </div>
              </li>
             
              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("Leaves",array("leave_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Leave</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("Leaves",array("leave_list")); ?>" aria-haspopup="true"><a href="<?php echo base_url('Leaves'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Leaves List</span></a></li>
                     <li class="m-menu__item m-menu__item<?php echo main_menu_active("Leaves",array("","")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Leave</span></a></li>
                         
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("Programs",array("program_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Program</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("Programs",array("program_list")); ?>" aria-haspopup="true"><a href="<?php echo base_url('Programs'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Program List</span></a></li>
                     <li class="m-menu__item m-menu__item<?php echo main_menu_active("Programs",array("","")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Program</span></a></li>
                         
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("Transport",array("transport_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Transport</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("Transport",array("transport_list")); ?>" aria-haspopup="true"><a href="<?php echo base_url('Transport'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Transport List</span></a></li>
                     <li class="m-menu__item m-menu__item<?php echo main_menu_active("Programs",array("","")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Transport</span></a></li>
                         
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("Funds",array("fund_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Funds</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("Funds",array("fund_list")); ?>" aria-haspopup="true"><a href="<?php echo base_url('Funds'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Funds List</span></a></li>
                     <li class="m-menu__item m-menu__item<?php echo main_menu_active("Funds",array("","")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Funds</span></a></li>
                         
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php echo main_menu_open("Vendors",array("vendor_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Vendors</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item m-menu__item<?php echo main_menu_active("Vendors",array("vendor_list")); ?>" aria-haspopup="true"><a href="<?php echo base_url('Vendors'); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Vendors List</span></a></li>
                     <li class="m-menu__item m-menu__item<?php echo main_menu_active("Funds",array("","")); ?>" aria-haspopup="true"><a href="<?php echo base_url(''); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Add Vendors</span></a></li>
                         
                  </ul>
                </div>
              </li>



           <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php //echo main_menu_open("user",array("users_list","user_registration","user_edit","selected_users","users_exams","student_enquiry_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Location Wise Staff </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                   
                    <li class="m-menu__item m-menu__item<?php //echo main_menu_active("user",array("users_list","user_registration","user_edit")); ?>" aria-haspopup="true"><a href="<?php //echo base_url('users_table');?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Location Wise Staff</span></a></li>

                  
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php //echo main_menu_open("user",array("users_list","user_registration","user_edit","selected_users","users_exams","student_enquiry_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Fund And Materials</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                   
                    <li class="m-menu__item m-menu__item<?php //echo main_menu_active("user",array("users_list","user_registration","user_edit")); ?>" aria-haspopup="true"><a href="<?php //echo base_url('users_table');?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Location Wise Staff</span></a></li>

                  
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php //echo main_menu_open("user",array("users_list","user_registration","user_edit","selected_users","users_exams","student_enquiry_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                   
                    <li class="m-menu__item m-menu__item<?php //echo main_menu_active("user",array("users_list","user_registration","user_edit")); ?>" aria-haspopup="true"><a href="<?php //echo base_url('users_table');?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Location Wise Staff</span></a></li>

                  
                  </ul>
                </div>
              </li>
   

              <li class="m-menu__item  m-menu__item--submenu m-menu__item<?php //echo main_menu_open("user",array("users_list","user_registration","user_edit","selected_users","users_exams","student_enquiry_list")); ?>" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon fa fa-users"></i><span
                   class="m-menu__link-text">Students</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu"><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                   
                    <li class="m-menu__item m-menu__item<?php //echo main_menu_active("user",array("users_list","user_registration","user_edit")); ?>" aria-haspopup="true"><a href="<?php //echo base_url('users_table');?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Student List</span></a></li>

                  
                  </ul>
                </div>
              </li>



              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-share"></i><span
                   class="m-menu__link-text">Adminastration</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">Resources</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timesheet</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Payroll</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Contacts</span></a></li>
                  </ul>
                </div>
              </li>

              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-suitcase"></i>
                <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Finance</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                  
                    

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>
                      <span
                         class="m-menu__link-text">Allocate and deallocate funds</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Department</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Activity</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Person</span></a></li>

                        </ul>
                      </div>
                    </li>


                    

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>
                      <span class="m-menu__link-text">Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">

                         <!--  <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Department</span></a></li>
 -->

                           <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>
                          <span class="m-menu__link-text">Department</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                          <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                         <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Children</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Education</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Church</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sea</span></a></li>

                           <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Youth Emporment</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Relief Work</span></a></li>
                             <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Dcf</span></a></li>
                              <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Total</span></a></li>
                          </ul>
                        </div>
                         </li> 

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Activity</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff</span></a></li>

                           <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Maintenance</span></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>
                      <span
                         class="m-menu__link-text">Salaries</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Department Wise</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Activity Wise</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Person Wise</span></a></li>

                        </ul>
                      </div>
                    </li>


                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i>
                      <span
                         class="m-menu__link-text">Expenditure</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Department Wise</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Activity Wise</span></a></li>

                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Person Wise</span></a></li>

                        </ul>
                      </div>
                    </li>


                
                  </ul>
                </div>
              </li>


              <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-light"></i><span class="m-menu__link-text">Activity</span></a></li>

              <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Staff</span></a></li>

            
            
            </ul>
          </div>

          <!-- END: Aside Menu -->
        </div>