 </div>
            </div>
<!-- begin::Footer -->
      <footer class="m-grid__item   m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
          <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
              <span class="m-footer__copyright">
                2019 &copy;  <a href="#" class="m-link"></a>
              </span>
            </div>
           
          </div>
        </div>
      </footer>

      <!-- end::Footer -->
    </div>

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->

    <!--begin::Modal-->
<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Profile</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url('admin_update');?>">
                    
                    <div class="form-group">
                        <label for="message-text" class="form-control-label"><b>Name:</b></label>
                        <input type="text" class="form-control" id="edit_name" name="name" value="<?php echo $this->session->userdata('admin_username');?>" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label"><b>Email:</b></label>
                        <input type="gmail" class="form-control" id="edit_email" name="email" value="<?php echo $this->session->userdata('admin_email');?>" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label"><b>phone:</b></label>
                        <input type="text" class="form-control" id="edit_phone" name="mobile" value="<?php echo $this->session->userdata('admin_phone');?>" required>
                       
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="admin_update" value="update">
                    </div>
                     <input type="hidden" name="admin_id" id="admin_hide_id" value="<?php echo $this->session->userdata('admin_id');?>">
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
               </form>

            </div>
            
        </div>
    </div>
</div>

<!--end::Modal-->
   
