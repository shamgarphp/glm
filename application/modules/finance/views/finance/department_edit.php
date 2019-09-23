<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">
    <!-- BEGIN PAGE HEAD-->
    <div class="page-head">      
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->

    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-dark">
              <i class="icon-settings font-dark">
          </i>
          <span class="caption-subject bold uppercase">Service Update
          </span>
        </div>
      </div>
      <div class="portlet-body form">
        <form  action="" method="POST" enctype="multipart/form-data" id="event_service_form">
        <div class="row">
          <div class="form-group col-sm-12">
            <span class="caption-subject bold uppercase">Service</span>
            <div class="input-group">
              <input type="text" class="form-control" id="service_name" placeholder="Event name" name="service_name" value="<?php if(isset($services_edit['name']) && !empty($services_edit['name'])){ echo $services_edit['name']; } ?>">
              <span class="input-group-addon">
              </span>
            </div>
          </div>
        </div><br>


       <div class="row">
          <div class="col-lg-12">
            <span class="caption-subject bold uppercase">Description</span>
            <div class="field_w_search">
              <textarea name="service_desc" id="service_desc"><?php if(isset($services_edit['description']) && !empty($services_edit['description'])){ echo $services_edit['description']; }  ?> </textarea>
            </div>
          </div>                   
       </div><br><br> 

        <div class="row">       
        <div class="form-group col-sm-12">
          <input type="file" id="service_image" name="service_image" class="form-control">
          <input type="hidden" name="old_image" value="<?php if(isset($services_edit['image']) && !empty($services_edit['image'])){ echo $services_edit['image']; }  ?>" >
          <span align="center">
            <img  src="<?php  if(isset($services_edit['image']) && !empty($services_edit['image'])){ echo base_url('uploads/services/'.$services_edit['image']); } ?>" width="100" height="100">
          </span>
         </div>
        </div>
        
      </div>
      <div class="form-actions">
        <button type="submit" class="btn sbold green" name="update_service"  id="update_service" value="update_service">Update
        </button> 
         <a   id="service_cancel" class="btn sbold red" class="btn default">Reset</a> 
      </div>
       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
  </form>
</div>
</div>
</div>
</div>
<!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>
