<style type="text/css">
  
.m-input
{
   border-color: #2e40d4;   
}

input[type = search] {

 border-color: #2e40d4; 
}

</style>
<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     Employee List
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">

                      <a href="<?php echo base_url('add_user'); ?>" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air"
                        ><i class="fas fa-plus"></i>Add Employee</a>
                      
                    </li>
                    <li class="m-portlet__nav-item"></li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                      <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                        Actions
                      </a>
                      <div class="m-dropdown__wrapper" style="z-index: 101;">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36px;"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">Export Tools</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_print">
                                    <i class="m-nav__link-icon la la-print"></i>
                                    <span class="m-nav__link-text">Print</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_copy">
                                    <i class="m-nav__link-icon la la-copy"></i>
                                    <span class="m-nav__link-text">Copy</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_excel">
                                    <i class="m-nav__link-icon la la-file-excel-o"></i>
                                    <span class="m-nav__link-text">Excel</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_csv">
                                    <i class="m-nav__link-icon la la-file-text-o"></i>
                                    <span class="m-nav__link-text">CSV</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link" id="export_pdf">
                                    <i class="m-nav__link-icon la la-file-pdf-o"></i>
                                    <span class="m-nav__link-text">PDF</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
                  <form method="POST" action="<?php echo base_url('location_staff')?>">
                <div class="m-portlet__body">
                  <div class="form-group m-form__group row">
                     <div class="col-lg-4 col-md-4 col-sm-4">
                     <label>Location:</label>
                     
                     <select class="form-control m-input" data-col-index="6" name="staff_search">
                       <?php if(isset($staff_locations) && !empty($staff_locations)){?>

                       <?php $i = 1; foreach($staff_locations as $staff_location){?>
                       <option value="<?php echo $staff_location['location_id'];?>"><?php echo $staff_location['area'];?></option>
                       <?php } } ?>
                     </select>
                     </div>
                     <div class="col-lg-1 col-md-1 col-sm-1">
                         <label for="single" class="control-label"><b></b></label>
                         <input type="submit" class="btn btn-success" name="serach_btn" value="serach" >
                     </div>
                      
                 </div>
              </div>
                  </form>
              <div class="m-portlet__body">

                
                <!--begin: Datatable -->
              <table class="table table-striped- table-bordered table-hover table-checkable employees" id="m_table_2">
                  <thead>
                    <tr>
                    <th class="mb-0 pb-0"><span class="check_select"><input type="checkbox" id="quetion_all" name="all_questions[]"><label for="quetion_all"></label></span></th>
                      <th>S.No</th> 
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Gender</th> 
                      <th>Date</th> 
                      <th>Status</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php if(isset($employee_list) && !empty($employee_list)){?>
                  <?php $i = 1; foreach($employee_list as $employee){?>
                  <tr>
                   <td>
                    <p class="check_select checkboxes"><input type="checkbox" name="quetions_list[]" id="quetions_list<?php //echo $questions['quetion_id']; ?>" value="<?php  //echo $questions['quetion_id']; ?>"><label for="quetions_list<?php  //echo $questions['quetion_id']; ?>"></label></p>
                   </td>
                    <td> <?php echo $i++; ?> </td>
                 
                 <td><?php if(!empty($employee['first_name'])) { echo ucfirst($employee['first_name']);} ?> </td>
                 <td> <?php if(!empty($employee['last_name'])) { echo ucfirst($employee['last_name']);} ?> </td>
                 <td> <?php if(!empty($employee['email'])) { echo ucfirst($employee['email']);} ?> </td>
                 <td> <?php if(!empty($employee['gender'])) { echo ucfirst($employee['gender']);} ?> </td>
                  <td> <?php if(!empty($employee['created_on'])) { echo ucfirst($employee['created_on']);} ?> </td>

                  <td><?php if($employee['status'] == 1){ ?>
                          <a href="" class="btn btn-xs btn-primary" id="status_<?php echo  $employee['user_id']; ?>" onclick="register_status_change('<?php echo $employee['user_id']; ?>','<?php echo $employee['status']; ?>')"> ACTIVE</a>
                          <?php }else{ ?>
                          <a href="" class="btn btn-xs btn-danger" id="status_<?php echo  $employee['user_id'];  ?>" onclick="register_status_change('<?php echo $employee['user_id']; ?>','<?php echo $employee['status']; ?>')">IN-ACTIVE </a>
                          <?php } ?> 
                  </td>
                
                  <td nowrap="">
                         <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                            <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              
                               <a class="dropdown-item" href="<?php echo base_url('EmployeeEdit?id='.base64_encode($employee['user_id']));?>" id="question_edit" ><i class="la la-edit"></i>Veiw/Edit</a>

                               <a class="dropdown-item"  href="<?php //echo base_url('quetions/quetions/delete_questions?delete_id='.base64_encode($questions['quetion_id']));?>" onclick="return confirm('do you want to delete it');"><i class="la la-remove"></i> Delete</a> 
                                
                            </div>
                         </span>
                      </td>
                  </tr>
                   <?php } } ?>      
                  </tbody>
                </table>
              </div>
            </div>


    </div>
 <!--  </div>
</div> --> 
