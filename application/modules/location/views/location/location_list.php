<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo admin_asset_url(); ?>global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo admin_asset_url(); ?>global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo admin_asset_url(); ?>custom_common_css/edit_popup.css" rel="stylesheet" type="text/css" />

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <form method="POST" action="">
              <div id="titlewrap" >
                <input type="text" name="location" size="60" placeholder="Enter location name" id="location"  style="height:36px";/>  
                <input type="submit" value="Add" class="btn sbold green" name="add_location" id="add_location">
                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              </div>
            </form><br>
            <div class="caption font-dark">
              <i class="icon-settings font-dark">
              </i>
              <span class="caption-subject bold uppercase">LOCATIONS
              </span> 
            </div>
          </div>
          <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
              <thead>
                <tr>
                   <th  style="display: none">
                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                      <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                      <span>
                      </span>
                    </label>
                  </th>
                  <th>S.no</th>
                  <th>location</th> 
                  <th>Actions</th>
                </tr>
              </thead>
               <tbody>
                <?php if(isset($location_list) && !empty($location_list)){?>
                <?php $i = 1; foreach($location_list as $location){?>
                <tr class="odd gradeX" >
                    <td style="display: none">
                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                      <input type="checkbox" class="checkboxes" value="1" />
                      <span>
                      </span>
                    </label>
                  </td>
                  <td> <?php echo $i++; ?> </td>
                  <td><?php if(!empty($location['location'])) { echo ucfirst($location['location']); } else { echo '---'; }?></td>
                 <td>
                    <div class="btn-group">
                      <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Actions
                        <i class="fa fa-angle-down">
                        </i>
                      </button>
                      <ul class="dropdown-menu pull-left" role="menu">
                       
                        <li>
                          <a class="button" id="location_edit" onclick="location_edit('<?php echo $location['location'];?>','<?php echo $location['location_id'];?>')">
                            <i class="icon-tag">
                            </i> Edit 
                          </a>
                        </li>

                        <li>
                          <a href="<?php echo base_url('location/location/delete_location?locationid='.base64_encode($location['location_id']));?>" onclick="return confirm('Are You Sure');">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>Delete 
                          </a>
                        </li>

                        
                      </ul>
                    </div>
                  </td> 
                   <div id="myModal" class="modal">
                      <div class="modal-content">
                      <span class="close">&times;</span>
                      <div id="menu_edit">
                        <form method="POST" action="">          
                          <div class="form-group">
                          <label for="menu_edit">Name
                          </label>
                          <div class="input-group">
                          <input type="text" class="form-control" id="edit_location" name="location">
                           <input type="hidden" name="location_id" id="locationid">
                          </div>
                          <p>
                          <div class="form-actions">
                          <button type="submit"  class="btn btn-sm green" name="location_update" value="update" id="location_update">Update
                          </button>
                          </div> 
                          </p>
                          </div>
                           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        </form>
                      </div>
                  </div> 
                  </div> 
                  </td>                 
                </tr> 
                <?php } } ?>                                
                </tr>          
              </tbody>
            </table>
          </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
      </div>
    </div>
    <!-- END PAGE BASE CONTENT -->
  </div>
  <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
