<div class="page-content-wrapper">
   <div class="page-content">
      <div class="page-head">
      </div>
      <div class="portlet light bordered">
         <div class="portlet-title">
            <div class="caption font-red-sunglo">
               <i class="icon-settings font-red-sunglo"></i>
               <span class="caption-subject bold uppercase">Add Project</span>
            </div>
            <div class="actions">
            </div>
         </div>
         <div class="portlet-body form">
            <form   action="" method="POST" enctype="multipart/form-data" id="add_event_form">
               <div class="form-group">
                   <span class="caption-subject bold uppercase">Project Name</span>
                  <div class="input-group">
                     <input type="text" class="form-control" id="event_name" placeholder="Event name" name="event_name">
                     <span class="input-group-addon">     
                     </span>
                  </div>
               </div>
                <div class="form-group">
                   <span class="caption-subject bold uppercase">Project Fund</span>
                  <div class="input-group">
                     <input type="text" class="form-control" id="event_name" placeholder="Event name" name="event_name">
                     <span class="input-group-addon">     
                     </span>
                  </div>
               </div>

               <div class="form-group">
                <span class="caption-subject bold uppercase">Project Assign To</span>
                <select class="form-control ">
                    <option value="Person1">Person 1</option>
                    <option value="Person1">Person 2</option>
                    <option value="Person1">Person 3</option>
                    <option value="Person1">Person 4</option>
                    <option value="Person1">Person 5</option>
                </select>
               </div> 

               <div class="row">
                    <div class="col-lg-12">
                       <span class="caption-subject bold uppercase">Description</span>
                      <div class="field_w_search">
                        <textarea name="event_desc" id="text"> </textarea>
                      </div>
                    </div>                   
                </div>  

               <div class="form-group">
                  <label for="event_image"></label>
                  <input type="file" id="event_image" name="event_image" class="form-control">
              </div><br> 

               <div class="form-actions">
                  <button type="submit" class="btn blue" name="add_event" id="add_event" value="event_add">Submit</button>
                 <a id="add_event_reset" class="btn sbold red" class="btn default">Reset</a> 
               </div>

               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

            </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>