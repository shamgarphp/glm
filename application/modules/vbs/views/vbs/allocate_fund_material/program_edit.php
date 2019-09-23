<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <div class="m-content">
      <div class="m-portlet m-portlet--tab">
         <!--begin::Form-->
         <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
               <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                     VBS
                  </h3>
               </div>
            </div>
         </div>
       <!--start::Form-->
           
            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" enctype="multipart/form-data">

           <div class="m-portlet">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                       <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                       Program
                                    </h3>
                                 </div>
                              </div>
                           </div>

                           <!--begin::Form-->
                          
                           
                              <div class="m-portlet__body">
                                 <div class="form-group m-form__group row">  
                                    <div class="col-lg-6">
                                       <label class="col-form-label">Program Aim:</label>
                                    <textarea class="form-control m-input" id="program_aim" name="program_aim" rows="1" ><?php if(isset($programs['program_aim']) && !empty($programs['program_aim'])){ echo $programs['program_aim']; } ?></textarea>
                                     </div>
                                     <input type="hidden" name="program_id" value="<?php if(isset($programs['program_id']) && !empty($programs['program_id'])){ echo $programs['program_id']; } ?>">

                                    <div class="col-lg-6">
                                        <label class="col-form-label">Location:</label>
                                        <select id="single" class="form-control m-input" name="location" id="location" disabled="">
                                          <?php if (isset($location_list) && !empty($location_list)) { ?>
                                          <?php foreach($location_list as $location){ ?>
                                          <option  class="text-uppercase" value="<?php echo $location['location_id'];?>" <?php if($programs['location_id'] == $location['location_id']) { echo 'selected'; }  ?>>
                                          <?php  echo $location['area'];  ?>
                                          </option>
                                          <?php } } ?>
                                        </select>
                                    </div>     
                                 </div>
                              </div>
                              
                           

                           <!--end::Form-->
          </div>

         <div class="m-portlet">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                       <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                       Program Times
                                    </h3>
                                 </div>
                              </div>
                           </div>

                           <!--begin::Form-->
                          

                            <div class="m-portlet__body">  
                            <?php if (isset($programs_time) && !empty($programs_time)){?>
                            <?php $i=1; foreach($programs_time as $program_time){?>
                              
                                 <div class="form-group m-form__group row">
                                    
                                    <div class="col-lg-4">
                                       <label class="col-form-label">From Time:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter From Time" id="from_time" name="from_time[]" value="<?php if(isset($program_time['from_time']) && !empty($program_time['from_time'])){ echo $program_time['from_time']; } ?>">
                                    </div>
                                  
                                    <div class="col-lg-4">
                                         <label class="col-form-label">To Time:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter To Time" id="to_time" name="to_time[]" value="<?php if(isset($program_time['to_time']) && !empty($program_time['to_time'])){ echo $program_time['to_time']; } ?>">
                                      
                                    </div>

                                     <input type="hidden" name="program_time_id[]" value="<?php if(isset($program_time['program_time_id']) && !empty($program_time['program_time_id'])){ echo $program_time['program_time_id']; } ?>">
                                    
                                    <div class="col-lg-4">
                                       <label class="col-form-label">Date:</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                          <input type="date" class="form-control"    name="date[]"  value="<?php if(isset($program_time['date']) && !empty($program_time['date'])){ echo $program_time['date']; } ?>"/>
                                         </div>
                                    </div>


                                 </div>
                               <?php } } ?>

                              </div>
                           
                             

                           <!--end::Form-->
          </div>

        <div class="m-portlet">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                       <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                       Participants
                                    </h3>
                                 </div>
                              </div>
                           </div>

                           <!--begin::Form-->
                          
                              <div class="m-portlet__body">

                              <?php if (isset($programs_participent) && !empty($programs_participent)){?>
                              <?php $i=1; foreach($programs_participent as $participent){?>
                              
                                 <div class="form-group m-form__group row">
                                    <div class="col-lg-3">
                                         <label class=" col-form-label">Participant Name:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Participant Name" id="participent_name" name="participent_name[]" value="<?php if(isset($participent['participant_name']) && !empty($participent['participant_name'])){ echo $participent['participant_name']; } ?>">
                                       
                                    </div>

                                    <input type="hidden" name="participant_id[]" value="<?php if(isset($participent['participant_id']) && !empty($participent['participant_id'])){ echo $participent['participant_id']; } ?>">
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Participant Type:</label>
                                         <select class="form-control m-input" name="Participant_Type[]" id="Participant_Type">
                                          <?php if (isset($partcipant_types) && !empty($partcipant_types)) { ?>
                                          <?php foreach($partcipant_types as $partcipant){ ?>
                                          <option  class="text-uppercase" value="<?php echo $partcipant['participant_type_id'];?>" <?php if($partcipant['participant_type_id'] == $participent['participant']) { echo 'selected'; }  ?>>
                                          <?php  echo $partcipant['participant_type'];  ?>
                                          </option>
                                          <?php } } ?>

                                        </select>
                                      <!--  <input type="text" class="form-control m-input" placeholder="Enter From Time" id="date" name="date"> -->
                                       
                                    </div>
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Phone:</label>
                                       <div class="input-group m-input-group m-input-group--square">
                                          <input type="text" class="form-control m-input" placeholder="Enter Phone Number" id="paricipant_Phone" name="paricipant_Phone[]" value="<?php if(isset($participent['phone']) && !empty($participent['phone'])){ echo $participent['phone']; } ?>">
                                       </div>
                                       
                                    </div>

                                    <div class="col-lg-3">
                                       <label class="col-form-label">Men:</label>
                                       <input type="text" class="form-control m-input" placeholder="Total Mens" id="men" name="men[]" value="<?php if(isset($participent['men']) && !empty($participent['men'])){ echo $participent['men']; } ?>">
                                       
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">

                                    <div class="col-lg-3">
                                        <label class="col-form-label">Women:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Total Womens" id="Women" name="Women[]" value="<?php if(isset($participent['women']) && !empty($participent['women'])){ echo $participent['women']; } ?>">
                                         
                                       </div>
                                      
                                    </div>
                                    
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Child:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Total Childs" id="Child" name="Child[]" value="<?php if(isset($participent['child']) && !empty($participent['child'])){ echo $participent['child']; } ?>">
                                         
                                       </div>
                                      
                                    </div>

                                    <div class="col-lg-3">
                                        <label class="col-form-label">Description:</label>
                                        <textarea class="form-control m-input" id="Description" name="Description[]" rows="3"><?php if(isset($participent['description']) && !empty($participent['description'])){ echo $participent['description']; } ?></textarea> 
                                    </div>
                                    
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Date:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="date" id="participent_date" name="participent_date[]" class="form-control m-input" placeholder="Enter Date" value="<?php if(isset($participent['date']) && !empty($participent['date'])){ echo $participent['date']; } ?>">
                                       </div>
                                    </div>
                                  
                                 </div><hr style="color: green">

                                 <?php } } ?>  
                              </div>
                           

                           <!--end::Form-->
                        </div>

                        <div class="m-portlet">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                       <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                       Finance
                                    </h3>
                                 </div>
                              </div>
                           </div>

                           <!--begin::Form-->
                         
                              <div class="m-portlet__body">

                              <?php if (isset($program_finance) && !empty($program_finance)){?>
                              <?php $i=1; foreach($program_finance as $finance){?>
                              

                                 <div class="form-group m-form__group row">
                                   
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Category:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Finance Category" id="Finance_Category" name="Finance_Category[]" value="<?php if(isset($finance['finance_category']) && !empty($finance['finance_category'])){ echo $finance['finance_category']; } ?>">
                                       
                                      </div>
                                      <input type="hidden" name="finance_id[]" value="<?php if(isset($finance['finance_id']) && !empty($finance['finance_id'])){ echo $finance['finance_id']; } ?>">

                                        <input type="hidden" name="vendor_id[]" value="<?php if(isset($finance['vendor_id']) && !empty($finance['vendor_id'])){ echo $finance['vendor_id']; } ?>">
                                    
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Vendor Name:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Vendor Name" id="Vendor_Name" name="Vendor_Name[]" value="<?php if(isset($finance['vendor_name']) && !empty($finance['vendor_name'])){ echo $finance['vendor_name']; } ?>">
                                       
                                    </div>
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Location:</label>
                                       <div class="input-group m-input-group m-input-group--square">    
                                          <input type="text" class="form-control m-input" placeholder="Enter Vendor Location" id="Location_vendor" name="Location_vendor[]" value="<?php if(isset($finance['location']) && !empty($finance['location'])){ echo $finance['location']; } ?>">
                                       </div>
                                       
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Phone:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Phone" id="Vendor_phone" name="Vendor_phone[]" value="<?php if(isset($finance['phone']) && !empty($finance['phone'])){ echo $finance['phone']; } ?>">
                                       
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                   
                                    <div class="col-lg-3">
                                         <label class="col-form-label">Total Amount:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Enter Total Amount" id="Total_Amount" name="Total_Amount[]" value="<?php if(isset($finance['total_amount']) && !empty($finance['total_amount'])){ echo $finance['total_amount']; } ?>">
                                         
                                       </div>
                                      
                                    </div>
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Payment Type:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Enter Payment Type" id="Payment_Type" name="Payment_Type[]" value="<?php if(isset($finance['payment_type']) && !empty($finance['payment_type'])){ echo $finance['payment_type']; } ?>">
                                         
                                       </div>
                                       
                                    </div>
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Bank:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <select id="single" class="form-control m-input" id="Bank" name="Bank[]">
                                          <?php if (isset($bank_list) && !empty($bank_list)) { ?>
                                          <?php foreach($bank_list as $bank) { ?>
                                          <option  class="text-uppercase" value="<?php echo $bank['bank_id'];?>" <?php if($finance['bank_id'] == $bank['bank_id']) { echo 'selected'; }  ?>>
                                          <?php  echo $bank['bank_name'];  ?>
                                          </option>
                                          <?php } } ?>

                                        </select>
                                       </div>
                                       
                                    </div>

                                    <div class="col-lg-3">
                                        <label class="col-form-label">Bank Account Number:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Bank Account Number" id="bank_account_num" name="bank_account_num[]" value="<?php if(isset($finance['bank_acno']) && !empty($finance['bank_acno'])){ echo $finance['bank_acno']; } ?>">
                                          
                                       </div>
                                       
                                    </div>
                                 </div>
                                  <div class="form-group m-form__group row">

                                     <div class="col-lg-3">
                                       <label class="col-form-label">Bank Ifsc Code:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Bank Ifsc Code" id="bank_ifsc_code" name="bank_ifsc_code[]" value="<?php if(isset($finance['bank_ifsc_code']) && !empty($finance['bank_ifsc_code'])){ echo $finance['bank_ifsc_code']; } ?>">
                                    </div>
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">User Account Name:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="User Account Name" id="user_account" name="user_account[]" value="<?php if(isset($finance['account_name']) && !empty($finance['account_name'])){ echo $finance['account_name']; } ?>">
                                       </div> 
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="col-form-label">Expenditure Description:</label>
                                        <textarea class="form-control m-input" id="exp_Description" name="exp_Description[]" rows="3" ><?php if(isset($finance['expenditure_desc']) && !empty($finance['expenditure_desc'])){ echo $finance['expenditure_desc']; } ?></textarea> 
                                    </div>

                                 </div><hr style="color: green">

                                 <?php } } ?>  
                              </div>
                             
                         

                           <!--end::Form-->
                        </div>               

          <div class="m-portlet">
                           <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                       <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                       Transport
                                    </h3>
                                 </div>
                              </div>
                           </div>

                           <!--begin::Form-->
                          
                              <div class="m-portlet__body">

                              <?php if (isset($program_transport) && !empty($program_transport)){?>
                              <?php $i=1; foreach($program_transport as $transport){?>
                              

                                 <div class="form-group m-form__group row">
                                   
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Vechile Name:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Vechile Name" id="Vechile" name="vechile_name[]" value="<?php if(isset($transport['vechile_name']) && !empty($transport['vechile_name'])){ echo $transport['vechile_name']; } ?>">
                                       
                                    </div>

                                     <input type="hidden" name="transport_id[]" value="<?php if(isset($transport['transport_id']) && !empty($transport['transport_id'])){ echo $transport['transport_id']; } ?>">
                                    
                                    <div class="col-lg-3">
                                       <label class="col-form-label">Register No:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Register No" id="register_no" name="register_no[]" value="<?php if(isset($transport['register_no']) && !empty($transport['register_no'])){ echo $transport['register_no']; } ?>">
                                       
                                    </div>
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Driver Name:</label>
                                       <div class="input-group m-input-group m-input-group--square">    
                                          <input type="text" class="form-control m-input" placeholder="Enter Driver Name" id="driver_name" name="driver_name[]" value="<?php if(isset($transport['driver_name']) && !empty($transport['driver_name'])){ echo $transport['driver_name']; } ?>">
                                       </div>
                                       
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Licence Id:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Licence Id" id="licence_id" name="licence_id[]" value="<?php if(isset($transport['licence_id']) && !empty($transport['licence_id'])){ echo $transport['licence_id']; } ?>">
                                       
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                   
                                    <div class="col-lg-3">
                                         <label class="col-form-label">Vechicle Capacity:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Enter TVechicle Capacity" id="vechicle_capacity" name="vechicle_capacity[]" value="<?php if(isset($transport['vechicle_capacity']) && !empty($transport['vechicle_capacity'])){ echo $transport['vechicle_capacity']; } ?>">
                                         
                                       </div>
                                      
                                    </div>
                                   
                                    <div class="col-lg-3">
                                        <label class="col-form-label">From Location:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Enter From Location" id="From_Location" name="From_Location[]" value="<?php if(isset($transport['from_location']) && !empty($transport['from_location'])){ echo $transport['from_location']; } ?>">
                                         
                                       </div>
                                       
                                    </div>
  
                                    <div class="col-lg-3">
                                       <label class="col-form-label">To Location:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Enter To Location" id="To_Location" name="To_Location[]" value="<?php if(isset($transport['to_locatdion']) && !empty($transport['to_locatdion'])){ echo $transport['to_locatdion']; } ?>">
                                       </div>
                                       
                                    </div>

                                    <div class="col-lg-3">
                                        <label class="col-form-label">Google Distance:</label>
                                       <div class="m-input-icon m-input-icon--right">
                                          <input type="text" class="form-control m-input" placeholder="Google Distance" id="Google_Distance" name="Google_Distance[]" value="<?php if(isset($transport['google_distance']) && !empty($transport['google_distance'])){ echo $transport['google_distance']; } ?>">
                                          
                                       </div>
                                       
                                    </div>
                                 </div>
                                  <div class="form-group m-form__group row">

                                     <div class="col-lg-3">
                                       <label class="col-form-label">Manual distance:</label>
                                       <input type="text" class="form-control m-input" placeholder="Enter Manual distance" id="Manual_distance" name="Manual_distance[]" value="<?php if(isset($transport['manual_distance']) && !empty($transport['manual_distance'])){ echo $transport['manual_distance']; } ?>">
                                       
                                    </div>
                                   
                                 </div><hr style="color: green">

                                 <?php } } ?>  
                              </div>
                              <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                 <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                       <div class="col-lg-5"></div>
                                       <div class="col-lg-7">
                                          <input name="program_update" type="submit" value="Update" class="btn btn-brand">
                                          <button type="reset" class="btn btn-secondary">Cancel</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                          

                           <!--end::Form-->
                        </div> 
                   </form>       

      <!--end::Form-->
      </div>
   </div>
<!-- </div>
</div> -->