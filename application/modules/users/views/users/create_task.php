<style type="text/css">
/*	table.table th {
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
}*/
/*table {
    border-collapse: none;
}*/
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
                          <b>Create Task</b>
                        </h3>
                      </div>
                    </div>
                  </div>

                  <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right" name="insert_form" id="insert_form" method="POST" action="<?php echo base_url('saveTask'); ?>">
                    <div class="m-portlet__body">
                    <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="col-md-5">
                       <h5>Task Title</h5>
                        <input type="text" class="form-control m-input m-input--air"  name="task_title"  id="task_title"  placeholder="Enter Task Title">
                      </div>
                    
                      <div class="col-md-5">
                        <h5>Task Description</h5>
                        <textarea class="form-control m-input m-input--air" id="task_description" name="task_description" rows="1" placeholder="Enter Task Description"></textarea>
                      </div>
                    
          					</div><br>
                    <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-md-5">
                      <h5>Location</h5>
                      <select class="form-control m-input" data-col-index="6" name="location_id" id="location_id">
                       <?php if(isset($staff_locations) && !empty($staff_locations)){?>
                        <option value="">Select Location</option>
                       <?php $i = 1; foreach($staff_locations as $staff_location){?>
                       <option value="<?php echo $staff_location['location_id'];?>" <?php echo set_select('staff_location', $staff_location['location_id']);?>><?php echo $staff_location['area'];?></option>
                       <?php } } ?>
                     </select>
                    </div>
                    <div class="col-md-5">
                     <h5>Assigned To</h5>                       
                  <select class="form-control m-input" data-col-index="6" name="emp_number" id="emp_number">
                    <?php if(isset($employee_list) && !empty($employee_list)){?>
                    <option value="">Select Employee</option>
                       <?php $i = 1; foreach($employee_list as $employee){?>
                    <option value="<?php echo $employee['user_id'];?>" <?php echo set_select('employee', $employee['user_id']);?>><?php echo $employee['first_name'];?></option>
                       <?php } } ?>
                    </select>                         
                    </div>
                    </div><br>
          					<div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          						<div class="col-md-9">
                           <h5 align="center" style="margin: 0px 0px 0px -86%;"><b>Enter Day Details</b></h5>
                           <br />
                           <!-- <form method="post" id="insert_form"> -->
                            <div class="table-repsonsive">
                            <span id="error"></span>
                            <table class="table table-bordered" id="item_table">
                            <thead>
                              <tr>
                               <th>Days</th>
                               <th>Start Time</th>
                                <th>End Time</th>
                               <th style="width: 10px;"><button type="button" id="add_row" class="btn btn-success btn-sm addDay"><span class="glyphicon glyphicon-plus"></span></button></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr id="row_1">
                                <td>
                                  <select  id="day_1" name="day[]" class="form-control item_unit">
                                    <option value="">Select Day</option>
                                    <option value="1">Monday</option>
                                    <option value="2">Tuesday</option>
                                    <option<option value="4">Thursday</option>
                                    <option value="5">Friday</option>
                                    <option value="6">Saturday</option>
                                    <option value="7">Sunday</option>
                                  </select>
                                  
                                </td>
                                <td><input type="text" name="start_time[]" id="start_time_1" class="form-control"></td>
                                <td><input type="text" name="end_time[]" id="end_time_1" class="form-control"></td>
                                <td></td>
                              </tr>
                            </tbody>
                            </table>
                            </div>
                           <!-- </form> -->
                      		</div>
					           </div>
					
                  <div class="row" style="width: 115%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-md-9">
                     <br />
                     <h5 align="center" style="margin: 0px 0px 0px -83%;"><b>Participating Resources</b></h5>
                     <br />
                     <!-- <form method="post" id="insert_form"> -->
                      <div class="table-repsonsive">
                       <span id="error"></span>
                       <table class="table table-bordered" id="participate_table">
                        <thead>
                          <tr>
                           <th>Category</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Count</th>
                            <th>Peoples</th>
                           <th style="width: 10px;"><button type="button" name="add" class="btn btn-success btn-sm addRes" id="add_participate"><span class="glyphicon glyphicon-plus"></span></button></th>
                          </tr>
                        </thead>
                          <tbody>
                              <tr id="row_2">
                                <td>
                                  <select id="category_1" name="category[]" class="form-control item_unit">
                                    <option value="">Select</option>
                                    <option value="1">Vehicles</option>
                                    <option value="2">Books</option>
                                    <option value="3">People</option>
                                  </select>                                  
                                </td>
                                <td><input type="text" name="type[]" id="type_1" class="form-control"></td>
                                <td><input type="text" name="description[]" id="description_1" class="form-control"></td>
                                <td><input type="text" name="count[]" id="count_1" class="form-control"></td>
                                <td>
                                  <select name="resource_id[]" id="resource_id_1" class="form-control item_unit"><?php if(isset($employee_list) && !empty($employee_list)){?>
                                  <option value="">Select</option><?php $i = 1; foreach($employee_list as $employee){?>
                                  <option value="<?php echo $employee['user_id'];?>"<?php echo set_select('employee', $employee['user_id']);?>><?php echo $employee['first_name'];?></option><?php } } ?></select>
                                </td>
                                <td></td>
                              </tr>
                            </tbody>
                       </table>
                      </div>
                     <!-- </form> -->
                    </div>
					     </div>
					     
                <div class="row ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="col-md-4">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                  <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                      <button type="submit" class="btn btn-accent" name="add_user" id="add_user" value="add_user">Save</button>
                      <button type="reset" class="btn btn-secondary reset" style="background-color: lightgray;">Cancel</button>
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
        <!-- </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script type="text/javascript">
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
    </script> -->

    <script>
      $(document).ready(function(){

        // Add new row in the table 
    $("#add_row").unbind('click').bind('click', function() {
      var table = $("#item_table");
      var count_table_tbody_tr = $("#item_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;

      // console.log(reponse.x);
               var html = '<tr id="row_'+row_id+'">'+
                    '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="day_'+row_id+'" name="day[]" style="width:100%;">'+
                        '<option value="">Select Day</option>';
                      html += '<option value="'+1+'">Monday</option>';
                      html += '<option value="'+2+'">Tuesday</option>';
                      html += '<option value="'+3+'">Wednesday</option>';
                      html += '<option value="'+4+'">Thursday</option>';
                      html += '<option value="'+6+'">Friday</option>';
                      html += '<option value="'+7+'">Saturday</option>';

                      html += '</select>'+
                    '</td>'+ 
                    '<td><input type="number" name="start_time[]" id="start_time_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="number" name="end_time[]" id="end_time_'+row_id+'" class="form-control"></td>'+

                    '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td>'
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#item_table tbody tr:last").after(html);  
              }
              else {
                $("#item_table tbody").html(html);
              }
          });

          $(document).on('click', '.remove', function(){
              $(this).closest('tr').remove();
          });

                  // Add new row in the table 
      $("#add_participate").unbind('click').bind('click', function() {
        var table = $("#participate_table");
        var count_table_tbody_tr = $("#participate_table tbody tr").length;
        var row_id = count_table_tbody_tr + 1;

        // console.log(reponse.x);
                 var html = '<tr id="row_'+row_id+'">'+
                      '<td>'+ 
                      '<select class="form-control select_group product" data-row-id="'+row_id+'" id="day_'+row_id+'" name="category[]" style="width:100%;">'+
                          '<option value="">Select</option>';
                        html += '<option value="'+1+'">Vehicles</option>';
                        html += '<option value="'+2+'">Books</option>';
                        html += '<option value="'+3+'">Peoples</option>';

                        html += '</select>'+
                      '</td>'+ 
                      '<td><input type="text" name="type[]" id="type_'+row_id+'" class="form-control"></td>'+
                      '<td><input type="text" name="description[]" id="description_'+row_id+'" class="form-control"></td>'+
                      '<td><input type="text" name="count[]" id="count_'+row_id+'" class="form-control"></td>'+
                      '<td>'+ 
                      '<select class="form-control select_group product" data-row-id="'+row_id+'" id="day_'+row_id+'" name="resource_id[]" style="width:100%;">'+
                          '<option value="">Select</option>';
                        <?php foreach ($employee_list as $employee) {?>
                          html += '<option value="<?php echo $employee['user_id'];?>"><?php echo $employee['first_name'];?></option>';
                        <?php }?>                       
                        
                        html += '</select>'+
                      '</td>'+
                          
                      '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td>'
                      '</tr>';

                  if(count_table_tbody_tr >= 1) {
                  $("#participate_table tbody tr:last").after(html);  
                }
                else {
                  $("#participate_table tbody").html(html);
                }
            });

              // $(".product").select2();

      // var saveUrl = '<?php //echo base_url('saveTask'); ?>';
       
       // $(document).on('click', '.addDay', function(){
       //  var html = '';
       //  html += '<tr class="item">';
       //  html += '<td><select name="days[]" class="form-control item_unit"><option value="">Select Day</option><option value="1">Monday</option><option value="2">Tuesday</option><option<option value="4">Thursday</option><option value="5">Friday</option><option value="6">Saturday</option><option value="7">Sunday</option></select></td>';
       //  html += '<td><input type="text" name="start_time[]" class="form-control start_time" /></td>';
       //  html += '<td><input type="text" name="end_time[]" class="form-control end_time" /></td>';        
       //  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
       //  $('#item_table').append(html);
       // });

       // $(document).on('click', '.addRes', function(){
       //  var html = '';
       //  html += '<tr>';
       //  html += '<td><select name="category[]" class="form-control item_unit"><option value="">-Select-</option><option value="1">Vehicles</option><option value="2">Books</option><option<option value="4">People</option></select></td>';
       //  html += '<td><input type="text" name="type[]" class="form-control type" /></td>';
       //  html += '<td><input type="text" name="description[]" class="form-control description" /></td>';
       //  html += '<td><input type="text" name="count[]" class="form-control count" /></td>';

       //  html += '<td><select name="category[]" class="form-control item_unit"><?php if(isset($employee_list) && !empty($employee_list)){?>
       //            <option value="">-Select-</option><?php $i = 1; foreach($employee_list as $employee){?>
       //            <option value="<?php echo $employee['user_id'];?>"<?php echo set_select('employee', $employee['user_id']);?>><?php echo $employee['first_name'];?></option><?php } } ?></select></td>';

       //  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm removeRes"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
       //  $('#resource_table').append(html);
       // });
       
       // $(document).on('click', '.remove', function(){
       //  $(this).closest('tr').remove();
       // });

       // $(document).on('click', '.removeRes', function(){
       //  $(this).closest('tr').remove();
       // });

    //   $('#add_user').on('click', function() {
    //     // $("#butsave").attr("disabled", "disabled");
    //     // var name = $('#name').val();
    //     // var email = $('#email').val();
    //     // var phone = $('#phone').val();
    //     // var password = $('#password').val();
    //     // var confirm_password = $('#confirm_password').val();
    //     // var address = $('#address').val();
    //     var items = [];
    //         $('table tr.item').each(function () {
    //             var row = {};
    //             $(this).find('input').each(function () {
    //                     row[$(this).attr('name')] = $(this).val();
    //             });
    //             items.push(row);
    //         });
    //         // alert(items.length);
    //     // if(name!="" && email!="" && phone!=""){
    //         $.ajax({

    //             url: "save.php",
    //             type: "POST",
    //             data: {
    //                 // name: name,
    //                 // email: email,
    //                 // phone: phone,
    //                 // password: password,
    //                 // address: address,
    //                 items: JSON.stringify(items)         
    //             },
    //             cache: false,
    //             success: function(dataResult){
    //                 var dataResult = JSON.parse(dataResult);
    //                 if(dataResult.statusCode==200){
    //                     $("#butsave").removeAttr("disabled");
    //                     $('#registration').find('input:text').val('');
    //                     $("#success").show();
    //                     $('#success').html('Data added successfully !');
    //                     viewList();                        
    //                 }
    //                 else if(dataResult.statusCode==201){
    //                    alert("Error occured !");
    //                 }
                    
    //             }
    //         });
    //     // }
    //     // else{
    //     //     alert('Please fill all the field !');
    //     // }
    // });

    //    $('#add_user').click(function () {
    //         var items = [];
    //         var item_order = 1;
    //         $('table tr.item').each(function () {
    //             var row = {};
    //             $(this).find('input,select,textarea').each(function () {
    //                 if ($(this).is(':checkbox')) {
    //                     row[$(this).attr('name')] = $(this).is(':checked');
    //                 } else {
    //                     row[$(this).attr('name')] = $(this).val();
    //                 }
    //             });
    //             row['item_order'] = item_order;
    //             item_order++;
    //             items.push(row);
    //         });

    //         $.post("<?php echo site_url('saveTask'); ?>", {
            
    //         items: JSON.stringify(items)
    //     },
    //     function (data) {
            
    //     });
    // });

  //   $('#add_user').on('click', function() {
  //   var task_title = $('#task_title').val();
  //   var task_description = $('#task_description').val();
  //   var location_id = $('#location_id').val();
  //   // var city = $('#city').val();
  //   // var password = $('#password').val();
  //   // if(task_title!="" && task_description!="" && location_id!=""){
  //     // $("#add_user").attr("disabled", "disabled");
  //     $.ajax({
  //       url: "<?php echo base_url("saveTask");?>",
  //       type: "POST",
  //       data: {
  //         type: 1,
  //         task_title: task_title,
  //         task_description: task_description,
  //         location_id: location_id
  //       },
  //       cache: false,
  //       success: function(dataResult){
  //         // var dataResult = JSON.parse(dataResult);
  //         // if(dataResult.statusCode==200){
  //         //   $("#add_user").removeAttr("disabled");
  //         //   $('#fupForm').find('input:text').val('');
  //         //   $("#success").show();
  //         //   $('#success').html('Data added successfully !');            
  //         // }
  //         // else if(dataResult.statusCode==201){
  //         //    alert("Error occured !");
  //         // }
          
  //       }
  //     });
  //   // }
  //   // else{
  //   //   alert('Please fill all the field !');
  //   // }
  // });

 
 //   $('#insert_form').on('add_user', function(event){
 //    event.preventDefault();
 //    var error = ''; 
    
 //    $('.start_time').each(function(){
 //     var count = 1;
 //     if($(this).val() == '')
 //     {
 //      error += "<p>Enter Start Time at "+count+" Row</p>";
 //      return false;
 //     }
 //     count = count + 1;
 //    });

 //    $('.end_time').each(function(){
 //     var count = 1;
 //     if($(this).val() == '')
 //     {
 //      error += "<p>Enter End Time at "+count+" Row</p>";
 //      return false;
 //     }
 //     count = count + 1;
 //    });
    
 //    $('.days').each(function(){
 //     var count = 1;
 //     if($(this).val() == '')
 //     {
 //      error += "<p>Select Day at "+count+" Row</p>";
 //      return false;
 //     }
 //     count = count + 1;
 //    });
 //    var form_data = $(this).serialize();
 //    if(error == '')
 //    {
 //     $.ajax({
 //      url:"<?php echo base_url('saveTask'); ?>",
 //      method:"POST",
 //      data:form_data,
 //      success:function(data)
 //      {
 //       if(data == 'ok')
 //       {
 //        $('#item_table').find("tr:gt(0)").remove();
 //        $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
 //       }
 //      }
 //     });
 //    }
 //    else
 //    {
 //     $('#error').html('<div class="alert alert-danger">'+error+'</div>');
 //    }
 // });
 
});
</script>




     