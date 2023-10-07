@section('css')
<link href="{{URL::asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />

<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<!-- Date Picker css -->
<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Create Alias</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Members</a></li>
                <li class="breadcrumb-item"><a href="#">List Alias</a></li>
                <li class="breadcrumb-item active"><a href="#">Create Alias</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Account Details
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-6 mx-auto">
                            <div class="form-group mb-3">
                                <label class="form-label">Alias*</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-append">
                                        <span class="btn btn-light">@</span>
                                    </span>
                                    <span class="input-group-append">
                                        <span class="btn btn-light">ma00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Fullname</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-append">
                                        <span class="btn btn-light">@</span>
                                    </span>
                                    <span class="input-group-append">
                                        <span class="btn btn-light">ma00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Password*</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Password must contain 8 -15 charaters">
                                    <span class="input-group-append">
                                        <span class="btn btn-light">@</span>
                                    </span>
                                    <span class="input-group-append">
                                        <span class="btn btn-light">ma00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Confirm Password*</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-append">
                                        <span class="btn btn-light">@</span>
                                    </span>
                                    <span class="input-group-append">
                                        <span class="btn btn-light">ma00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Permissions
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>General & Cash</h4>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                    <span class="custom-control-label">All</span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Members</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Payment Gateway</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Marketing</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Download Transactions</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Cash Setting</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">View SMS</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Affiliate</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">View Member Sensitive Data</span>
                                            </label>
                                            <label class="custom-control custom-checkbox ml-3">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Edit Member</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Invite Friend</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Create Member</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Player</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Private Messages</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Send Private Messages</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Cash Transactions</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Send SMS</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Cash Flow</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Shopping Mall</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Announcement</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Alias</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Logs</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Search Ticket</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Download Members</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Cash Settlement</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Billing</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Safe Code</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Lucky Pick</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Referral Program</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">  
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <h4>Company</h4>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                    <span class="custom-control-label">All</span>
                                </label>
                            </div>                      
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Service Monitor</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">API Monitor</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">System Settings</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Company</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <h4>Credit</h4>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                    <span class="custom-control-label">All</span>
                                </label>
                            </div>                      
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Transfer +</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Transfer Cash</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Transfer</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <h4>Reports</h4>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                    <span class="custom-control-label">All</span>
                                </label>
                            </div>                      
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Winloss Simple</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Winloss Full</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Performance Report</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Top Player</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Member Statement</span>
                                            </label>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Winloss VIP</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-3"><button class="btn btn-success">submit</button></div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!-- Timepicker js -->
<script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>
<!-- Datepicker js -->
<script src="{{URL::asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jQuerytransfer/jquery.transfer.js')}}"></script>
<!-- Form Advanced Element -->

<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/js/datatables.js')}}"></script>

<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
