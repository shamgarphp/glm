<style type="text/css">
#comment{height: 115px;}
</style>
<head>
  <!-- <title>Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</title> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
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
                          <b>Apply Leave</b>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right" name="insert_form" id="insert_form" method="POST" action="<?php echo base_url('saveLeave'); ?>">
                    <div class="m-portlet__body">
                    <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                    <div class="col-md-5">
	                      <h5>Leave Type</h5>
	                      <select class="form-control m-input" data-col-index="6" name="leave_type_id" id="leave_type_id">
	                       <?php if(isset($leaveTypes) && !empty($leaveTypes)){?>
	                        <option value="">Select Leave Type</option>
	                       <?php $i = 1; foreach($leaveTypes as $leaveType){?>
	                       <option value="<?php echo $leaveType['id'];?>" <?php echo set_select('leaveType', $leaveType['id']);?>><?php echo $leaveType['name'];?></option>
	                       <?php } } ?>
	                     </select>
	                    </div>                    
	          		</div>
          			<div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                    <div class="col-md-5">
	                       <h5>From Date</h5>
	                        <input type="date" class="form-control m-input m-input--air"  name="start_date"  id="start_date"  placeholder="Enter Start Date">
	                    </div>                    
          			</div>
          			<div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <div class="col-md-5">
                       <h5>To Date</h5>
                        <input type="date" class="form-control m-input m-input--air"  name="end_date"  id="end_date"  placeholder="Enter End Date">
                    </div>
          			</div>
          			<div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                   
                    <div class="col-md-5">
                        <h5>Comment</h5>
                        <textarea class="form-control m-input m-input--air" id="comment" name="comment" rows="1" placeholder="Enter Comment"></textarea>
                    </div>
                    
          			</div><br>                   					
					     
	                <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                  <div class="col-md-4">
	                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	                  <div class="m-portlet__foot m-portlet__foot--fit">
	                    <div class="m-form__actions">
	                      <button type="submit" class="btn btn-accent" name="apply_leave" id="apply_leave" value="apply_leave" style="background: #33ac3f">Apply</button>
	                      <button type="reset" class="btn btn-secondary reset" id="cancelBtn" style="background-color: lightgray;">Cancel</button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
            </div>
              
            </form>

            <!--end::Form-->
          </div>
      </div>

    




     