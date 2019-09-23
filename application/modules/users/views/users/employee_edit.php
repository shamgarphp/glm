<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <div class="m-content">
      <div class="m-portlet m-portlet--tab">
        
            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" enctype="multipart/form-data">

           <div class="m-portlet">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                       <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                       Employee Edit
                                    </h3>
                                 </div>
                              </div>
                           </div>

                           <!--begin::Form-->
                              <div class="m-portlet__body">
                                 <div class="form-group m-form__group row"> 
                                  <div class="col-lg-3">
                                  <label class="col-form-label">Add Role</label>
                                  <select class="form-control m-input m-input--air" name="roles" id="roles">
                                    <option value="">Select</option>
                                    <?php foreach($roles_list as $role){ ?>
                                    <option value="<?php echo $role['role_id'];?>" <?php if($role['role_id'] == $employee_edit['role_id']) { echo 'selected'; } ?>>
                                      <?php echo $role['name'];?>
                                    </option>         
                                    <?php } ?>
                                  </select>
                                  </div> 
                                    <div class="col-lg-3">
                                       <label class="col-form-label">First Name:</label>
                                       <input type="text" class="form-control m-input" id="first_name" name="first_name" value="<?php if(isset($employee_edit['first_name']) && !empty($employee_edit['first_name'])){ echo $employee_edit['first_name']; } ?>">
                                     </div>
                                     <div class="col-lg-3">
                                       <label class="col-form-label">Last Name:</label>
                                       <input type="text" class="form-control m-input"  id="last_name" name="last_name" value="<?php if(isset($employee_edit['last_name']) && !empty($employee_edit['last_name'])){ echo $employee_edit['last_name']; } ?>">
                                     </div>
                                     <div class="col-lg-3">
                                       <label class="col-form-label">Email:</label>
                                       <input type="text" class="form-control m-input"  id="email" name="email" value="<?php if(isset($employee_edit['email']) && !empty($employee_edit['email'])){ echo $employee_edit['email']; } ?>">
                                     </div>      
                                 </div>
                                  <div class="form-group m-form__group row">  
                                  
                                      <div class="col-lg-4 ">
                                         <label for="">Gender</label>
                                        <div class="m-radio-inline">
                                          <label class="m-radio">
                                            <input type="radio" name="gender" value="M" <?php if($employee_edit['gender'] == 'M') { echo 'checked'; } ?>> Male
                                            <span></span>
                                          </label>
                                          <label class="m-radio">
                                            <input type="radio" name="gender" value="F" <?php if($employee_edit['gender'] == 'F') { echo 'checked'; } ?>> Female
                                            <span></span>
                                          </label>
                                        </div>
                                      </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Father Name:</label>
                                       <input type="text" class="form-control m-input"  id="father_name" name="father_name" value="<?php if(isset($employee_edit['father_name']) && !empty($employee_edit['father_name'])){ echo $employee_edit['father_name']; } ?>">
                                     </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Aadhar Card No:</label>
                                       <input type="text" class="form-control m-input"  id="Aadhar_no" name="Aadhar_no" value="<?php if(isset($employee_edit['aadhar']) && !empty($employee_edit['aadhar'])){ echo $employee_edit['aadhar']; } ?>">
                                     </div>      
                                 </div>
                                  <div class="form-group m-form__group row">  
                                    <div class="col-lg-4">
                                       <label class="col-form-label">Pancard No:</label>
                                       <input type="text" class="form-control m-input"  id="pan_number" name="pan_number" value="<?php if(isset($employee_edit['pan_number']) && !empty($employee_edit['pan_number'])){ echo $employee_edit['pan_number']; } ?>">
                                     </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Account Name:</label>
                                       <input type="text" class="form-control m-input"  id="account_name" name="account_name" value="<?php if(isset($employee_edit['account_name']) && !empty($employee_edit['account_name'])){ echo $employee_edit['account_name']; } ?>">
                                     </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Account No:</label>
                                       <input type="text" class="form-control m-input"  id="account_no" name="account_no" value="<?php if(isset($employee_edit['account_number']) && !empty($employee_edit['account_number'])){ echo $employee_edit['account_number']; } ?>">
                                     </div>      
                                 </div>
                                  <div class="form-group m-form__group row">  
                                    <div class="col-lg-4">
                                       <label class="col-form-label">Ifsc Code:</label>
                                       <input type="text" class="form-control m-input"  id="ifsc_code" name="ifsc_code" value="<?php if(isset($employee_edit['ifsc_Code']) && !empty($employee_edit['ifsc_Code'])){ echo $employee_edit['ifsc_Code']; } ?>">
                                     </div>
                                   

                                      <div class="col-lg-4">
                                      <label class="col-form-label" for="bank_name">Bank</label>
                                      <select class="form-control m-input m-input--air" name="bank_name" id="bank_name">
                                        <option value="">Select</option>
                                        <?php foreach($bank_names as $bank){ ?>
                                        <option value="<?php echo $bank['bank_id'];?>" <?php if($bank['bank_id'] == $employee_edit['bank_Name']) { echo 'selected'; } ?>>
                                          <?php echo $bank['bank_name'];?>
                                        </option>         
                                        <?php } ?>
                                      </select>
                                      </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Acount Type:</label>
                                       <input type="text" class="form-control m-input"  id="account_type" name="account_type" value="<?php if(isset($employee_edit['account_type']) && !empty($employee_edit['account_type'])){ echo $employee_edit['account_type']; } ?>">
                                     </div>      
                                 </div>
                                  <div class="form-group m-form__group row">  
                                    <div class="col-lg-4">
                                       <label class="col-form-label">Highest Qulification:</label>
                                       <input type="text" class="form-control m-input"  id="high_qual" name="high_qual" value="<?php if(isset($employee_edit['highest_qualification']) && !empty($employee_edit['highest_qualification'])){ echo $employee_edit['highest_qualification']; } ?>">
                                     </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Place Appointment:</label>
                                       <input type="text" class="form-control m-input"  id="place_apnmt" name="place_apnmt" value="<?php if(isset($employee_edit['place_appointment']) && !empty($employee_edit['place_appointment'])){ echo $employee_edit['place_appointment']; } ?>">
                                     </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Reporting To:</label>
                                       <input type="text" class="form-control m-input"  id="report_to" name="report_to" value="<?php if(isset($employee_edit['reporting_to']) && !empty($employee_edit['reporting_to'])){ echo $employee_edit['reporting_to']; } ?>">
                                     </div>      
                                 </div>
                                  <div class="form-group m-form__group row">  
                                    <div class="col-lg-4">
                                       <label class="col-form-label">Devotional Qualification:</label>
                                       <input type="text" class="form-control m-input"  id="dev_qual" name="dev_qual" value="<?php if(isset($employee_edit['dev_qualification']) && !empty($employee_edit['dev_qualification'])){ echo $employee_edit['dev_qualification']; } ?>">
                                     </div>
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Job title:</label>
                                       <input type="text" class="form-control m-input"  id="job_title" name="job_title" value="<?php if(isset($employee_edit['Job_title']) && !empty($employee_edit['Job_title'])){ echo $employee_edit['Job_title']; } ?>">
                                     </div>
                                 
                                      <div class="col-md-4">
                                      <label class="col-form-label" for="depart_name">Department</label>
                                       <select class="form-control m-input m-input--air" name="department" id="department">
                                        <option value="">Select</option>
                                        <?php foreach($department_list as $department){ ?>
                                        <option value="<?php echo $department['dept_id'];?>" <?php if($department['dept_id'] == $employee_edit['department']) { echo 'selected'; } ?>>
                                          <?php echo $department['dept_name'];?>
                                        </option>         
                                        <?php } ?>
                                      </select>
                                        </div>      
                                 </div>
                                 <div class="form-group m-form__group row">  
                                      <div class="col-lg-6">
                                        <label class="col-form-label">Job Description:</label>
                                        <textarea class="form-control m-input m-input--air" id="job_desc" name="job_desc" rows="2"><?php if(isset($employee_edit['job_description']) && !empty($employee_edit['job_description'])){ echo $employee_edit['job_description']; } ?></textarea>
                                      </div>

                                        <div class="col-lg-6">
                                         <label class="col-form-label">DoB:</label>
                                         <input type="date" class="form-control m-input"  id="dob" name="dob" value="<?php if(isset($employee_edit['birth_date']) && !empty($employee_edit['birth_date'])){ echo $employee_edit['birth_date']; } ?>">
                                       </div>
                                     </div>      
                                 </div>

                                 <div class="form-group m-form__group row">  

                                     <div class="col-lg-4">
                                      <!--  <label class="col-form-label">Photo:</label> -->
                                         <img src="<?php echo base_url('uploads/users/').$employee_edit['disc_profile']; ?>" height="100" width="100">
                                       <div class="custom-file">

                                      <input type="file" name="Profile_pic" id="Profile_pic" class="">
                                       <input type="hidden" name="old_pic" id="old_pic" class=""  value="<?php if(!empty($employee_edit['disc_profile'])) {echo $employee_edit['disc_profile']; }  ?>">
                                      <label class="custom-file-label" for="Profile_pic">Choose file</label>
                                     </div>
                                      
                                     </div> 
                                 </div>

                                 <div class="form-group m-form__group row">  
                                     <div class="col-lg-4">
                                       <label class="col-form-label">Resume:</label>
                                       <p>
                                        <?php if(isset($employee_edit['resume']) && !empty($employee_edit['resume'])){ ?>
                                        <span> 
                                        <a style="color: blue" href="<?php echo base_url().'users/users/file_download?employee_id='.base64_encode($employee_edit['user_id']); ?>"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;<?php echo $employee_edit['resume']; ?></a></span>
                                        <?php } else { echo "Not available"; } ?>
                                     
                                        </p>
                                     </div>      
                                 </div>
                              </div>
                               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                               <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                 <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                       <div class="col-lg-5"></div>
                                       <div class="col-lg-7">
                                          <input name="Student_Update" id="Student_Update" type="submit" value="Update" class="btn btn-brand">
                                          <button type="reset" class="btn btn-secondary">Cancel</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           <!--end::Form-->
                           </div>
        
                   </form>       

      <!--end::Form-->
      <!-- </div> -->
   </div>
