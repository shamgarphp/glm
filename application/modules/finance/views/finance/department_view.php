<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-dark">
              <i class="icon-settings font-dark">
              </i>
              <span class="caption-subject bold uppercase">Service view 
              </span>
            </div>
            <div class="actions">
            </div>
          </div>
          <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="">
              <thead>
                <tr>
                </tr>
              </thead>
              <tbody>
                <?php if (isset($service_view) && !empty($service_view)) { ?> 
                <tr class="odd gradeX" >
                  <div class="form-group">
                    <div class="form-group">
                      <span class="caption-subject bold uppercase">EVENT : 
                      </span>
                      <p class="form-control-static">
                        <?php if(!empty($service_view['name'])) { echo ucfirst($service_view['name']); } else { echo 'data not available'; } ?>
                      </p>
                    </div>
            
                      <div class="form-group">
                      <span class="caption-subject bold uppercase">Description: 
                      </span>
                      <p class="form-control-static">
                        <?php if(!empty($service_view['description'])) { echo ucfirst($service_view['description']); } else { echo 'data not available'; } ?>
                      </p>
                    </div><br>

                    <div class="form-group">
                      <span class="caption-subject bold uppercase">IMAGE :
                      </span>
                      <br>
                      <p class="form-control-static">
                        <img src="<?php if(!empty($service_view['image'])) { echo base_url('uploads/services/').$service_view['image']; } else { echo 'data not available'; } ?>" height="100" width="100">
                      </p>
                    </div>
                  </div>
                </tr> 
                <?php } else { ?>                                
                <tr class="odd gradeX">
                  <td>Data Not available
                  </td>                                     
                </tr>
                <?php } ?>  
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
