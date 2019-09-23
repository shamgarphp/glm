<div class="m-grid__item m-grid__item--fluid m-wrapper">

<div class="m-content">

            <!--begin::Portlet-->
            <div class="m-portlet">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Program Photos
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <table class="table table-bordered">
                   
                   <tr>
                    <td style="width: 30%"><b>Category</b></td>
                    <td>
                     <b><?php if(isset($program_photo_view['img_category']) && !empty($program_photo_view['img_category'])) { echo $program_photo_view['img_category']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Date</b></td>
                    <td><b><?php if(isset($program_photo_view['date']) && !empty($program_photo_view['date'])) { $newDate = date("d-m-Y", strtotime($program_photo_view['date'])); echo $newDate; } else { echo '--'; } ?></b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 30%"><b>Image Description</b></td>
                    <td><b><?php if(isset($program_photo_view['img_desc']) && !empty($program_photo_view['img_desc'])) { echo $program_photo_view['img_desc']; }else { echo '--'; } ?></b>
                    </td>
                  </tr>
                    <td style="width: 30%"><b>Image</b></td>
                    <td>
                     <b>
                    <?php if (isset($program_photo_images) && !empty($program_photo_images)){?>
                    <?php $i=1; foreach ($program_photo_images as $photos){?>

                      <img src="<?php if(isset($photos) && !empty($photos)) { echo $photos; } ?>" height="250" width="250">

                      <!-- <img src="<?php  //echo $photos; ?>" height="250" width="250"> -->

                    <?php } } ?>
                     </b>
                    </td>
                  </tr>
                 </table>
              </div>
            </div>

            <!--end::Portlet-->

            
 </div>


<!-- </div>
</div>  -->  