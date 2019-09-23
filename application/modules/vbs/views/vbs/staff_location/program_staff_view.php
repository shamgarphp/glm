<div class="m-grid__item m-grid__item--fluid m-wrapper">
   <div class="m-content">
      <div class="m-portlet m-portlet--tab">
         <!--begin::Form-->
         <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
               <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                     Program Staff View
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
                           <th>S.No</th> 
                           <th>Program Admin</th>
                           <th>Finance Admin</th>
                           <th>Reporting Staff1</th>
                           <th>Reporting Staff2</th>
                           <th>Photography Staff</th>
                        </tr>
                     </thead>
                     <tbody> 
                        <tr>
                        <td><?php if(!empty($program_staff['0']['program_admin'])) { echo ucfirst($program_staff['0']['program_admin']);} ?> </td>
                        <td> <?php if(!empty($program_staff['0']['finance_admin'])) { echo ucfirst($program_staff['0']['finance_admin']);} ?> </td>
                        <td> <?php if(!empty($program_staff['0']['report_staff1'])) { echo ucfirst($program_staff['0']['report_staff1']);} ?> </td>
                        <td> <?php if(!empty($program_staff['0']['report_staff2'])) { echo ucfirst($program_staff['0']['report_staff2']);} ?> </td> 
                        <td> <?php if(!empty($program_staff['0']['photograph'])) { echo ucfirst($program_staff['0']['photograph']);} ?> </td>
                        </tr>
                 
                  </table>
               </div>
            </div>
             
            <!--end::Section-->
            <!--begin::Section-->
            <h3 align="center">Resource Staff</h3>
            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>s.no</th>
                           <th>Name</th>
                           <th>LastName</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($resource_staff) && !empty($resource_staff)){?>
                        <?php $i=1; foreach($resource_staff as $resourcestaff){?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php if (!empty($resourcestaff['first_name'])){echo $resourcestaff['first_name'];}?></td>
                           <td><?php if (!empty($resourcestaff['last_name'])){echo $resourcestaff['last_name'];}?></td>
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
            <h3 align="center">Teaching Staff</h3>
            <div class="m-section">
               <div class="m-section__content">
                  <table class="table table-bordered m-table m-table--border-success">
                     <thead>
                        <tr>
                           <th>s.no</th>
                           <th>Name</th>
                           <th>LastName</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($teaching_staff) && !empty($teaching_staff)){?>
                        <?php $i=1; foreach($teaching_staff as $teachingstaff){?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php if (!empty($teachingstaff['first_name'])){echo $teachingstaff['first_name'];}?></td>
                           <td><?php if (!empty($teachingstaff['last_name'])){echo $teachingstaff['last_name'];}?></td>
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
         </div>
         <!--end::Form-->
      </div>
   </div>
<!-- </div>
</div> -->