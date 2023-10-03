@section('css')
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />
<!-- Date Picker css -->
<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Paygate History</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Cash Site Settings</a></li>
                <li class="breadcrumb-item active"><a href="#">Paygate History</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Paygate History
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="country" id="select-countries" class="form-control custom-select select2">
                                    <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>Pending</option>
                                    <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>Inprocess</option>
                                    <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>Approved</option>
                                    <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label class="form-label">Transaction No</label>
                                <div class="row gutters-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label class="form-label">Transaction No</label>
                                <div class="row gutters-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="country" id="select-countries" class="form-control custom-select select2">
                                    <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>Pending</option>
                                    <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>Inprocess</option>
                                    <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>Approved</option>
                                    <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z" />
                                            <path d="M4 5.01h16V8H4z" opacity=".3" /></svg>
                                    </div>
                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z" />
                                            <path d="M4 5.01h16V8H4z" opacity=".3" /></svg>
                                    </div>
                                </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3"><button type="submit" class="btn btn-success mb-0">Search</button></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mt-4 mb-0">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                        <span class="custom-control-label">View By Statement Date</span>
                                    </label>
                                </div>
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

<!-- Form Advanced Element -->

<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
