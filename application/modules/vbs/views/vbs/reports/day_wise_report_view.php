<div class="m-grid__item m-grid__item--fluid m-wrapper">

<div class="m-content">

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Day wise report view
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <table class="table table-bordered">
                  <tr>
                    <td style="width: 30%"><b>Program</b></td>
                    <td>
                      <b>
                      Vbs</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Date</b></td>
                    <td><b><?php  if(isset($daywise_report_view['date']) && !empty($daywise_report_view['date'])) { $newDate = date("d-m-Y", strtotime($daywise_report_view['date']));  echo $newDate; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Men</b></td>
                    <td>
                      <b><?php if(isset($daywise_report_view['men']) && !empty($daywise_report_view['men'])) { echo $daywise_report_view['men']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Women</b></td>
                    <td>
                     <b><?php if(isset($daywise_report_view['women']) && !empty($daywise_report_view['women'])) { echo $daywise_report_view['women']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Boys</b></td>
                    <td>
                     <b><?php if(isset($daywise_report_view['boys']) && !empty($daywise_report_view['boys'])) { echo $daywise_report_view['boys']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Girls</b></td>
                    <td>
                      <b><?php if(isset($daywise_report_view['girls']) && !empty($daywise_report_view['girls'])) { echo $daywise_report_view['girls']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Place oF Work</b></td>
                    <td>
                      <b><?php if(isset($daywise_report_view['place_of_work']) && !empty($daywise_report_view['place_of_work'])) { echo $daywise_report_view['place_of_work']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Work Information</b></td>
                    <td>
                     <b><?php if(isset($daywise_report_view['work_information']) && !empty($daywise_report_view['work_information'])) { echo $daywise_report_view['work_information']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Prayer points</b></td>
                    <td>
                     <b><?php if(isset($daywise_report_view['prayer_points']) && !empty($daywise_report_view['prayer_points'])) { echo $daywise_report_view['prayer_points']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Achievements</b></td>
                    <td>
                     <b><?php if(isset($daywise_report_view['achievements']) && !empty($daywise_report_view['achievements'])) { echo $daywise_report_view['achievements']; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Challenges</b></td>
                    <td>
                      <b><?php if(isset($daywise_report_view['challenges']) && !empty($daywise_report_view['challenges'])) { echo $daywise_report_view['challenges']; } ?></b>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <!--end::Portlet-->

            
 </div>


<!-- </div>
</div>  -->  