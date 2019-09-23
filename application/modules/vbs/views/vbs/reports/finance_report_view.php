<div class="m-grid__item m-grid__item--fluid m-wrapper">

<div class="m-content">

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Finance report view
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <table class="table table-bordered">
                   <tr>
                    <td style="width: 30%"><b>Program</b></td>
                    <td>
                      <b>Vbs</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Actual Amount</b></td>
                    <td>
                     <b><?php if(isset($finance_report_view['act_amount']) && !empty($finance_report_view['act_amount'])) { echo $finance_report_view['act_amount']; } else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Expenditure Amount</b></td>
                    <td><b><?php if(isset($finance_report_view['expenditure_amount ']) && !empty($finance_report_view['expenditure_amount'])) { echo $finance_report_view['expenditure_amount']; } else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Balance Amount</b></td>
                    <td>
                      <b><?php if(isset($finance_report_view['balance_amount']) && !empty($finance_report_view['balance_amount'])) { echo $finance_report_view['balance_amount']; } else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Bill Image</b></td>
                    <td>
                     <b><img src="<?php if(isset($finance_report_view['bill_image']) && !empty($finance_report_view['bill_image'])) { echo $finance_report_view['bill_image']; } ?>"></b>
                    </td>
                  </tr> 
                </table>
              </div>
            </div>

            <!--end::Portlet-->

            
 </div>


<!-- </div>
</div> -->   