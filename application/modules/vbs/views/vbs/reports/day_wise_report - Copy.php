<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     VBS/REPORTS/DAY WISE PROGRAM REPORTS
                    </h3>
                  </div>
                </div>


                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    
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
             
              <div class="m-portlet__body">

                <!--begin: Search Form -->
                <form class="m-form m-form--fit m--margin-bottom-20" method="post" action="<?php echo base_url('day_wise_report');  ?>" >
                  <div class="row m--margin-bottom-20">
                 
                    <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                      <label>Location:</label>
                        <select class="form-control m-input staff_location" data-col-index="6" name="staff_location">
                       <?php if(isset($locations_list) && !empty($locations_list)){?>

                       <?php $i = 1; foreach($locations_list as $locations){?>
                        <option value="">select</option>
                       <option value="<?php echo $locations['location_id'];?>"  <?php echo  set_select('staff_location', $locations['location_id']); ?>><?php echo $locations['area'];?></option>
                       <?php } } ?>
                     </select>
                    </div>

                   
                   <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                      <label>Date:</label>
                      <div class="input-daterange input-group" id="m_datepicker_5">
                        <input type="text" class="form-control m-input from_date" name="from_date" placeholder="From" autocomplete="off" value="<?php echo set_value('from_date'); ?>">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                        </div>
                        <input type="text" class="form-control to_date" name="to_date" placeholder="To" autocomplete="off" value="<?php echo set_value('to_date'); ?>">
                      </div>
                    </div>
                
                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                  </div>
                 
                  <div class="m-separator m-separator--md m-separator--dashed"></div>
                  <div class="row">
                    <div class="col-lg-12">
                     <input type="submit" class="btn btn-brand m-btn m-btn--icon" name="program_search" value="Search">
                     
                      &nbsp;&nbsp;
                       <input type="submit" class="btn btn-danger m-btn m-btn--icon" name="reports_reset" id="reports_reset" value="Reset">
                    </div>
                  </div>
                </form>

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable day_wise_report" id="m_table_3">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Place Of Work</th>
                      <th>Work Information</th>
                      <th>Men</th>
                      <th>Women</th>
                      <th>Boys</th>
                      <th>Girls</th>
                      <th>Prayer Points</th>
                      <th>Achievements</th>
                      <th>Challenges</th>
                      <th>Implemented By</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
                   <?php if (isset($daywise_reports) && !empty($daywise_reports)){?>
                    <?php $i=1; foreach ($daywise_reports as $day_wise){?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php $newDate = date("d-m-Y", strtotime($day_wise['date'])); echo $newDate; ?></td>
                        <td><?php if(!empty($day_wise['area'])){ echo $day_wise['area']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['place_of_work'])){ echo $day_wise['place_of_work']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['work_information'])){ echo $day_wise['work_information']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['men'])){ echo $day_wise['men']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['women'])){ echo $day_wise['women']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['boys'])){ echo $day_wise['boys']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['girls'])){ echo $day_wise['girls']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['prayer_points'])){ echo $day_wise['prayer_points']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['achievements'])){ echo $day_wise['achievements']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['challenges'])){ echo $day_wise['challenges']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($day_wise['implemented_by'])){ echo $day_wise['implemented_by']; } else { echo 'No data found.'; }  ?></td> 
                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url('day_wise_report_view?daywise_report_id='.base64_encode($day_wise['daywise_report_id']));?>"  ><i class="la la-eye"></i>View</a>
                                <a class="dropdown-item" href="<?php echo base_url('day_wise_report_edit?daywise_report_id='.base64_encode($day_wise['daywise_report_id']));?>"><i class="la la-edit"></i>Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url('vbs/vbs/day_wise_program_report_delete?daywise_report_id='.base64_encode($day_wise['daywise_report_id']));?>" onclick="return confirm('Are You Sure');"><i class="fa fa-trash-alt"></i>Delete</a> 
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
<!--   </div>
</div> -->   