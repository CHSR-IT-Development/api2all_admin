@section('css')
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
@endsection
<div>
   <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Paygate Setting</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Cash Site Settings</a></li>
                <li class="breadcrumb-item active"><a href="#">Paygate Setting</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mt-4">
                        <label class="form-label">PayJom :</label>
                        <div class="">
                            <label class="custom-control custom-checkbox mr-5">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                <span class="custom-control-label"> Turn On</span>
                            </label>
                            <hr />
                            <label class="custom-control custom-checkbox mr-5">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                <span class="custom-control-label"> Gateway Transfer</span>
                            </label>
                            <hr />
                        </div>
                    </div>
                    <div class="tab_wrapper first_tab">
                        <ul class="tab_list">
                            <li><i class="fa fa-money mr-2"></i>THB</li>
                            <li><i class="fa fa-money mr-2"></i>INR</li>
                            <li><i class="fa fa-money mr-2"></i>MYR</li>
                        </ul>
                        <div class="content_wrapper">
                            <div class="tab_content active">
                                <div class="col-sm-12 col-md-6 mt-5">
                                    <div class="form-group mt-4">
                                        <div class="">
                                            <label class="custom-control custom-checkbox mr-5">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Auto bot</span>
                                            </label>
                                            <label class="custom-control custom-checkbox ml-5">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                <span class="custom-control-label">Prompt Pay</span>
                                            </label>
                                            <label class="custom-control custom-checkbox ml-5">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                <span class="custom-control-label">QR Pay</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="country" id="select-countries" class="form-control custom-select select2">
                                            <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                            <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                            <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                            <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Bank Account Name:</label>
                                        <div class="row gutters-sm">
                                            <div class="col">
                                                <input type="number" class="form-control" placeholder="Search for...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Bank Account Number:</label>
                                        <div class="row gutters-sm">
                                            <div class="col">
                                                <input type="number" class="form-control" placeholder="Search for...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">PromptPay ID:</label>
                                        <div class="row gutters-sm">
                                            <div class="col">
                                                <input type="number" class="form-control" placeholder="Search for...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5 text-center">
                                        <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mt-4">
                                            <div class="">
                                                <label class="custom-control custom-checkbox mr-5">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                    <span class="custom-control-label">Unified Payments Interface (UPI)</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 mt-5">
                                            <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mt-4">
                                            <div class="">
                                                <label class="custom-control custom-checkbox mr-5">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                    <span class="custom-control-label">EWallet</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 mt-5">
                                            <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
                                        </div>
                                    </div>
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
<!---Tabs js-->
<script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
<script src="{{URL::asset('assets/js/tabs.js')}}"></script>
<!---Select js-->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection