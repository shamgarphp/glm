<link href="<?php echo base_url('admin_assets');?>/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <div class="m-content">
      <div class="m-portlet m-portlet--mobile">
         <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
               <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                     Programs List
                  </h3>
               </div>
            </div>
           
         </div>
         <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable programs" id="m_table_2" width="100%">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Location</th>
                     
                     <th>Program Aim</th>
                     <th>Status</th>
                     <th>Permission</th>
                     <th>Implemented by</th>
                     <th>Date</th>
                     <th>Actions</th>
                     <!-- <th>Actions</th>  -->
                  </tr>
               </thead>
               <tbody>
                  <!-- <tr>
                     <td>1</td>
                     <td>61715-075</td>
                     <td>China</td>
                     <td>Tieba</td>
                     <td>746 Pine View Junction</td>
                     <td>Nixie Sailor</td>
                     </tr> -->
                  <?php if(isset($programs_list) && !empty($programs_list)){?>
                  <?php $i = 1; foreach($programs_list as $program){?>
                  <tr>
                     <td> <?php echo $i++; ?> </td>
                     <td><?php if(!empty($program['area'])) { echo ucfirst($program['area']); } else { echo '---'; }?></td>
                    
                     <td><?php if(!empty($program['program_aim'])) { echo ucfirst($program['program_aim']); } else { echo '---'; }?></td>
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
                      <td><?php if(!empty($program['implementd_by'])) { echo ucfirst($program['implementd_by']); } else { echo '---'; }?></td>
                      <td><?php if(!empty($program['created_on'])) {  $newDate = date("d-m-Y", strtotime($program['created_on'])); echo $newDate; } else {  echo '---'; }?></td>
                     <td nowrap="">
                        <span class="dropdown">
                           <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                           <i class="la la-ellipsis-h"></i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="<?php echo base_url('allocate_fund_material_view?program_id='.base64_encode($program['program_id']));?>"  ><i class="la la-eye"></i>View</a>

                              <a class="dropdown-item"href="<?php echo base_url('allocate_fund_material_edit?program_id='.base64_encode($program['program_id']));?>"><i class="la la-edit"></i>Edit</a>

                              <a class="dropdown-item" href="<?php echo base_url('vbs/vbs/program_delete?program_id='.base64_encode($program['program_id']));?>" onclick="return confirm('Are You Sure');"><i class="fa fa-trash-alt"></i>Delete</a> 
                           </div>
                        </span>
                     </td>
                     <!-- <td nowrap></td> -->
                  </tr>
                  <?php } } ?>   
               </tbody>
               <!--  <tfoot>
                  <tr>
                    <th>Record ID</th>
                    <th>Location</th>  
                    <th>Implemented by</th>
                    <th>Program Aim</th> 
                    <th>Status</th> 
                    <th>Permission</th> 
                    <th>Actions</th>  
                  </tr>
                  </tfoot> -->
            </table>
         </div>
      </div>
   </div>
<!-- </div>
</div> -->