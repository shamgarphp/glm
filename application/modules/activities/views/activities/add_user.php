<div class="m-grid__item m-grid__item--fluid m-wrapper">

          <div class="m-content">
        
            <div class="m-portlet m-portlet--tab">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                          <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                          User Registration
                        </h3>
                      </div>
                    </div>
                  </div>

                  <!--begin::Form-->
                  <form class="m-form m-form--fit m-form--label-align-right" method="POST">
                    <div class="m-portlet__body">
                      <div class="form-group m-form__group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control m-input m-input--air" name="first_name" id="first_name"  placeholder="Enter first Name">
                      </div>

                      <div class="form-group m-form__group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control m-input m-input--air"  name="last_name"  id="last_name"  placeholder="Enter Last Name">
                      </div>

                       <div class="form-group m-form__group">
                        <label for="exampleSelect1">Add Role</label>
                        <select class="form-control m-input m-input--air" name="roles" id="roles">
                          <option value="">Select</option>
                          <?php foreach($roles_list as $role){ ?>
                          <option value="<?php echo $role['role_id'];?>">
                            <?php echo $role['name'];?>
                          </option>         
                          <?php } ?>
                        </select>
                       </div>

                      <!-- <div class="form-group m-form__group"> -->
                      <!--   <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control m-input m-input--air" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <span class="m-form__help">We'll never share your email with anyone else.</span>
                      </div>
                      <div class="form-group m-form__group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control m-input m-input--air" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group m-form__group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control m-input m-input--air" id="exampleSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group m-form__group">
                        <label for="exampleSelect2">Example multiple select</label>
                        <select multiple="" class="form-control m-input m-input--air" id="exampleSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group m-form__group">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control m-input m-input--air" id="exampleTextarea" rows="3"></textarea>
                      </div> -->
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions">
                        <button type="Submit" class="btn btn-accent" name="add_user" value="add_user">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </form>

                  <!--end::Form-->
                </div>



          </div>
        </div>
      </div>