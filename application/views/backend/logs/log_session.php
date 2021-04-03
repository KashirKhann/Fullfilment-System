<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <!--begin::Notice-->
            <div class="card card-custom gutter-b"></div>
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Sessions Logs
                            <span class="d-block text-muted pt-2 font-size-sm">Logs for Sign In and Sign Out Report</span>
                        </h3>
                    </div>
                </div>

                <!-- New Customers Accounts Table -->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <!-- <h4><i class="flaticon2-next"></i> New Customers Accounts</h4>
                    <hr> -->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                        <thead>
                            <tr>
                                <th>Log ID</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>User ID</th>
                                <th>Type</th>
                                <th>Created On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($log_session as $key => $val) { ?>
                                <tr>
                                    <td><?php echo $val->id ?></td>
                                    <td><?php echo $val->firstname ?></td>
                                    <td><?php echo $val->email ?></td>
                                    <td><?php echo $val->role ?></td>
                                    <td><?php echo $val->user_id ?></td>
                                    <td><?php echo $val->type ?></td>
                                    <td><?php echo $val->created_on ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>