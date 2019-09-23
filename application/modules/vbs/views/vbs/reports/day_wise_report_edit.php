<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <div class="m-content">
      <div class="m-portlet m-portlet--tab">
         <!--begin::Form-->
         <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
               <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                     Day wise program report
                  </h3>
               </div>
            </div>
         </div>
      
          <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right">
                    <div class="m-portlet__body">

                        <div class="form-group m-form__group row">
                                    
                            <div class="col-lg-3">
                               <label class="col-form-label">Date:</label>
                               <input type="date" class="form-control m-input" placeholder="Enter Date" id="date" name="date" value="<?php if(isset($daywise_report_edit['date']) && !empty($daywise_report_edit['date'])){ echo $daywise_report_edit['date']; } ?>">
                            </div>
                          
                            <div class="col-lg-3">
                                 <label class="col-form-label">Men:</label>
                               <input type="text" class="form-control m-input" placeholder="Enter Mens" id="men" name="men" value="<?php if(isset($daywise_report_edit['men']) && !empty($daywise_report_edit['men'])){ echo $daywise_report_edit['men']; } ?>">
                            </div>

                            <div class="col-lg-3">
                                 <label class="col-form-label">Women:</label>
                               <input type="text" class="form-control m-input" placeholder="Enter Womens" id="women" name="women" value="<?php if(isset($daywise_report_edit['women']) && !empty($daywise_report_edit['women'])){ echo $daywise_report_edit['women']; } ?>">
                            </div>

                            <div class="col-lg-3">
                                 <label class="col-form-label">Boys:</label>
                               <input type="text" class="form-control m-input" placeholder="Enter Boys" id="boys" name="boys" value="<?php if(isset($daywise_report_edit['boys']) && !empty($daywise_report_edit['boys'])){ echo $daywise_report_edit['boys']; } ?>">
                            </div>

                    </div>


                    <div class="form-group m-form__group row">
                                    
                            <div class="col-lg-3">
                               <label class="col-form-label">Girls:</label>
                               <input type="text" class="form-control m-input" placeholder="Enter Girls" id="girls" name="girls" value="<?php if(isset($daywise_report_edit['girls']) && !empty($daywise_report_edit['girls'])){ echo $daywise_report_edit['girls']; } ?>">
                            </div>
                          
                            <div class="col-lg-3">
                                 <label class="col-form-label">Place of Work:</label>
                               <input type="text" class="form-control m-input" placeholder="Enter To Time" id="to_time" name="to_time[]" value="<?php if(isset($daywise_report_edit['place_of_work']) && !empty($daywise_report_edit['place_of_work'])){ echo $daywise_report_edit['place_of_work']; } ?>">
                            </div>
                             <div class="col-lg-3">
                                 <label class="col-form-label">Location:</label>
                               <input type="text" class="form-control m-input"  value="<?php if(isset($daywise_report_edit['area']) && !empty($daywise_report_edit['area'])){ echo $daywise_report_edit['area']; } ?>" disabled="">
                            </div>

                    </div>

                    <div class="form-group m-form__group row">
                                    
                          <div class="col-lg-6">
                                        <label class="col-form-label">Work Information:</label>
                                        <textarea class="form-control m-input" id="Description" name="Description[]" rows="3"><?php if(isset($daywise_report_edit['work_information']) && !empty($daywise_report_edit['work_information'])){ echo $daywise_report_edit['work_information']; } ?></textarea> 
                          </div>

                         <div class="col-lg-6">
                                        <label class="col-form-label">Prayer points:</label>
                                        <textarea class="form-control m-input" id="Description" name="Description[]" rows="3"><?php if(isset($daywise_report_edit['prayer_points']) && !empty($daywise_report_edit['prayer_points'])){ echo $daywise_report_edit['prayer_points']; } ?></textarea> 
                         </div>        

                    </div>

                     <div class="form-group m-form__group row">
                                    
                          <div class="col-lg-6">
                                        <label class="col-form-label">Achievements:</label>
                                        <textarea class="form-control m-input" id="Description" name="Description[]" rows="3"><?php if(isset($daywise_report_edit['achievements']) && !empty($daywise_report_edit['achievements'])){ echo $daywise_report_edit['achievements']; } ?></textarea> 
                          </div>

                         <div class="col-lg-6">
                            <label class="col-form-label">Challenges:</label>
                            <textarea class="form-control m-input" id="Description" name="Description[]" rows="3"><?php if(isset($daywise_report_edit['challenges']) && !empty($daywise_report_edit['challenges'])){ echo $daywise_report_edit['challenges']; } ?></textarea> 
                         </div>        

                    </div>

                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions">
                         <input name="daywise_report" type="submit" value="Update" class="btn btn-brand">
                        <button type="reset" class="btn btn-danger">Reset</button>
                      </div>
                    </div>
                  </form>

                  <!--end::Form-->     
      </div>
   </div>
<!-- </div>
</div> -->