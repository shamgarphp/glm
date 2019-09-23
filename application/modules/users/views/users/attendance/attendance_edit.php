<style type="text/css">
  
.m-input
{
   border-color: #2e40d4;   
}

input[type = search] {

 border-color: #2e40d4; 
}

</style>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              
              <div class="m-portlet__body">

                
                <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Attendance Edit
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">

                    <li class="m-portlet__nav-item">
                      <a href="<?php echo base_url('attendance');?>" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air" >
                        <span>
                          <i class="fa fa-bars"></i>
                          <span>Attendance List</span>
                        </span>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                   
                  </ul>
                </div>
              </div>
                                       
                    <?php if(isset($Attendance_edit) && !empty($Attendance_edit)){?>
                  <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-left" method="POST">
                    <div class="modal-body">
                      <div class="form-group m-form__group row m--margin-top-20">
                        <label class="col-form-label col-lg-3 col-sm-12">Employees</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">

                          <select class="form-control"  name="employee" disabled="">
                            <?php if(isset($employee_list) && !empty($employee_list)){?>
                            <?php $i = 1; foreach($employee_list as $employee){?>

                            <option  value="<?php echo $employee['user_id'];?>" <?php if($Attendance_edit['emp_id'] == $employee['user_id']){ echo 'selected'; } ?> readonly><?php echo $employee['first_name'].' '.$employee['last_name'];?></option>
                            <?php } } ?>
                          </select>
                        </div>
                      </div>
                      <?php $newdate = ''; $newdate = date("m-d-Y", strtotime($Attendance_edit['attendance_date'])); ?>
                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Date</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                          <div class="input-group date">
                        <input type="text" class="form-control m-input" name="today_date" readonly placeholder="Select date" id="m_datepicker_2" value="<?php if(!empty($Attendance_edit['attendance_date'])) { echo $newdate; }?>"/>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                          </span>
                        </div>
                      </div>
                        </div>
                      </div>


                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Sign In Time</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                        <input class="form-control" id="m_timepicker_1" name="Sign_in_time"  readonly placeholder="Select time" type="text" value="<?php if(!empty($Attendance_edit['signin_time'])) { echo $Attendance_edit['signin_time']; }?>"/>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Sign Out Time</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                        <input class="form-control" id="m_timepicker_1" name="Sign_Out_time" readonly placeholder="Select time" type="text" value="<?php if(!empty($Attendance_edit['signout_time'])) { echo $Attendance_edit['signout_time']; }?>"/>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="Submit" class="btn btn-primary m-btn" value="Update" name="update_attendance">
                    </div>

                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                  </form>
                <?php }  ?>
                  <!--end::Form-->

              </div>
   </div>


    </div>
 <!--  </div>
</div> --> 
