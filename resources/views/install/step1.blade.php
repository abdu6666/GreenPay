@extends('layouts.installlayout')

@section('contents')
    <div class="container-fluid py-0">
        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 mx-auto mt-3">
            <div class="card rounded-0">
                <div class="card-header rounded-0">
                    <div class="card-title"><b>Site Installation (Step 1 out of 2)</b></div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <h4 class="text-center"><b>Site Ownership</b></h4>
                        <hr>
                        <p>Please fill in all the required fields below.</p>

                        <div class="alert alert-danger">
                        </div>

                        <form id="installation-form" action="" method="POST">
                            <div class="mb-3">
                                <label for="sitedomain">Site Domain <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="sitedomain" name="sitedomain" value="" required="required" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="databasehost">Database Host<span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="databasehost" name="databasehost" required="required" value="">
                            </div>

                            <div class="mb-3">
                                <label for="database_username">Database Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="database_username" name="database_username" required="required" value="">
                            </div>

                            <div class="mb-3">
                                <label for="dataabsepassword">Database Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control rounded-0" id="dataabsepassword" name="dataabsepassword">
                            </div>

                            <div class="mb-3">
                                <label for="database_name">Database Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="database_name" name="database_name" required="required" value="">
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress">Admin Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control rounded-0" id="emailaddress" name="emailaddress" required="required">
                            </div>

                            <div class="mb-3">
                                <label for="password">Admin Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control rounded-0" id="password" name="password" required="required">
                            </div>

                            <div class="mb-3">
                                <label for="license_key">License Key <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-0" id="license_key" name="license_key" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit" form="installation-form">Save and Proceed to Next</button>
                </div>
            </div>
        </div>
    </div>
@endsection
