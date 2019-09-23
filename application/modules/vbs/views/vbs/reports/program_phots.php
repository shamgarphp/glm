<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     VBS/REPORTS/PROGRAM PHOTOS
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
                <form class="m-form m-form--fit m--margin-bottom-20" method="post">
                  <div class="row m--margin-bottom-20">
                  
                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                      <label>Category:</label>
                      <select class="form-control m-input" data-col-index="2">
                        <option value="">Select</option>
                      </select>
                    </div>

                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                      <label>Location:</label>
                        <select class="form-control m-input staff_location" data-col-index="6" name="staff_location">
                       <?php if(isset($locations_list) && !empty($locations_list)){?>
                      
                       <option value="">select</option>
                       <?php $i = 1; foreach($locations_list as $locations){?>
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
                     <input type="submit" class="btn btn-brand m-btn m-btn--icon" name="photos_search" value="Search">
                     
                      &nbsp;&nbsp;
                       <input type="submit" class="btn btn-danger m-btn m-btn--icon" name="reports_reset" id="reports_reset" value="Reset">
                    </div>
                  </div>
                </form>

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable program_photo" id="m_table_1">
                  <thead>
                    <tr>
                      <th class="mb-0 pb-0"><span class="check_select"><input type="checkbox" id="quetion_all" name="all_questions[]"><label for="quetion_all"></label></span></th>
                      <th>S.No</th>
                      <th>Img Category</th>
                      <th>Image Description</th>
                      <th>Location</th>
                      <th>Program Aim</th>
                      <th>Implemented By</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if (isset($program_photos) && !empty($program_photos)){?>
                    <?php $i=1; foreach ($program_photos as $photos){?>
                       <tr>
                          <td class="check_select checkboxes"><input type="checkbox" name="quetions_list[]" id="quetions_list<?php //echo $questions['quetion_id']; ?>" value="<?php  //echo $questions['quetion_id']; ?>"><label for="quetions_list<?php  //echo $questions['quetion_id']; ?>"></label></td>
                        <td><?php echo $i++; ?></td> 
                        <td><?php if(!empty($photos['img_category'])){ echo $photos['img_category']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($photos['img_desc'])){ echo $photos['img_desc']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($photos['area'])){ echo $photos['area']; } else { echo 'No data found.'; }  ?></td>
                        <td><?php if(!empty($photos['program_aim'])){ echo $photos['program_aim']; } else { echo 'No data found.'; }  ?></td>
                         <td><?php if(!empty($finance_report['first_name'])){ echo $finance_report['first_name'].' '.$finance_report['last_name']; } else { echo 'No data found.'; }  ?></td>

                        <td><?php $newDate = date("d-m-Y", strtotime($photos['date'])); echo $newDate; ?></td>
                         <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url('program_photo_view?photo_id='.base64_encode($photos['program_image_id']));?>"  ><i class="la la-eye"></i>View</a>
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i>Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url('vbs/vbs/program_photos_delete?id='.base64_encode($photos['program_image_id']));?>" onclick="return confirm('Are You Sure');"><i class="la la-tra"></i>Delete</a>  

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
</div>  -->  