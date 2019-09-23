<!DOCTYPE html>
<html lang="en">

  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>Goodlife</title>
    <meta name="description" content="Blank inner page examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?php echo base_url('admin_assets');?>/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?php echo base_url('admin_assets');?>/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
   
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('admin_assets');?>/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="<?php echo base_url('admin_assets');?>/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="<?php echo base_url('admin_assets');?>/demo/media/img/logo/favicon.ico" />

    <!-- Start toster  -->
    <link href="<?php echo base_url('admin_assets');?>/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <!-- End toster  -->
  </head>

  <!-- end::Head -->

  <!-- begin::Body -->
  <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

      <!-- BEGIN: Header -->
      <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
          <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="<?php echo base_url('dashboard'); ?>" class="m-brand__logo-wrapper">
                   
                    <span class="logo-default"><font size="6" color="white">Goodlife</font></span>
                  </a>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">

                  <!-- BEGIN: Left Aside Minimize Toggle -->
                  <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                  <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Header Menu Toggler -->
                  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Topbar Toggler -->
                  <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                    <i class="flaticon-more"></i>
                  </a>

                  <!-- BEGIN: Topbar Toggler -->
                </div>
              </div>
            </div>

            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

              <!-- BEGIN: Horizontal Menu -->
              <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
            

              <!-- END: Horizontal Menu -->

              <!-- BEGIN: Topbar -->
             <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                    
                    <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__userpic text-white">
                         <h2><?php if($this->session->userdata('admin_username')) { echo ucfirst($this->session->userdata('admin_username')); } ?></h2>
                        </span> 
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                         
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav m-nav--skin-light">
                                <li class="m-nav__section m--hide">
                                  <span class="m-nav__section-text">Section</span>
                                </li>
                               
                                  <li class="m-nav__item">
                                  <a href="" class="m-nav__link btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" data-toggle="modal" data-target="#m_modal_5" >My Profile</a>
                                </li><br>
                                  <li class="m-nav__item">
                                  <a href="<?php echo base_url('admin/admin/logout');?>" class="m-nav__link btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" >Logout</a>
                                </li>
                               
                               
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>


            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                    
                    <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__userpic text-white">
                         <h2><?php echo ucfirst($this->session->userdata('admin_name'));?></h2>
                        </span>
                        
                        
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                         
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav m-nav--skin-light">
                                <li class="m-nav__section m--hide">
                                  <span class="m-nav__section-text">Section</span>
                                </li>
                               
                                  <li class="m-nav__item">
                                  <a href="" class="m-nav__link btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" data-toggle="modal" data-target="#m_modal_5" >My Profile</a>
                                </li><br>
                                  <li class="m-nav__item">
                                  <a href="<?php echo base_url('admin/admin/logout');?>" class="m-nav__link btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" >Logout</a>
                                </li>
                               
                               
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>

              <!-- END: Topbar -->
            </div>
          </div>
        </div>
      </header>

      <!-- END: Header -->