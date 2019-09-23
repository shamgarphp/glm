<div class="page-content-wrapper">
   <div class="page-content">
      <div class="page-head">
      </div>
      <div class="portlet light bordered">
         <div class="portlet-title">
            <div class="caption font-red-sunglo">
               <i class="icon-settings font-red-sunglo"></i>
               <span class="caption-subject bold uppercase">Add Services</span>
            </div>
            <div class="actions">
            </div>
         </div>
         <div class="portlet-body form">
            <form   action="" method="POST" enctype="multipart/form-data" id="add_service_form">
               <div class="form-group">
                   <span class="caption-subject bold uppercase">Name</span>
                  <div class="input-group">
                     <input type="text" class="form-control" id="service_name" placeholder="Service name" name="service_name">
                     <span class="input-group-addon">     
                     </span>
                  </div>
               </div>

               <div class="row">
                    <div class="col-lg-12">
                       <span class="caption-subject bold uppercase">Description</span>
                      <div class="field_w_search">
                        <textarea name="service_desc" id="text"> </textarea>
                      </div>
                    </div>                   
                </div>  

                <div class="form-group">
                  <label for="service_image"></label>
                  <input type="file" id="service_image" name="service_image">
                </div> 

                <input type="hidden" name="event_id" value="<?php if(isset($eventid) && !empty($eventid)){ echo $eventid; }  ?>">  

               <div class="form-actions">
                  <button type="submit" class="btn blue" name="add_service" id="add_service" value="add_service">Submit</button>
                 <a id="add_service_reset" class="btn sbold red" class="btn default">Reset</a> 
               </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>