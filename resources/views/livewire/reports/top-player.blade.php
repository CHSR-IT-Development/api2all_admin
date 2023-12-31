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
            <h4 class="page-title">Top Player</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Reports</a></li>
                <li class="breadcrumb-item active"><a href="#">Top Player</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Top Player
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">Today</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">Yesterday</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">This Week</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">Last Week</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">This Month</button>
                        </div>
                        <div class="col-sm-12 col-md-12 mt-4">
                            <div class="form-group mt-4 mb-0 mb-4">
                                <div class="d-flex flex-wrap align-items-center w-100">
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">All Products</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                        <span class="custom-control-label">Sports</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                        <span class="custom-control-label">Live Casino</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
                                        <span class="custom-control-label">Lottery</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5">
                                        <span class="custom-control-label">Games</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6">
                                        <span class="custom-control-label">P2P</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7">
                                        <span class="custom-control-label">Financial</span>
                                    </label><br />
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8">
                                        <span class="custom-control-label">Top Winners </span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                        <span class="custom-control-label">Top Losers</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                        <span class="custom-control-label">Top Valid Amount</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border" id="example1">
                                    <thead>
                                        <tr>
                                            <th class="text-center wd-15p border-bottom-0" width="5%">#</th>
                                            <th class="text-center wd-15p border-bottom-0" width="35%">Player</th>
                                            <th class="text-center wd-15p border-bottom-0" width="20%">Valid Amount</th>
                                            <th class="text-center wd-15p border-bottom-0" width="20%">Win Lose</th>
                                            <th class="text-center wd-15p border-bottom-0" width="20%">VIP Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">ma00aa03</td>
                                            <td class="text-center">2.00</td>
                                            <td class="text-center">2.00</td>
                                            <td class="text-center">None</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
