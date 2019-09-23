<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      VBS/REPORTS/PROGRAM REVIEW
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                 
                </div>
              </div>
             
              <div class="m-portlet__body">

                <!--begin: Search Form -->
                <form class="m-form m-form--fit m--margin-bottom-20" method="post">
                  <div class="row m--margin-bottom-20">
                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                      <label>Category:</label>
                      <select class="form-control m-input" data-col-index="6">
                        <option value="">Select</option>
                      </select>
                    </div>
                     <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
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
                  </div>

                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                  <div class="m-separator m-separator--md m-separator--dashed"></div>
                 <div class="row">
                    <div class="col-lg-12">
                     <input type="submit" class="btn btn-brand m-btn m-btn--icon" name="programreview_search" value="Search">
                     
                      &nbsp;&nbsp;
                       <input type="submit" class="btn btn-danger m-btn m-btn--icon" name="reports_reset" id="reports_reset" value="Reset">
                    </div>
                  </div>
                </form>

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable program_review" id="m_table_1">
                  <thead>
                    <tr>
                      <th class="mb-0 pb-0"><span class="check_select"><input type="checkbox" id="quetion_all" name="all_questions[]"><label for="quetion_all"></label></span></th>
                      <th>S.No</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Review Category</th>
                      <th>Review</th>
                      <th>Location</th>
                      <th>Program Aim</th>
                      <th>Date</th>
                      <!-- <th>Status</th> -->
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (isset($program_reviews) && !empty($program_reviews)){?>
                    <?php $i=1; foreach ($program_reviews as $program){?>
                    <tr>
                      <td class="check_select checkboxes"><input type="checkbox" name="quetions_list[]" id="quetions_list<?php //echo $questions['quetion_id']; ?>" value="<?php  //echo $questions['quetion_id']; ?>"><label for="quetions_list<?php  //echo $questions['quetion_id']; ?>"></label></td>
                        <td><?php echo $i++; ?></td> 
                        <td><?php echo $program['phone']; ?></td>
                         <td><?php echo $program['email']; ?></td>
                        <td><?php echo $program['review_category']; ?></td>
                         <td><?php echo substr(strip_tags($program['review']),0,35).'.....'; ?></td> 
                        <td><?php echo $program['area']; ?></td>
                        <td><?php echo $program['program_aim']; ?></td>
                        <td><?php echo $program['created_on']; ?></td>   
                         <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url('program_review_view?program_review_id='.base64_encode($program['program_review_id']));?>"  ><i class="la la-eye"></i>View</a>
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i>Edit</a>
                                 <a class="dropdown-item" href="<?php echo base_url('vbs/vbs/program_review_delete?id='.base64_encode($program['program_review_id']));?>" onclick="return confirm('Are You Sure');"><i class="la la-tra"></i>Delete</a> 
                            </div>
                        </span>
                      
                    </td>
                  </tr>
                  <?php } } ?>
                  </tbody>
                   
                 <!--  <tfoot>
                    <tr>
                      <th>Record ID</th>
                      <th>Order ID</th>
                      <th>Country</th>
                      <th>Ship City</th>
                      <th>Company Agent</th>
                      <th>Ship Date</th>
                      <th>Status</th>
                      <th>Type</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot> -->
                </table>
              </div>  
            </div>
    </div>
 <!--  </div>
</div>    -->