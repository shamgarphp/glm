<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     LOCATION WISE STAFF LIST
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">

                      <a href="<?php echo base_url('add_staff'); ?>" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air"
                        ><i class="fas fa-plus"></i>Add Staff</a>
                      
                    </li>
                    <li class="m-portlet__nav-item"></li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                      <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                        Actions
                      </a>
                      <div class="m-dropdown__wrapper" style="z-index: 101;">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36px;"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Export Tools</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_print">
                                    <i class="m-nav__link-icon la la-print"></i>
                                    <span class="m-nav__link-text">Print</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_copy">
                                    <i class="m-nav__link-icon la la-copy"></i>
                                    <span class="m-nav__link-text">Copy</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_excel">
                                    <i class="m-nav__link-icon la la-file-excel-o"></i>
                                    <span class="m-nav__link-text">Excel</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_csv">
                                    <i class="m-nav__link-icon la la-file-text-o"></i>
                                    <span class="m-nav__link-text">CSV</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_pdf">
                                    <i class="m-nav__link-icon la la-file-pdf-o"></i>
                                    <span class="m-nav__link-text">PDF</span>
                                  </a>
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
                  <form method="POST" action="<?php echo base_url('location_staff')?>">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                     <select class="form-control m-input" data-col-index="6" name="staff_location">
                       <?php if(isset($staff_locations) && !empty($staff_locations)){?>
                        <option value="">Select Location</option>
                       <?php $i = 1; foreach($staff_locations as $staff_location){?>
                       <option value="<?php echo $staff_location['location_id'];?>" <?php echo set_select('staff_location', $staff_location['location_id']);?>><?php echo $staff_location['area'];?></option>
                       <?php } } ?>
                     </select>
                     </div>
                     <div class="form-group m-form__group row">
                     <div class="col-lg-2 col-md-2 col-sm-2">

                    <input  type="submit" class="btn btn-success m-btn m-btn--icon" name="staff_search" value="Serach" >
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                     <div class="col-lg-2 col-md-2 col-sm-2">
                      <input  type="submit" class="btn btn-danger m-btn m-btn--icon" name="staff_reset" id="staff_reset" value="Reset">
                     </div>
                    </div>
                      
                 </div>
              </div>
                  </form>
              <div class="m-portlet__body">

                
                <!--begin: Datatable -->
              <table class="table table-striped- table-bordered table-hover table-checkable staff_list" id="m_table_1">
                  <thead>
                    <tr>
                      <th class="mb-0 pb-0"><span class="check_select"><input type="checkbox" id="quetion_all" name="all_questions[]"><label for="quetion_all"></label></span></th>
                       <th>S.No</th> 
                      <th>Program Admin</th>
                      <th>Finance Admin</th>
                      <th>Reporting Staff1</th>
                      <th>Reporting Staff2</th>
                      <th>Photography Staff</th>
                      <th>Location</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php if(isset($staff_list) && !empty($staff_list)){?>
                  <?php $i = 1; foreach($staff_list as $staff_admin){?>
                  <tr>
                   <td>
                   <p class="check_select checkboxes"><input type="checkbox" name="quetions_list[]" id="quetions_list<?php //echo $questions['quetion_id']; ?>" value="<?php  //echo $questions['quetion_id']; ?>"><label for="quetions_list<?php  //echo $questions['quetion_id']; ?>"></label></p>
                   </td>
                  <td> <?php echo $i++; ?> </td>
                 <td><?php if(!empty($staff_admin['program_admin'])) { echo ucfirst($staff_admin['program_admin']);} ?> </td>
                 <td> <?php if(!empty($staff_admin['finance_admin'])) { echo ucfirst($staff_admin['finance_admin']);} ?> </td>
                 <td> <?php if(!empty($staff_admin['report_staff1'])) { echo ucfirst($staff_admin['report_staff1']);} ?> </td>
                 <td> <?php if(!empty($staff_admin['report_staff2'])) { echo ucfirst($staff_admin['report_staff2']);} ?> </td> 
                 <td> <?php if(!empty($staff_admin['photograph'])) { echo ucfirst($staff_admin['photograph']);} ?> </td>
                 <td> <?php if(!empty($staff_admin['area'])) { echo ucfirst($staff_admin['area']);} ?> </td>
                 <td nowrap="">
                   <span class="dropdown">
                      <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                      <i class="la la-ellipsis-h"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        
                        <a class="dropdown-item" href="<?php echo base_url('StaffView?programid='.base64_encode($staff_admin['program_staff_id']));?>" ><i class="la la-eye"></i>View</a> 

                         <a class="dropdown-item"  href="<?php echo base_url('StafDelete?programid='.base64_encode($staff_admin['program_staff_id']));?>" onclick="return confirm('do you want to delete it');"><i class="la la-remove"></i> Delete</a> 
                          
                      </div>
                   </span>
                 </td>
                    
                  </tr>
                   <?php } } ?>      
                  </tbody>
                </table>
              </div>
            </div>


    </div>
  </div>
</div> 
