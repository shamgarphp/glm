<div class="m-grid__item m-grid__item--fluid m-wrapper">
<div class="m-content">

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Add Staff
                    </h3>
                  </div>
                </div>
              </div>

              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-left" method="POST">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group row" >
                    <label class="col-form-label col-lg-12 col-sm-12">Add Location</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_1" name="location">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>
                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">

                        <input type="text" class="form-control m-input m-input--air" name="new_location" id="searchInput" placeholder="Enter Other Location">
                      </div>

                     <label class="col-form-label col-lg-12 col-sm-12">Program Admin</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_2" name="program_admin">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>
                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="prog_admin_new" id="prog_admin_new" placeholder="Enter Other Location">
                      </div>


                    <label class="col-form-label col-lg-12 col-sm-12">Finance Admin</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_3" name="finance_admin">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>
                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="new_user[]" id="searchInput" placeholder="Enter Other Location">
                      </div>

                       <label class="col-form-label col-lg-12 col-sm-12">Finance Admin</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_4" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>
                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="new_user[]" id="searchInput" placeholder="Enter Other Location">
                      </div>

                       <label class="col-form-label col-lg-12 col-sm-12">Reporting Staff 1</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_5" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>
                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="new_user[]" id="searchInput" placeholder="Enter Other Location">
                      </div>

                    <label class="col-form-label col-lg-12 col-sm-12">Reporting Staff 2</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_7" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="new_user[]" id="searchInput" placeholder="Enter Other Location">
                      </div>

                    <label class="col-form-label col-lg-12 col-sm-12">Photography</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_8" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>

                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="address" id="searchInput" placeholder="Enter Other Location">
                      </div>


                        <label class="col-form-label col-lg-12 col-sm-12">Photography</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_9" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>

                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="address" id="searchInput" placeholder="Enter Other Location">
                      </div>



                        <label class="col-form-label col-lg-12 col-sm-12">Photography</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_10" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>

                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="address" id="searchInput" placeholder="Enter Other Location">
                      </div>

                      <label class="col-form-label col-lg-12 col-sm-12">Photography</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_11" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>


                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="address" id="searchInput" placeholder="Enter Other Location">
                      </div> 
                  
                     <label class="col-form-label col-lg-12 col-sm-12">Photography</label>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <select class="form-control m-select2" id="m_select2_20" name="username[]">
                        <option value="">select</option>
                           <?php if (isset($location_list) && !empty($location_list)) { ?>
                            <?php foreach($location_list as $location){ ?>
                            <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" >
                            <?php  echo $location['area'];  ?>
                            </option>
                            <?php } } ?>
                        </select>
                    </div>


                  <!--  <label class="col-form-label col-lg-12 col-sm-6">Add Location</label>  -->
                     <div class="col-lg-4 col-md-4 col-sm-4">
                        <input type="text" class="form-control m-input m-input--air" name="address" id="searchInput" placeholder="Enter Other Location">
                      </div> 
 

                  </div>
                  
                </div>

                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                    <div class="row">
                      <div class="col-lg-9 ml-lg-auto">
                        <button type="Submit" class="btn btn-brand" name="add_staff" value="add_staff">Submit</button>
                        <button type="reset" class="btn btn-danger ">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <!--end::Form-->
            </div>
           </div> 
     </div> 

            <!--end::Portlet-->

            <!--begin::Modal-->
           

            <!--end::Modal-->

            <!--begin::Portlet-->
           

            <!--end::Portlet-->
           <!--  </div>
          </div>
           </div> -->