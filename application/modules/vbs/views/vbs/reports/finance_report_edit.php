<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <div class="m-content">
      <div class="m-portlet m-portlet--tab">
         <!--begin::Form-->
         <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
               <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                     Finance Report
                  </h3>
               </div>
            </div>
         </div>
      
          <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right" method="post">
                    <div class="m-portlet__body">

                        <div class="form-group m-form__group row">
                                    
                            <div class="col-lg-3">
                               <label class="col-form-label">Actual Amount:</label>
                                <input type="text" class="form-control m-input" id="total_amount" name="total_amount" value="<?php if(isset($financereport_edit['act_amount']) && !empty($financereport_edit['act_amount'])){ echo $financereport_edit['act_amount']; } else { echo 'No data found.'; } ?>"> 
                              
                            </div>
                          
                            <div class="col-lg-3">
                                 <label class="col-form-label">Expenditure Amount:</label>
                               <input type="text" class="form-control m-input" id="total_expenditure" name="total_expenditure" value="<?php if(isset($financereport_edit['expenditure_amount']) && !empty($financereport_edit['expenditure_amount'])){ echo $financereport_edit['expenditure_amount']; } else { echo 'No data found.'; } ?>">
                            </div>

                            <div class="col-lg-3">
                              <label class="col-form-label">Balance Amount:</label>
                               <input type="text" class="form-control m-input" id="balance_amount" name="balance_amount" value="<?php if(isset($financereport_edit['balance_amount']) && !empty($financereport_edit['balance_amount'])){ echo $financereport_edit['balance_amount']; } else { echo 'No data found.'; } ?>">
                            </div>

                            <div class="col-lg-3">
                                 <label class="col-form-label">Location:</label>

                              <select class="form-control m-input" data-col-index="6" name="location">
                               <?php if(isset($locations_list) && !empty($locations_list)){?>
                                <option value="">select</option>
                               <?php $i = 1; foreach($locations_list as $locations){?>
                                <option value="<?php echo $locations['location_id'];?>" <?php if($locations['location_id'] == $financereport_edit['location_id']){ echo 'selected'; } ?>><?php echo $locations['area'];?></option>
                               <?php } } ?>
                             </select>
                             
                            </div>

                    </div>


                    <div class="form-group m-form__group row">
                                    
                       <!--    <div class="col-lg-6">
                          <label class="col-form-label">Date:</label>
                          <?php $fromdate //= //date("m-d-Y",strtotime($financereport_edit['created_on'])); ?>
                          <input type="date" class="form-control"  id="date" name="date" value="<?php //if(isset($financereport_edit['created_on']) && !empty($financereport_edit['created_on'])){ echo $financereport_edit['created_on']; } else { echo 'No data found.'; } ?>" value="2013-01-08">
                          </div>  -->

                       <!--  <div class="col-lg-3">
                          <label class="col-form-label">Implemented By:</label>
                          <input type="text" class="form-control m-input" id="women" name="women" value="<?php //if(isset($financereport_edit['first_name']) && !empty($financereport_edit['first_name'])){ echo $financereport_edit['first_name'].' '.$financereport_edit['last_name']; } else { echo 'No data found.'; } ?>">
                        </div> -->


                        <div class="col-lg-3">
                          <label class="col-form-label">Vendor:</label>
                           <select class="form-control m-input" data-col-index="6" name="vendor">
                               <?php if(isset($vendors_list) && !empty($vendors_list)){?>
                                <option value="">Select vendor</option>
                               <?php $i = 1; foreach($vendors_list as $vendors){?>
                                <option value="<?php echo $vendors['vendor_id'];?>" <?php if($vendors['vendor_id'] == $financereport_edit['vendor_id']){ echo 'selected'; } ?>><?php echo $vendors['vendor_name'];?></option>
                               <?php } } ?>
                            </select>
                        </div>      
                    </div>

                   <!--   <div class="form-group m-form__group row">
                         <div class="col-lg-6">
                               <label class="col-form-label">Program Aim:</label>
                               <textarea class="form-control m-input" id="Description" name="Description" rows="3"><?php //if(isset($financereport_edit['program_aim']) && !empty($financereport_edit['program_aim'])){ echo $financereport_edit['program_aim']; } else { echo 'No data found.'; } ?></textarea> 
                            </div>       
                    </div> -->
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

                    <input type="hidden" name="finance_report_id" value="<?php if(isset($financereport_edit['finance_report_id']) && !empty($financereport_edit['finance_report_id'])){ echo $financereport_edit['finance_report_id']; } ;?>">

                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions">
                         <input name="finance_report" type="Submit" value="Update" class="btn btn-brand">
                        <button type="reset" class="btn btn-danger">Reset</button>
                      </div>
                    </div>
                  </form>

                  <!--end::Form-->     
      </div>
   </div>
<!-- </div>
</div> -->