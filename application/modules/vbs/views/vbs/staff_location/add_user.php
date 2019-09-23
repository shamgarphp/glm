<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('admin_assets/other_plugins/select2/docs/'); ?>css/select2-bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url('admin_assets/other_plugins/select2/docs/'); ?>css/gh-pages.css">
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

       <form class="m-form m-form--fit m-form--label-align-left" method="POST">
              
       <div class="m-portlet__body">
       <div class="form-group m-form__group row" >

       <div class="col-lg-4 col-md-4 col-sm-4">
       <label for="single" class="control-label">Add Location</label>
       <select id="single" class="form-control select2-single" name="location">
         <option></option>
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
       <label for="single" class="control-label">Other Location</label>
       <input type="text" class="form-control m-input m-input--air" name="new_location" id="prog_admin_new" placeholder="Enter other location">
       </div>
     </div>

     <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Program admin</label>
       <select id="single" class="form-control select2-single" name="prog_admin">
         <option></option>
        <option value="">select</option>
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="prog_admin_new" id="prog_admin_new" placeholder="Enter others">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="prog_admin_phone" id="phone_new" placeholder="Enter phone Number">
       </div>

      <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="prog_admin_description" id="new_description" placeholder="Enter description">
       </div>
     </div>


     <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Finance admin</label>
       <select id="single" class="form-control select2-single" name="finan_admin">
         <option></option>
        <option value="">select</option>
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="fina_admin_new" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="finance_admin_phone" id="phone_new" placeholder="Enter phone Number">
       </div>


       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="finance_admin_descript" id="new_description" placeholder="Enter description">
       </div>
     </div>

     <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Reporting Staff 1</label>
       <select id="single" class="form-control select2-single" name="reprt_stf">
         <option></option>
        <option value="">select</option>
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="reprt_stf_new" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="report_admin_phone" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="report_admin_descript" id="new_description" placeholder="Enter description">
       </div>
     </div>


     <div class="form-group m-form__group row" ><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Reporting Staff 2</label><select id="single" class="form-control select2-single" name="second_reprt_stf"><option></option><option value="">select</option><?php if (isset($employee_list) && !empty($employee_list)) { ?><?php foreach($employee_list as $employees){ ?><option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" ><?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?></option><?php } } ?></select></div><div class="col-lg-3 col-md-3 col-sm-3"><label for="single" class="control-label">Others</label><input type="text" class="form-control m-input m-input--air" name="sec_reprt_stf_new" id="prog_admin_new" placeholder="Enter others"></div>
     <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="report_second_phone" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="report_second_descript" id="new_description" placeholder="Enter description">
       </div>
   </div>

  <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Photography</label>
       <select id="single" class="form-control select2-single" name="photography">
         <option></option>
        <option value="">select</option>
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="photography_new" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="photography_phone" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="photography_descript" id="new_description" placeholder="Enter description">
       </div>
     </div>

     <div class="form-group m-form__group row add_more" >&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-sm btn-primary btn-block col-lg- add" >Add More Resource Persons</button>
     </div>


     <div class="form-group m-form__group row">
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Resource Person 1</label>
       <select id="single" class="form-control select2-single" name="resource[]">
         <option></option>
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>
       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_new[]" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_phone[]" id="resource_phone" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_descript[]" id="new_description" placeholder="Enter description">
       </div>
     </div>

     <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Resource Person 2</label>
       <select id="single" class="form-control select2-single" name="resource[]">
         <option></option>
        
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_new[]" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_phone[]" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_descript[]" id="new_description" placeholder="Enter description">
       </div>
     </div>


    <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Resource Person 3</label>
       <select id="single" class="form-control select2-single" name="resource[]">
         <option></option>
       
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_new[]" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_phone[]" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="resource_descript[]" id="new_description" placeholder="Enter description">
       </div>
     </div>

      <div id="Resource">
      </div>

     <div class="form-group m-form__group row teaching_staff" >&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-sm btn-primary btn-block col-lg-12" >Add More Teaching Staff</button>
     </div>

     <div class="form-group m-form__group row">
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Teaching Staff 1</label>
       <select id="single" class="form-control select2-single" name="teaching[]">
         <option></option>
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>
       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_new[]" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_phone[]" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_descript[]" id="new_description" placeholder="Enter description">
       </div>
     </div>

     <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Teaching Staff 2</label>
       <select id="single" class="form-control select2-single" name="teaching[]">
         <option></option>
        
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_new[]" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_phone[]" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_descript[]" id="new_description" placeholder="Enter description">
       </div>
     </div>

      <div class="form-group m-form__group row" >
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Teaching Staff 3</label>
       <select id="single" class="form-control select2-single" name="teaching[]">
         <option></option>
       
         <?php if (isset($employee_list) && !empty($employee_list)) { ?>
         <?php foreach($employee_list as $employees){ ?>
         <option  class="text-uppercase" value="<?php echo $employees['user_id'];?>" >
         <?php  echo $employees['first_name'].' '.$employees['last_name'].', '.$employees['phone'];  ?>
         </option>
         <?php } } ?>

       </select>
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Others</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_new[]" id="prog_admin_new" placeholder="Enter others">
       </div>
       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">Phone</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_phone[]" id="phone_new" placeholder="Enter phone Number">
       </div>

       <div class="col-lg-3 col-md-3 col-sm-3">
       <label for="single" class="control-label">description</label>
       <input type="text" class="form-control m-input m-input--air" name="teach_descript[]" id="new_description" placeholder="Enter description">
       </div>
     </div>

     <div id="teaching_staff">
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
   </div>

   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
 
   </form>

    </div>
   <!--  </div> -->
 <!--   </div> --> 
  <!-- </div> 
  </div>  -->



