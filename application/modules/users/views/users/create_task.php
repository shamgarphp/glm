<style type="text/css">
	table.table th {
    background: #3d3d6f;
    color: #fff;
    padding: 7px;
    border: 1px solid #fff;
    text-align: left;
}
.btn_add_row{
	background-color: #00c5dc;
    border-color: #00c5dc;
    color: #fff;
    font-size: 15px;
    padding: 6px 7px;
    border: none;
}
.btn_add_people{
	background-color: #00c5dc;
    border-color: #00c5dc;
    color: #fff;
    font-size: 15px;
    padding: 6px 7px;
    border: none;
}
.btn_add_resource{
	background-color: #00c5dc;
    border-color: #00c5dc;
    color: #fff;
    font-size: 15px;
    padding: 6px 7px;
    border: none;
}
table tbody tr.odd td {
    background-color: #ffffff;
}
/*table {
    border-collapse: none;
}*/
</style>
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
                          Create Task
                        </h3>
                      </div>
                    </div>
                  </div>

                  <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="<?php echo base_url('saveTask'); ?>">
                    <div class="m-portlet__body">
                    <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="col-md-4">
                       <label for="task_title">Task Title</label>
                        <input type="text" class="form-control m-input m-input--air"  name="task_title"  id="task_title"  placeholder="Enter Task Title">
                      </div>
                    
                      <div class="col-md-4">
                        <label for="task_description">Task Description</label>
                        <textarea class="form-control m-input m-input--air" id="task_description" name="task_description" rows="1" placeholder="Enter Task Description"></textarea>
                      </div>
                    <div class="col-md-3">
                      <label for="description">Location</label>
                    	<select class="form-control m-input" data-col-index="6" name="location_id" id="location_id">
                       <?php if(isset($staff_locations) && !empty($staff_locations)){?>
                        <option value="">Select Location</option>
                       <?php $i = 1; foreach($staff_locations as $staff_location){?>
                       <option value="<?php echo $staff_location['location_id'];?>" <?php echo set_select('staff_location', $staff_location['location_id']);?>><?php echo $staff_location['area'];?></option>
                       <?php } } ?>
                     </select>
					</div>
					</div><br><br>
					<div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="col-md-9">
						<div class="tableWrapper" style="overflow:auto">
						<table style="width:100%" class="table" id="item_table">
		                	<thead>
		                    <tr>
		                        <th style="width:2%" class="center"><input type="checkbox"></th>
		                        <th>Days</th>
		                        <th>Start Time</th>
		                        <th>End Time</th>
		                    </tr>
                			</thead>
                			<tbody class="item" id="new_row">                    
		                    <tr class="odd">
		                        <td class="check"><input type="checkbox" class="checkbox" name="chkListRecord[]" value="" style="margin: 12px 0px 0px 0px;"/>
		                        </td>		            
		                        <td>
		                            <select class="form-control m-input" data-col-index="6" name="day" id="day">
                        			<option value="">Select Day</option>
                        			<option value="1">Monday</option>
                        			<option value="2">Tuesday</option>
                        			<option value="3">Wednesday</option>
                        			<option value="4">Thursday</option>
                        			<option value="5">Friday</option>
                        			<option value="6">Saturday</option>
                        			<option value="7">Sunday</option>                       
                     				</select>
		                        </td>
		                        <td>
		                            <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter Start Time">
		                        </td>
		                        <td>
		                            <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter End Time">
		                        </td>
		                    </tr>
		                </tbody>
                		</table>
                		</div>
                		</div>
                		<div class="col-md-2">
                			<button type="button" class="btn_add_row" id="btnAddRow" value="<?php echo 'Add Day';?>" name="btnAddRow"><i class="fas fa-plus"></i>Add</button>
                		</div>
					</div>
					<!-- <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="col-md-4">
                       <label for="high_qual">People Involved</label>
                       <table style="width:100%" class="table" id="item_table2">
                       	<tbody class="item1" id="new_row2">                    
		                    <tr class="odd">
		                    	<td>
		                    		<select class="form-control m-input" data-col-index="6" name="staff_location">
				                    <?php if(isset($employee_list) && !empty($employee_list)){?>
				                    <option value="">Select People</option>
				                       <?php $i = 1; foreach($employee_list as $employee){?>
				                    <option value="<?php echo $employee['user_id'];?>" <?php echo set_select('employee', $employee['user_id']);?>><?php echo $employee['first_name'];?></option>
				                       <?php } } ?>
				                    </select>
		                    	</td>                        		
                        	</tr>
                        </tbody>
                    	</table>
                      </div>
                      <div class="col-md-2">
                      	<label for="high_qual"></label>
                       		<button type="button" style="margin: 38px -1px 0px -21px;" class="btn_add_people" id="btnAddPeople" value="" name="btnAddPeople"><i class="fas fa-plus"></i>Add</button>
                      </div>
                      <div class="col-md-4">
                       <label for="high_qual">Budget</label>
                        <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter Budget">
                      </div>
                    </div> -->
                    <div class="row" style="width: 115%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="col-md-9">
						<div class="tableWrapper" style="overflow:auto">
						<label for="high_qual">Participating Resources</label>
						<table style="width:100%" class="table" id="item_table3">
		                	<thead>
		                    <tr>
		                        <th style="width:2%" class="center"><input type="checkbox"></th>
		                        <th>Category</th>
		                        <th>Type</th>
		                        <th>Description</th>
                            <th>Type</th>
                            <th>Peoples</th>
		                    </tr>
                			</thead>
                			<tbody class="item3" id="new_row3">                    
		                    <tr class="odd">
		                        <td class="check"><input type="checkbox" class="checkbox" name="chkListRecord[]" value="" style="margin: 12px 0px 0px 0px;"/>
		                        </td>		            
		                        <td>
		                          <select class="form-control m-input" data-col-index="6" name="day" id="day">
                        			<option value="">Select Category</option>
                        			<option value="1">Vehicles</option>
                        			<option value="2">Books</option>
                        			<option value="3">People</option>                       
                     				</select>
		                        </td>
		                        <td>
                                <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter Type">
		                        </td>
		                        <td>
		                            <textarea class="form-control m-input m-input--air" id="job_desc" name="job_desc" rows="1" placeholder="Enter Description"></textarea>
		                        </td>
                            <td>
                                <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter Count">
                            </td>
                            <td>
                            <select class="form-control m-input" data-col-index="6" name="staff_location">
                            <?php if(isset($employee_list) && !empty($employee_list)){?>
                            <option value="">Select People</option>
                               <?php $i = 1; foreach($employee_list as $employee){?>
                            <option value="<?php echo $employee['user_id'];?>" <?php echo set_select('employee', $employee['user_id']);?>><?php echo $employee['first_name'];?></option>
                               <?php } } ?>
                            </select>
                          </td>
		                    </tr>
		                </tbody>
                		</table>
                		</div>
                		</div>
                		<div class="col-md-2">
                			<button type="button" style="margin: 26px -1px 0px -21px;" class="btn_add_resource" id="btnAddResource" value="" name="btnAddResource"><i class="fas fa-plus"></i>Add</button>
                		</div>
					</div>
					<div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="col-md-4">
                       <label for="high_qual">Assigned To</label>                       
                		<select class="form-control m-input" data-col-index="6" name="staff_location">
	                    <?php if(isset($employee_list) && !empty($employee_list)){?>
	                    <option value="">Select Employee</option>
	                       <?php $i = 1; foreach($employee_list as $employee){?>
	                    <option value="<?php echo $employee['user_id'];?>" <?php echo set_select('employee', $employee['user_id']);?>><?php echo $employee['first_name'];?></option>
	                       <?php } } ?>
	                    </select>		                    	
                      </div>
                    </div>
                    <!-- <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="col-md-4">
                       <label for="high_qual">Budget</label>
                        <input type="text" class="form-control m-input m-input--air"  name="high_qual"  id="high_qual"  placeholder="Enter Budget">
                      </div>
                    </div><br> -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
       	$(document).ready(function() {
       		var day1 = document.getElementById('day').value;
        	$('.btn_add_row').click(function () {
	            $('#new_row').clone().appendTo('#item_table').removeAttr('id').addClass('item').show();
	        });

	        $('.btn_add_people').click(function () {
	            $('#new_row2').clone().appendTo('#item_table2').removeAttr('id').addClass('item1').show();
	        });

	        $('.btn_add_resource').click(function () {
	            $('#new_row3').clone().appendTo('#item_table3').removeAttr('id').addClass('item3').show();
	        });
        });
    </script>


     