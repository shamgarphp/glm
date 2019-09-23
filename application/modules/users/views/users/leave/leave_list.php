<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">
<div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Leave List
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">

                    <li class="m-portlet__nav-item">
                      <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#m_select2_modal">
                        <span>
                          <i class="la la-cart-plus"></i>
                          <span>Add Leave</span>
                        </span>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                    
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                  <thead>
                    <tr>
                      <th>Employee Name</th>
                      <th>Date</th>
                      <th>Sign In</th>
                      <th>Sign Out</th>
                      <th>Working Hour</th>
                      <!-- th>Actions</th> -->
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(isset($attendance_list) && !empty($attendance_list)){?>
                  <?php $i = 1; foreach($attendance_list as $attendance){?>
                    <tr>
                    <td><?php if(!empty($attendance['first_name']) && !empty($attendance['first_name'])) { echo ucfirst($attendance['first_name'].' '.$attendance['last_name']);} ?> </td>
                    <td> <?php if(!empty($attendance['attendance_date'])) { echo ucfirst($attendance['attendance_date']);} ?> </td>
                    <td> <?php if(!empty($attendance['signin_time'])) { echo ucfirst($attendance['signin_time']);} ?> </td>
                    <td> <?php if(!empty($attendance['signout_time'])) { echo ucfirst($attendance['signout_time']);} ?> </td>
                    <td> <?php if(!empty($attendance['status'])) { echo ucfirst($attendance['status']);} ?> </td>
                    <td>  <a href="<?php echo base_url('AttendanceEdit?id='.base64_encode($attendance['attendace_id']));?>" class="btn btn-success m-btn btn-sm   m-btn m-btn--icon">
                              <span>
                                <i class="la la-dustbin"></i>
                                <span>Edit</span>
                              </span>
                            </a> </td>
                    <td>  <a href="<?php echo base_url('users/Attendance/Attendance_delete?id='.base64_encode($attendance['attendace_id']));?>" class="btn btn-danger m-btn btn-sm  m-btn m-btn--icon">
                              <span>
                                <i class="la la-dustbin"></i>
                                <span>Delete</span>
                              </span>
                            </a> </td>
                    </tr>
                  <?php } } ?>
                    
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Employee Name</th>
                      <th>Date</th>
                      <th>Sign In</th>
                      <th>Sign Out</th>
                      <th>Working Hour</th>
                      <th>Actions</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

          </div>


       <!--begin::Modal-->
            <div class="modal fade" id="m_select2_modal" role="dialog" aria-labelledby="" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="">Add Leave </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="la la-remove"></span>
                    </button>
                  </div>
                  <form class="m-form m-form--fit m-form--label-align-right" method="POST">
                    <div class="modal-body">
                      <div class="form-group m-form__group row m--margin-top-20">
                        <label class="col-form-label col-lg-3 col-sm-12">Employees</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                          <select class="form-control m-select2" id="m_select2_1_modal" name="employee">
                            <option value="">Select Employee</option>
                            <?php if(isset($employee_list) && !empty($employee_list)){?>
                            <?php $i = 1; foreach($employee_list as $employee_list){?>
                            <option value="<?php echo $employee_list['user_id'];?>"><?php echo $employee_list['first_name'].' '.$employee_list['last_name'];?></option>
                            <?php } } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group m-form__group row m--margin-top-20">
                        <label class="col-form-label col-lg-3 col-sm-12">Leave Type</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                          <select class="form-control"  name="leave_type">
                            <option value="">Select leave type</option>
                            <?php if(isset($leave_types) && !empty($leave_types)){?>
                            <?php $i = 1; foreach($leave_types as $leaves){?>
                            <option value="<?php echo $leaves['type_id'];?>"><?php echo $leaves['name'];?></option>
                            <?php } } ?>
                          </select>
                        </div>
                      </div>

                     <div class="form-group m-form__group row m--margin-top-20">
                           <label class="col-form-label col-lg-3 col-sm-12">Leave Duration </label>
                            <div class="m-radio-inline ">
                              <label class="m-radio">
                                <input name="type" type="radio" id="radio_2" data-value="Full" class="type" value="Full Day"> Hourly
                                <span></span>
                              </label>
                              <label class="m-radio">
                                <input name="type" type="radio" class="with-gap duration" id="radio_3" data-value="More" value="More than One day"> Full Day
                                <span></span>
                              </label>
                              <label class="m-radio">
                                <input name="type" type="radio" class="with-gap duration" id="radio_3" data-value="More" value="More than One day"> Above a Day
                                <span></span>
                              </label>
                            </div>      
                    </div>
                   

                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Date</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                          <div class="input-group date">
                        <input type="text" class="form-control m-input" name="today_date" readonly placeholder="Select date" id="m_datepicker_2" />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                          </span>
                        </div>
                      </div>
                        </div>
                      </div>

                        <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Date</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                          <div class="input-group date">
                        <input type="text" class="form-control m-input" name="today_date" readonly placeholder="Select date" id="m_datepicker_2" />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                          </span>
                        </div>
                      </div>
                        </div>
                      </div>

                      <div class="form-group m-form__group row m--margin-top-20">
                        <label class="col-form-label col-lg-3 col-sm-12">Length</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                          <select class="form-control"  name="leave_type">
                            <option value="">Select Hour</option>
                            <option value="1">One hour</option>
                            <option value="2">Two hour</option>
                            <option value="3">Three hour</option>
                            <option value="4">Four hour</option>
                            <option value="5">Five hour</option>
                            <option value="6">Six hour</option>
                            <option value="7">Seven hour</option>
                            <option value="8">Eight hour</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Reason</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                        <textarea class="form-control m-input" id="exampleTextarea" rows="3" name="Reason"></textarea>
                        </div>
                      </div>

                      
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-brand m-btn" data-dismiss="modal">Close</button>
                      <input type="Submit" class="btn btn-secondary m-btn" value="Submit" name="add_attendance">
                    </div>

                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                  </form>
                </div>
              </div>
            </div>

            <!--end::Modal-->      