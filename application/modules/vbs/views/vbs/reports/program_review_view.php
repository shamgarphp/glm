<div class="m-grid__item m-grid__item--fluid m-wrapper">

<div class="m-content">

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Program review view
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <table class="table table-bordered">
                   <tr>
                    <td style="width: 30%"><b>Category</b></td>
                    <td>
                     <b><?php if(isset($program_review_view['review_category']) && !empty($program_review_view['review_category'])) { echo $program_review_view['review_category']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Phone</b></td>
                    <td>
                     <b><?php if(isset($program_review_view['phone']) && !empty($program_review_view['phone'])) { echo $program_review_view['phone']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Username/Email</b></td>
                    <td><b><?php if(isset($program_review_view['email']) && !empty($program_review_view['email'])) { echo $program_review_view['email']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Review</b></td>
                    <td>
                      <b><?php if(isset($program_review_view['review']) && !empty($program_review_view['review'])) { echo $program_review_view['review']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Image</b></td>
                    <td>
                     <b><img src="<?php if(isset($program_review_view['image']) && !empty($program_review_view['image'])) { echo $program_review_view['image']; } ?>" height="250" width="250"></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Date</b></td>
                    <td>
                     <b><?php if(isset($program_review_view['created_on']) && !empty($program_review_view['created_on'])) { echo $program_review_view['created_on']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <!--end::Portlet-->

            
 </div>


<!-- </div>
</div>    -->