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
                        <h3 class="card-label">View User
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <h5>Your current User Group:</h5>
                                </div>
                                <div class="form-group">
                                    <label style="margin-right: 0.5em;">User Group:</label>
                                    <h6 class=""><?= $customer_user->user_group ?></h6>
                                </div>
                            </div>
                        </div>

                        <hr class="form-group row">

                        <div class="form-group row super_emp_div">
                            <div class="col-lg-3">
                                <label>First Name: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->firstname ?></h6>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label>Last Name: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->lastname ?></h6>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label>Email:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->email ?></h6>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label>Password:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->password ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>Company Name:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->company_name ?></h6>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Line 1:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->street1 ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Line 2: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->street2 ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>City:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->city ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>State: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->state ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Zip Code:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->zip_code ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label>Country:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->country ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Language:</label>
                                <div class="input-group">
                                    <h6 class="text-black-50 view-data"><?= $customer_user->language ?></h6>
                                    <div class="input-group-append"></div>
                                </div>
                                <!-- <div class="input-group">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control selectpicker" data-size="5" tabindex="null" name="language">
                                            <option value="">Enter your Language</option>
                                            <option value="en">English</option>
                                            <option value="de">German</option>
                                        </select>
                                    </div>
                                </div> -->
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
                    </form>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</div>
</div>