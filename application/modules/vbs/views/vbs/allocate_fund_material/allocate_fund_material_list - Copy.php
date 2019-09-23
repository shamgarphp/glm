<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <div class="m-content">

   <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                     PROGRAMS LIST
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <a href="#" class="btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                          <i class="la la-cart-plus"></i>
                          <span>New Order</span>
                        </span>
                      </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                      <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                        Actions
                      </a>
                      <div class="m-dropdown__wrapper" style="z-index: 101;">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36px;"></span>
                     <!--    <div class="m-dropdown__inner">
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
                        </div> -->
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">

                <!--begin: Datatable -->
              <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                  <thead>
                    <tr>
                      <th class="dt-right sorting_disabled" rowspan="1" colspan="1" style="width: 30.5px;" aria-label="Record ID">
                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                        <input type="checkbox" value="" class="m-group-checkable">
                        <span></span>
                    </label></th>
                      <!-- <th>Progarm ID</th> -->  
                      <th>Location</th>
                      <th>Implemented by</th> 
                      <th>Status</th> 
                      <th>Permission</th> 
                      <th>Actions</th> 
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(isset($programs_list) && !empty($programs_list)){?>
                  <?php $i = 1; foreach($programs_list as $program){?>
                  <tr>
                    <td> <?php echo $i++; ?> </td>
                    <td><?php if(!empty($program['area'])) { echo ucfirst($program['area']); } else { echo '---'; }?></td>
                <td><?php if(!empty($program['implementd_by'])) { echo ucfirst($program['implementd_by']); } else { echo '---'; }?></td>
                  
                
                <!--   <td><?php if(!empty($program['program_aim'])) { echo ucfirst($program['program_aim']); } else { echo '---'; }?></td>
 -->
                   <td>
                    <?php if ($program['status'] == 1) { ?>
                      <a href="javascript:;" class="btn btn-sm btn-success" id="status_<?php echo  $program['program_id'];  ?>" onclick="program_status('<?php echo $program['program_id']; ?>','<?php echo $program['status']; ?>')">ACTIVE</a>
                   
                    <?php } else { ?>

                       <a href="javascript:;" class="btn btn-sm btn-danger" id="status_<?php echo  $program['program_id']; ?>" onclick="program_status('<?php echo $program['program_id']; ?>','<?php echo $program['status']; ?>')">IN-ACTIVE</a>
                    
                   <?php } ?>
                  </td> 
                   <td>
                    <?php if ($program['approved_rejected'] == 1) { ?>
                      <a href="javascript:;" class="btn btn-sm btn-success" id="approve_<?php echo  $program['program_id'];  ?>" onclick="program_permission('<?php echo $program['program_id']; ?>','<?php echo $program['approved_rejected']; ?>')">APPROVED</a>
                   
                    <?php } else { ?>

                       <a href="javascript:;" class="btn btn-sm btn-danger" id="approve_<?php echo  $program['program_id']; ?>" onclick="program_permission('<?php echo $program['program_id']; ?>','<?php echo $program['approved_rejected']; ?>')">REJECTED </a>
                    
                   <?php } ?>
                  </td>
                  <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                       <!--   <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-edit"></i>
                        </a> -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url('allocate_fund_material_view?program_id='.base64_encode($program['program_id']));?>"  ><i class="la la-eye"></i>View</a>
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i>Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url('vbs/vbs/program_delete?program_id='.base64_encode($program['program_id']));?>" onclick="return confirm('Are You Sure');"><i class="la la-tra"></i>Delete</a> 
                            </div>
                        </span>
                      
                    </td>
                  <td>

                  </td> 
                  </tr>
                   <?php } } ?>      
                  </tbody>
                </table>
              </div>
            </div>


    </div>
  </div>
</div>   