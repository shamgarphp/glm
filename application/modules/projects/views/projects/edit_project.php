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
          <span class="caption-subject bold uppercase">Event Update
          </span>
        </div>
      </div>

      <div class="portlet-body form">
        <form  action="" method="POST" enctype="multipart/form-data" id="event_edit_form">
        <div class="row">
          <div class="form-group col-sm-12">
             <span class="caption-subject bold uppercase">Event</span>
            <div class="input-group">
              <input type="text" class="form-control" id="event_name" placeholder="Event name" name="event_name" value="<?php if(isset($events_edit['event_name']) && !empty($events_edit['event_name'])){ echo $events_edit['event_name']; } ?>">
              <span class="input-group-addon">
              </span>
            </div> 
          </div>
        </div>

       <div class="row">
          <div class="col-lg-12">
            <span class="caption-subject bold uppercase">Description</span>
            <div class="field_w_search">
              <textarea name="event_desc" id="text"><?php if(isset($events_edit['description']) && !empty($events_edit['description'])){ echo $events_edit['description']; }  ?> </textarea>
            </div>
          </div>                   
       </div><br> 

        <div class="row">       
        <div class="form-group col-sm-12">
            <span class="caption-subject bold uppercase">Image</span>
          <input type="file" id="event_image" name="event_image" class="form-control">
          <input type="hidden" name="old_image" value="<?php if(isset($events_edit['image']) && !empty($events_edit['image'])){ echo $events_edit['image']; }  ?>" >
          <span align="center">
            <img  src="<?php  if(isset($events_edit['image']) && !empty($events_edit['image'])){ echo base_url('uploads/events/'.$events_edit['image']); } ?>" width="100" height="100">
          </span>
         </div>
        </div>
        
      </div>
      <div class="form-actions">
        <button type="submit" class="btn sbold green" name="update_event"  id="update_event" value="update_event">Update
        </button> 
         <a   id="event_cancel" class="btn sbold red" class="btn default">Reset</a> 
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
