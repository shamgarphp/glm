<div class="m-grid__item m-grid__item--fluid m-wrapper">

          <div class="m-content">
        
            <div class="m-portlet m-portlet--tab">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                          <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                          User Registration
                        </h3>
                      </div>
                    </div>
                  </div>

                  <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                      <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3">
                        <label for="exampleSelect1">Add Role</label>
                        <select class="form-control m-input m-input--air" name="roles" id="roles">
                          <option value="">Select</option>
                          <?php foreach($roles_list as $role){ ?>
                          <option value="<?php echo $role['role_id'];?>">
                            <?php echo $role['name'];?>
                          </option>         
                          <?php } ?>
                        </select>
                        </div>
                         <div class="col-md-3">
                         <label for="first_name">First Name</label>
                        <input type="text" class="form-control m-input m-input--air" name="first_name" id="first_name"  placeholder="Enter first Name">
                        </div>
                         <div class="col-md-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control m-input m-input--air"  name="last_name"  id="last_name"  placeholder="Enter Last Name">
                        </div>

                      </div><br><br>

                     <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <div class="col-md-3 ">
                           <label for="">Gender</label>
                          <div class="m-radio-inline">
                            <label class="m-radio">
                              <input type="radio" name="gender" value="M" checked="checked"> Male
                              <span></span>
                            </label>
                            <label class="m-radio">
                              <input type="radio" name="gender" value="F"> Female
                              <span></span>
                            </label>
                          </div>
                        </div>

                        <div class="col-md-3">
                         <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control m-input m-input--air" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <span class="m-form__help"></span>
                        </div>
                         <div class="col-md-3">
                         <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control m-input m-input--air" id="pass" name="pass"  placeholder="Password">
                        </div>

                      </div><br><br>


                        <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3 ">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control m-input m-input--air"  name="dob"  id="dob"  placeholder="Enter Last Name">
                        </div>
                         <div class="col-md-3">
                        <label for="father_name">Father Name</label>
                        <input type="text" class="form-control m-input m-input--air"  name="father_name"  id="father_name"  placeholder="Enter Father Name">
                        </div>
                         <div class="col-md-3">
                        <label for="Aadhar_no">Aadhar No</label>
                        <input type="Number" class="form-control m-input m-input--air"  name="Aadhar_no"  id="Aadhar_no"  placeholder="Enter Aadhar No">
                        </div>

                      </div><br><br>



                       <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3 ">
                       <label for="pan_number">Pan Number</label>
                        <input type="text" class="form-control m-input m-input--air"  name="pan_number"  id="pan_number"  placeholder="Enter Pan Number">
                        </div>
                         <div class="col-md-3">
                        <label for="account_name">Account Name</label>
                        <input type="text" class="form-control m-input m-input--air"  name="account_name"  id="account_name"  placeholder="Enter Account Name">
                        </div>
                         <div class="col-md-3">
                        <label for="accojunt_no">Account No</label>
                        <input type="text" class="form-control m-input m-input--air"  name="accojunt_no"  id="accojunt_no"  placeholder="Enter Account No">
                        </div>

                      </div><br><br> 

                     
                      <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3">
                       <label for="father_name">Ifsc Code</label>
                        <input type="text" class="form-control m-input m-input--air"  name="ifsc_code"  id="ifsc_code"  placeholder="Enter Ifsc Code">
                        </div>
                        <div class="col-md-3">
                        <label for="bank_name">Bank</label>
                        <select class="form-control m-input m-input--air" name="bank_name" id="bank_name">
                          <option value="">Select</option>
                          <?php foreach($bank_names as $bank){ ?>
                          <option value="<?php echo $bank['bank_id'];?>">
                            <?php echo $bank['bank_name'];?>
                          </option>         
                          <?php } ?>
                        </select>
                        </div>
                        <div class="col-md-3">
                        <label for="account_type">Account Type</label>
                        <input type="text" class="form-control m-input m-input--air"  name="account_type"  id="account_type"  placeholder="Enter Account Type">
                        </div>
                      </div><br><br> 

                       <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="col-md-9">
                       <label for="high_qual">Highest Qualification</label>
                        <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter Highest Qualification">
                      </div>
                      </div><br><br> 

                       <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3 ">
                       <label for="place_apnmt">Place Appointment</label>
                        <input type="text" class="form-control m-input m-input--air" id="place_apnmt" name="place_apnmt"  placeholder="Enter Place Appointment">
                        </div>
                         <div class="col-md-3">
                        <label for="report_to">Reporting to</label>
                        <input type="text" class="form-control m-input m-input--air"  name="report_to"  id="report_to" placeholder="Enter Reporting to">
                        </div>
                         <div class="col-md-3">
                        <label for="dev_qual">Devotional Qualification</label>
                        <input type="text" class="form-control m-input m-input--air"  name="dev_qual"  id="dev_qual"  placeholder="Enter Devotional Qualification">
                        </div>

                      </div><br><br>

                       <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-3 ">
                       <label for="job_title">Job title</label>
                        <input type="text" class="form-control m-input m-input--air" id="job_title" name="job_title"  placeholder="Enter Job title">
                        </div>
                         <div class="col-md-3">
                        <label for="depart_name">Department</label>
                         <select class="form-control m-input m-input--air" name="department" id="department">
                          <option value="">Select</option>
                          <?php foreach($department_list as $department){ ?>
                          <option value="<?php echo $department['dept_id'];?>">
                            <?php echo $department['dept_name'];?>
                          </option>         
                          <?php } ?>
                        </select>
                          </div>
                        <div class="col-md-3">
                        <label for="job_desc">Job Description</label>
                        <textarea class="form-control m-input m-input--air" id="job_desc" name="job_desc" rows="1"></textarea>
                      </div>

                      </div><br><br>

                       <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="col-md-9 ">
                            <label for="Profile_pic">Photo</label>
                         
                          <div class="custom-file">
                            <input type="file" name="Profile_pic" id="Profile_pic" class="">
                            <label class="custom-file-label" for="Profile_pic">Choose file</label>
                          </div>
                        </div>
                       </div><br><br>

                       <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                      <div class="col-md-9 ">
                      <label for="resume">Resume</label>
                       
                        <div class="custom-file">
                          <input type="file" name="resume" id="resume" class="custom-file-input">
                          <label class="custom-file-label" for="resume">Choose file</label>
                        </div>
                      </div>
                       </div><br><br>

                    </div>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions">
                        <button type="Submit" class="btn btn-accent" name="add_user" id="add_user" value="add_user">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </form>

                  <!--end::Form-->
                </div>
          </div>
        <!-- </div> -->


     