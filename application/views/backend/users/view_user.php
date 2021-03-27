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
                    <form class="form" action="" method="">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="Please enter your name" name="name" value="<?php echo $customer_user->name;?>" />
                                <span class="form-text text-muted">Please enter your name</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Email:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Please enter your Email" name="email" value="<?php echo $customer_user->email;?>" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="flaticon-multimedia"></i></span></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Email</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Recovery Email:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Please enter your Recovery Email" name="email_recovery" value="<?php echo $customer_user->email_recovery;?>" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="flaticon-multimedia"></i></span></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Recovery Email</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>Phone Number:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="(000) 000-0000" name="number" value="<?php echo $customer_user->number;?>" />
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Phone Number</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Address Line 1:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your address line 1" name="addressline1" value="<?php echo $customer_user->addressline1;?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Address Line 1</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Address Line 2:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your address line 2" name="addressline2" value="<?php echo $customer_user->addressline2;?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Address Line 2</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>City:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your city" name="city" value="<?php echo $customer_user->city;?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your city</span>
                            </div>
                            <div class="col-lg-4">
                                <label>State:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your State" name="state" value="<?php echo $customer_user->state;?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your State</span>
                            </div>
                            <div class="col-lg-4">
                                <label>Zip Code:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Enter your Zip Code" name="zipcode" value="<?php echo $customer_user->zipcode;?>" />
                                    <div class="input-group-append"></div>
                                </div>
                                <span class="form-text text-muted">Please enter your Zip Code</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                                <label>User Group:</label>
                                <div class="dropdown bootstrap-select form-control">
                                    <select class="form-control selectpicker" data-size="5" tabindex="null" name="user_group">
                                        <option value="SuperUser" <?php echo ($customer_user->user_group == 'SuperUser')?'selected':'';?>>SuperUser</option>
                                        <option value="Administrator" <?php echo ($customer_user->user_group == 'Administrator')?'selected':'';?>>Administrator</option>
                                    </select>
                                </div>
                                <span class="form-text text-muted">Please select user group</span>
                            </div>
                        <div class="form-group row">
                            <label class="col-form-label col-4">Photo</label>
                            <div class="col-12">
                                <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url(<?php echo base_url('uploads/'.$customer_user->profile_avatar); ?>)">
                                    <div class="image-input-wrapper"></div>
                                   
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="customer_id" value="">
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- <button type="submit" class="btn btn-primary mr-2">Save</button> -->
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