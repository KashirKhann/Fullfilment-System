<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <br>
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Edit User <span class="form-text text-muted">Edit and save your Information.</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form" action="<?php echo base_url('administrator/update_customer_user'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $customer_user->id; ?>" name="id">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h5>Select the user type you want to add:</h5>
                                </div>
                                <label style="margin-right: 0.5em;">User Group:</label>
                                <!-- <div class="col-lg-4"> -->
                                <select class="form-control col-lg-4" data-size="5" tabindex="null" name="user_group" id="user_group" readonly>
                                    <option value="<?= $customer_user->user_group ?>"><?= $customer_user->user_group ?></option>
                                </select>
                                <!-- </div> -->
                                <span class="form-text text-muted">Please select user group</span>
                            </div>
                            <div class="col-lg-6 assignparent">
                                <div class="form-group">
                                    <h5>Select the user parent:</h5>
                                </div>
                               
                                <div class="col-md-6">
                                     <!-- <label style="margin-right: 0.5em;">User Parent:</label> -->
                                    <select class="form-control" data-size="5" tabindex="null" name="user_parent" required id="user_parent">
                                        <option value="">-- Select --</option>
                                        <?php 
                                        foreach ($getAllUsers as $getAllUser) {
                                            if($getAllUser->user_group == 'Admin'){
                                                ?>
                                                <option class="admin_options" value="<?= $getAllUser->id ?>"><?= $getAllUser->firstname ?> (<?= $getAllUser->email ?>)</option>
                                                <?php
                                            }elseif ($getAllUser->user_group == 'Customer') {
                                                ?>
                                                <option class="customer_options" value="<?= $getAllUser->id ?>"><?= $getAllUser->firstname ?> (<?= $getAllUser->email ?>)</option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <span class="form-text text-muted">Please select parent</span>
                            </div>
                        </div>

                        <hr class="form-group row">

                        <div class="form-group row super_emp_div">
                            <div class="col-lg-3">
                                <label>First Name: <span class="required_field">*</span></label>
                                <input type="text" class="form-control" placeholder="Please enter your First name" name="firstname" value="<?= $customer_user->firstname ?>" />
                                <span class="form-text text-muted">Please enter your First Name</span>
                            </div>
                            <div class="col-lg-3">
                                <label>Last Name: <span class="required_field">*</span></label>
                                <input type="text" class="form-control" placeholder="Please enter your Last name" name="lastname" value="<?= $customer_user->lastname ?>" />
                                <span class="form-text text-muted">Please enter your Last Name</span>
                            </div>
                            <div class="col-lg-3">
                                <label>Email:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Please enter your Email" name="email" value="<?= $customer_user->email ?>" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="flaticon-multimedia"></i></span></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Email</span>
                            </div>
                            <div class="col-lg-3">
                                <label>Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Enter your Password" name="password" value="<?= $customer_user->password ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Password</span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>Company Name:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Please enter your company name" name="company_name" value="<?= $customer_user->company_name ?>" />
                                </div>
                                <span class="form-text text-muted">Please enter your Company Name</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Line 1:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Street line 1" name="street1" value="<?= $customer_user->street1 ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Street Line 1</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Line 2: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Street line 2" name="street2" value="<?= $customer_user->street2 ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Street Line 2</span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>City:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your city" name="city" value="<?= $customer_user->city ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your city</span>
                            </div>
                            <div class="col-lg-4">
                                <label>State: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your State" name="state" value="<?= $customer_user->state ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your State</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Zip Code:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Enter your Zip Code" name="zip_code" value="<?= $customer_user->zip_code ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Zip Code</span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>Country:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Country" name="country" value="<?= $customer_user->country ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Country</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Language:</label>
                                <div class="input-group">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control selectpicker" data-size="5" tabindex="null" name="language">
                                            <option value="">Enter your Language</option>
                                            <option value="en">English</option>
                                            <option value="de">German</option>
                                        </select>
                                        <span class="form-text text-muted">Please enter your Language</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-4">Photo</label>
                            <div class="col-12">
                                <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(<?php echo base_url('uploads/' . $customer_user->profile_avatar); ?>)">
                                    <div class="image-input-wrapper"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
</div>
