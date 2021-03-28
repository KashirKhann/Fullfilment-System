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
                        <h3 class="card-label">Add User
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form" action="<?php echo base_url('administrator/insert-customer-user'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h5>Select the user type you want to add:</h5>
                                </div>
                                <label style="margin-right: 0.5em;">User Group:</label>
                                <div class="dropdown bootstrap-select form-control col-md-4">
                                    <select class="form-control selectpicker" data-size="5" tabindex="null" name="user_group" id="user_group">
                                        <?php
                                        if ($this->session->userdata('role') == 'SuperAdmin') {
                                        ?>
                                            <option value="SuperAdmin">SuperAdmin</option>
                                            <option value="Admin">Admin</option>
                                        <?php
                                        }
                                        if ($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'SuperAdmin') {
                                        ?>
                                            <option value="Customer">Customer</option>
                                        <?php
                                        }
                                        ?>
                                        <option value="Employee">Employee</option>
                                    </select>
                                </div>
                                <span class="form-text text-muted">Please select user group</span>
                            </div>
                        </div>

                        <hr class="form-group row">

                        <div class="form-group row super_emp_div">
                            <div class="col-lg-3">
                                <label>First Name: <span class="required_field">*</span></label>
                                <input type="text" class="form-control" placeholder="Please enter your First name" name="firstname" value="" />
                                <span class="form-text text-muted">Please enter your First Name</span>
                            </div>
                            <div class="col-lg-3">
                                <label>Last Name: <span class="required_field">*</span></label>
                                <input type="text" class="form-control" placeholder="Please enter your Last name" name="lastname" value="" />
                                <span class="form-text text-muted">Please enter your Last Name</span>
                            </div>
                            <div class="col-lg-3">
                                <label>Email:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Please enter your Email" name="email" value="" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="flaticon-multimedia"></i></span></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Email</span>
                            </div>
                            <div class="col-lg-3">
                                <label>Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Enter your Password" name="password" value="" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Password</span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>Company Name:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Please enter your company name" name="company_name" value="" />
                                </div>
                                <span class="form-text text-muted">Please enter your Company Name</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Line 1:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Street line 1" name="street1" value="" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Street Line 1</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Line 2: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Street line 2" name="street2" value="" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Street Line 2</span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>City:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your city" name="city" value="" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your city</span>
                            </div>
                            <div class="col-lg-4">
                                <label>State: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your State" name="state" value="" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your State</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Zip Code:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Enter your Zip Code" name="zip_code" value="" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Zip Code</span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>Country:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Country" name="country" value="" />
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
                                <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(<?php echo base_url('assets/backend'); ?>/media/users/blank.png)">
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