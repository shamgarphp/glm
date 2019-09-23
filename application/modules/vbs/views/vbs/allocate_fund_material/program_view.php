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
         <div class="m-portlet__body">
            <h3 align="center">Program Timing Details</h3>
            <!--begin::Section-->
            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>s.no</th>
                           <th>From-time</th>
                           <th>To-time</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php if (isset($programs_time) && !empty($programs_time)){?>
                     <?php $i=1; foreach($programs_time as $program_time){?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php if (!empty($program_time['from_time'])){echo $program_time['from_time'];}?></td>
                           <td><?php if (!empty($program_time['from_time'])){echo $program_time['to_time'];}?></td>
                           <td><?php $newDate = date("d-m-Y", strtotime($program_time['date'])); if (!empty($newDate)){echo $newDate;}?></td>
                        </tr>
                     <?php } } else { ?>
                     	</tbody>
                     <tr align="left">
                        <td >NO DATA AVAILABLE</td>
                     </tr>
                     <?php } ?>
                  </table>
               </div>
            </div>
             
            <!--end::Section-->
            <!--begin::Section-->
            <h3 align="center">Participants Details</h3>
            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>s.no</th>
                           <th>Program Aim</th>
                           <th>Name</th>
                           <th>Participant Type</th>
                           <th>Phone</th>
                           <th>Men</th>
                           <th>Women</th>
                           <th>Child</th>
                           <th>Description</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($programs_participent) && !empty($programs_participent)){?>
                        <?php $i=1; foreach($programs_participent as $participent){?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php if (!empty($participent['program_aim'])){echo $participent['program_aim'];}?></td>
                           <td><?php if (!empty($participent['participant_name'])){echo $participent['participant_name'];}?></td>
                           <td><?php if (!empty($participent['participant_type'])){echo $participent['participant_type'];}?></td>
                           <td><?php if (!empty($participent['phone'])){echo $participent['phone'];}?></td>
                           <td><?php if (!empty($participent['men'])){echo $participent['men'];}?></td>
                           <td><?php if (!empty($participent['women'])){echo $participent['women'];}?></td>
                           <td><?php if (!empty($participent['child'])){echo $participent['child'];}?></td>
                           <td><?php if (!empty($participent['description'])){echo $participent['description'];}?></td>
                           <td><?php  $participantDate = date("d-m-Y", strtotime($participent['date'])); if (!empty($participantDate)){echo $participantDate;}?></td>
                        </tr>
                        <?php } } else { ?>
                        <tr align="left">
                           <td >NO DATA AVAILABLE</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <h3 align="center">Finance Details</h3>
             <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>s.no</th>
                           <th>Category</th>
                           <th>Vendor Name</th>
                           <th>Location</th>
                           <th>Phone</th>
                           <th>Total Amount</th>
                           <th>Payment Type</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($program_finance) && !empty($program_finance)){?>
                        <?php $i=1; foreach($program_finance as $finance){?>
                        <tr>
                           <th><?php echo $i++;?></th>
                            <td><?php if (!empty($finance['finance_category'])){echo $finance['finance_category'];}?></td>
                           <td><?php if (!empty($finance['vendor_name'])){echo $finance['vendor_name'];}?></td>
                           <td><?php if (!empty($finance['location'])){echo $finance['location'];}?></td>
                           <td><?php if (!empty($finance['phone'])){echo $finance['phone'];}?></td>
                           <td><?php if (!empty($finance['total_amount'])){echo $finance['total_amount'];}?></td>
                           <td><?php if (!empty($finance['payment_type'])){echo $finance['payment_type'];}?></td>
                            <td><?php if (!empty($finance['created_on'])){echo $finance['created_on'];}?></td>  
                        </tr>
                        <?php } } else { ?>
                        <tr align="left">
                           <td >NO DATA AVAILABLE</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
              <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>Bank</th>
                           <th>Bank Account Number</th>
                           <th>Bank Ifsc Code</th>
                           <th>User Account Name</th>
                           <th>Account No</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($program_finance) && !empty($program_finance)){?>
                        <?php $i=1; foreach($program_finance as $finance){?>
                        <tr>

                          <td><?php if (!empty($finance['bank_name'])){echo $finance['bank_name'];}?></td> 
                          <td><?php if (!empty($finance['bank_acno'])){echo $finance['bank_acno'];}?></td>
                           <td><?php if (!empty($finance['bank_ifsc_code'])){echo $finance['bank_ifsc_code'];}?></td>
                           <td><?php if (!empty($finance['account_name'])){echo $finance['account_name'];}?></td>
                           <td><?php if (!empty($finance['bank_acno'])){echo $finance['bank_acno'];}?></td>
                         
                        </tr>
                        <?php } } else { ?>
                        <tr align="left">
                           <td >NO DATA AVAILABLE</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>

            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>Expenditure Description</th>
                           <th>quotation image</th> 
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($program_finance) && !empty($program_finance)){?>
                        <?php $i=1; foreach($program_finance as $finance){?>
                        <tr>
                           <td><?php if (!empty($finance['expenditure_desc'])){echo $finance['expenditure_desc'];}?></td>
                           <td><img src="<?php if(isset($finance['quation_image']) && !empty($finance['quation_image'])) { echo $finance['quation_image']; } ?>" height="100" width="100"></td>
                        </tr>
                        <?php } } else { ?>
                        <tr align="left">
                           <td>NO DATA AVAILABLE</td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div> 

            <h3 align="center">Transport Details</h3>
            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>s.no</th>
                           <th>Location</th>
                           <th>Vechile Name</th>
                           <th>Register No</th>
                           <th>Driver Name</th>
                           <th>Licence Id</th>
                           <th>Vechicle Capacity</th>
                          
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(isset($program_transport) && !empty($program_transport)){?>
                        <?php $i=1; foreach($program_transport as $transport){?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php if (!empty($transport['area'])){echo $transport['area'];}?></td>
                           <td><?php if (!empty($transport['vechile_name'])){echo $transport['vechile_name'];}?></td>
                           <td><?php if (!empty($transport['register_no'])){echo $transport['register_no'];}?></td>
                           <td><?php if (!empty($transport['driver_name'])){echo $transport['driver_name'];}?></td>
                           <td><?php if (!empty($transport['licence_id'])){echo $transport['licence_id'];}?></td>
                           <td><?php if (!empty($transport['vechicle_capacity'])){echo $transport['vechicle_capacity'];}?></td>
                        </tr>
                        <?php } } else { ?>
                        <div align="left">
                           <td >NO DATA AVAILABLE</td>
                        </div>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>

            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>From Location</th>
                           <th>To Locatdion</th>
                           <th>Google Distance</th>
                           <th>Manual Distance</th>
                           <th>Implemented by</th>
                           <!-- <th>Date</th> -->
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(isset($program_transport) && !empty($program_transport)){?>
                        <?php $i=1; foreach($program_transport as $transport){?>
                        <tr>
                           <td><?php if(!empty($transport['from_location'])){echo $transport['from_location'];}?></td>
                           <td><?php if(!empty($transport['to_locatdion'])){echo $transport['to_locatdion'];}?></td>
                           <td><?php if(!empty($transport['google_distance'])){echo $transport['google_distance'];}?></td>
                           <td><?php if(!empty($transport['manual_distance'])){echo $transport['manual_distance'];}?></td>
                           <td><?php if(!empty($transport['implemented_by'])){echo $transport['implemented_by'];}?></td>
                        <?php } } else { ?>
                        <div align="left">
                           <td >NO DATA AVAILABLE</td>
                        </div>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>

            <!--end::Section-->
         </div>
         <!--end::Form-->
      </div>
   </div>
<!-- </div>
</div> -->