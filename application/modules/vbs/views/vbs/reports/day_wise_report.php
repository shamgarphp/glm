<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
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
                  
                </div>
              </div>
              <div class="m-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable day_wise_report" id="m_table_1">
                  <thead>

                    <tr>
                      <th>S.No</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Place Of Work</th>
                      <th>Work Information</th>
                      <th>Men</th>
                      <th><b style="display: none;">Achievements</b></th>
                      <th>Women</th>
                      <th>Boys</th>
                      <th>Girls</th>
                      <th><b style="display: none;">Prayer Points</b></th>
                     
                      <th><b style="display: none;">Challenges</b></th>
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
                    <td ><b style="display: none;"><?php if(!empty($day_wise['achievements'])){ echo $day_wise['achievements']; } else { echo 'No data found.'; }  ?></b></td>
                    <td><?php if(!empty($day_wise['women'])){ echo $day_wise['women']; } else { echo 'No data found.'; }  ?></td>
                    <td><?php if(!empty($day_wise['boys'])){ echo $day_wise['boys']; } else { echo 'No data found.'; }  ?></td>
                    <td><?php if(!empty($day_wise['girls'])){ echo $day_wise['girls']; } else { echo 'No data found.'; }  ?></td>
                        <td><b style="display: none;"><?php if(!empty($day_wise['prayer_points'])){ echo $day_wise['prayer_points']; } else { echo 'No data found.'; }  ?></b></td>
                       
                        <td><b style="display: none;"><?php if(!empty($day_wise['challenges'])){ echo $day_wise['challenges']; } else { echo 'No data found.'; }  ?></b></td>
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
           <!--  </div> -->