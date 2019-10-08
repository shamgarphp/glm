<style type="text/css">
  
.m-input
{
   border-color: #2e40d4;   
}

input[type = search] {

 border-color: #2e40d4; 
}
.m-aside-menu .m-menu__nav>.m-menu__item>.m-menu__heading .m-menu__link-text, .m-aside-menu .m-menu__nav>.m-menu__item>.m-menu__link .m-menu__link-text {
    font-size: 15px;
}
.m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item .m-menu__submenu .m-menu__item>.m-menu__heading .m-menu__link-text, .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item .m-menu__submenu .m-menu__item>.m-menu__link .m-menu__link-text {
    color: #868aa8;
    font-size: 13px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     Task List
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">

                      <a href="<?php echo base_url('create_task'); ?>" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air"
                        ><i class="fas fa-plus"></i>Create Task</a>
                      
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
                  
              <div class="m-portlet__body">

                
                <!--begin: Datatable -->
              <table class="table table-striped- table-bordered table-hover table-checkable employees" id="m_table_2">
                  <thead>
                    <tr>
                    <th class="mb-0 pb-0"><span class="check_select"><input type="checkbox" id="quetion_all" name="all_questions[]"><label for="quetion_all"></label></span></th>
                      <th>S.No</th> 
                      <th>Task Title</th>
                      <th>Description</th>
                      <th>Location</th>
                      <th>Action</th> 
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(isset($task_list) && !empty($task_list)){?>
                  <?php $i = 1; foreach($task_list as $task){?>
                  <tr>
                    <td>
                    <p class="check_select checkboxes"><input type="checkbox" name="quetions_list[]" id="quetions_list<?php echo $task['task_id']; ?>" value="<?php  echo $task['task_id']; ?>"><label for="quetions_list<?php echo $task['task_id']; ?>"></label></p>
                   </td>
                    <td> <?php echo $i++; ?> </td>
                    <td><?php if(!empty($task['task_title'])) { echo ucfirst($task['task_title']);} ?> </td>
                    <td> <?php if(!empty($task['task_description'])) { echo ucfirst($task['task_description']);} ?> </td>
                    <td> <?php if(!empty($task['area'])) { echo ucfirst($task['area']);} ?> </td>
                    <td>
                      <p>
                      <a class="dropdown-item" href="<?php echo base_url('editTask?taskId='.$task['task_id']);?>" id="question_edit" ><i class="glyphicon glyphicon-edit"></i></a>
                      <a class="dropdown-item"  href="<?php echo base_url('deleteTask?taskId='.$task['task_id']);?>" onclick="return confirm('do you want to delete it');"><i class="glyphicon glyphicon-remove"></i></a>
                      
                      </p> 
                    </td>
                  </tr>
                   <?php } } ?>   
                  </tbody>
                </table>
              </div>
            </div>


    </div>
  </div> 
