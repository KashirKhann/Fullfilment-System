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
                        <h3 class="card-label"><?= $this->lang->line('edit_user') ?> <span class="form-text text-muted"><?= $this->lang->line('edit_and_save_your_information') ?>.</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form" action="<?php echo base_url('administrator/update_customer_user'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $customer_user->id; ?>" name="id">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h5><?= $this->lang->line('select_the_user_type_you_want_to_edit') ?>:</h5>
                                </div>
                                <label style="margin-right: 0.5em;"><?= $this->lang->line('user_group') ?>:</label>
                                <select class="form-control col-lg-4" data-size="5" tabindex="null" name="user_group" id="user_group" readonly>
                                    <option value="<?= $customer_user->user_group ?>"><?= $customer_user->user_group ?></option>
                                </select>
                                <span class="form-text text-muted"><?= $this->lang->line('please_select_user_group') ?></span>
                            </div>
                            <div class="col-lg-6 assignparent">
                                <div class="form-group">
                                    <h5><?= $this->lang->line('select_the_user_parent') ?>:</h5>
                                </div>

                                <div class="col-md-6">
                                    <!-- <label style="margin-right: 0.5em;">User Parent:</label> -->
                                    <?php
                                    if ($customer_user->user_group == 'Admin') {
                                    ?>
                                        <input type="hidden" name="user_parent">
                                    <?php
                                    } else {
                                    ?>
                                        <label style="margin-right: 0.5em;"><?= $this->lang->line('user_parent') ?>:</label>
                                        <select class="form-control" data-size="5" tabindex="null" name="user_parent" required id="user_parent">
                                            <option value="">-- Select --</option>
                                            <?php
                                            foreach ($getAllUsers as $getAllUser) {
                                                if ($getAllUser->user_group == 'Admin') {
                                            ?>
                                                    <option class="admin_options" value="<?= $getAllUser->id ?>"><?= $getAllUser->firstname ?> (<?= $getAllUser->email ?>)</option>
                                                <?php
                                                } elseif ($getAllUser->user_group == 'Customer') {
                                                ?>
                                                    <option class="customer_options" value="<?= $getAllUser->id ?>"><?= $getAllUser->firstname ?> (<?= $getAllUser->email ?>)</option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_select_parent') ?></span>
                            </div>
                        </div>

                        <hr class="form-group row">

                        <div class="form-group row super_emp_div">
                            <div class="col-lg-3">
                                <label><?= $this->lang->line('first_name') ?>: <span class="required_field">*</span></label>
                                <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_first_name') ?>" name="firstname" value="<?= $customer_user->firstname ?>" />
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_first_name') ?></span>
                            </div>
                            <div class="col-lg-3">
                                <label><?= $this->lang->line('last_name') ?>: <span class="required_field">*</span></label>
                                <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_last_name') ?>" name="lastname" value="<?= $customer_user->lastname ?>" />
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_last_name') ?></span>
                            </div>
                            <div class="col-lg-3">
                                <label><?= $this->lang->line('email') ?>: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_email') ?>" name="email" value="<?= $customer_user->email ?>" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="flaticon-multimedia"></i></span></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_email') ?></span>
                            </div>
                            <div class="col-lg-3">
                                <label><?= $this->lang->line('password') ?>: <span class="required_field">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_password') ?>" name="password" value="<?= $customer_user->password ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_password') ?></span>
                            </div>
                        </div>
                        <div class="form-group row super_emp_div">
                            <div class="col-lg-3">
                                <label><?= $this->lang->line('language') ?>:</label>
                                <div class="input-group">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control selectpicker" data-size="5" tabindex="null" name="language">
                                            <option value=""><?= $this->lang->line('enter_your_language') ?></option>
                                            <option value="en" <?php if ($customer_user->language == "en") echo 'selected="selected"'; ?>>English</option>
                                            <option value="de" <?php if ($customer_user->language == "de") echo 'selected="selected"'; ?>>German</option>
                                        </select>
                                        <span class="form-text text-muted"><?= $this->lang->line('enter_your_language') ?></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('company_name') ?>:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_company_name') ?>" name="company_name" value="<?= $customer_user->company_name ?>" />
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_company_name') ?></span>
                            </div>
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('street_line_1') ?>:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_street_line_1') ?>" name="street1" value="<?= $customer_user->street1 ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_street_line_1') ?></span>
                            </div>
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('street_line_2') ?>:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_street_line_2') ?>" name="street2" value="<?= $customer_user->street2 ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_street_line_2') ?></span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('city') ?>:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_city') ?>" name="city" value="<?= $customer_user->city ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_city') ?></span>
                            </div>
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('state') ?>:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_state') ?>" name="state" value="<?= $customer_user->state ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_state') ?></span>
                            </div>
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('zip_code') ?>:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_zip_code') ?>" name="zip_code" value="<?= $customer_user->zip_code ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_zip_code') ?></span>
                            </div>
                        </div>
                        <div class="form-group row admin_div" style="display: none;">
                            <div class="col-lg-4">
                                <label><?= $this->lang->line('country') ?>:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?= $this->lang->line('please_enter_your_country') ?>" name="country" value="<?= $customer_user->country ?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted"><?= $this->lang->line('please_enter_your_country') ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-4"><?= $this->lang->line('photo') ?></label>
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