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
            <h4 class="page-title">Win Lose Full</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Archived Reports</a></li>
                <li class="breadcrumb-item active"><a href="#">Win Lose Full</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Win Lose Full
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="alert alert-info" role="alert"><i class="fa fa-calendar mr-2" aria-hidden="true"></i><span class="mr-3">10/03 Completed</span><i class="fa fa-calendar mr-2" aria-hidden="true"></i><span class="mr-3">10/04 Completed</span><i class="fa fa-calendar mr-2" aria-hidden="true"></i><span class="mr-3">10/05 Pending</span></div>
                        </div>
                        <div class="col-sm-6 col-md-3 mt-4">
                            <div class="form-group">
                                <div class="row gutters-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="input-group mt-4">
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
                            <div class="input-group mt-4">
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
                        <div class="col-sm-6 col-md-3 mt-4"><button type="submit" class="btn btn-success mb-0">Search</button></div>
                        <div class="col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">July</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">August</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">September</button>
                            <button type="submit" class="btn btn-success mb-0 mr-3 mt-4">October</button>
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
                                        <span class="custom-control-label">Agent's Currency(MYR)</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mr-5">
                                        <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                        <span class="custom-control-label">Member's Currency</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border border-1" id="example1">
                                    <thead>
                                        <tr class="border border-1">
                                            <th class="text-center color-title wd-15p border-bottom-1" rowspan="2" style="vertical-align: inherit;"> Username</th>
                                            <th class="text-center color-title wd-15p border-bottom-1" rowspan="2" style="vertical-align: inherit;">Turnover</th>
                                            <th class="text-center color-title wd-15p border-bottom-1" rowspan="2" style="vertical-align: inherit;"> V.Amt</th>
                                            <th colspan="4" class="text-center color-0 wd-15p border-bottom-1">
                                                <p>PLY</p>
                                            </th>
                                            <th colspan="4" class="text-center color-1 wd-15p border-bottom-1">
                                                <p>AG</p>
                                            </th>
                                            <th colspan="4" class="text-center color-0 wd-15p border-bottom-1 wd-15p border-bottom-1">
                                                <p>MA</p>
                                            </th>
                                            <th colspan="4" class="text-center color-1 wd-15p border-bottom-1">
                                                <p>SR</p>
                                            </th>
                                            <th colspan="4" class="text-center color-0 wd-15p border-bottom-1">
                                                <p>SSR</p>
                                            </th>
                                            <th class="text-center color-1 wd-15p border-bottom-1" rowspan="2" style="vertical-align: inherit;">Company</th>
                                        </tr>
                                        <tr class="winlose-full__thead border border-1">
                                            <th class="text-center color-0 wd-15p border-bottom-1">Win</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Comm</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Loyalty</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Total</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Win</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Comm</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Loyalty</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Total</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Win</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Comm</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Loyalty</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Total</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Win</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Comm</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Loyalty</th>
                                            <th class="text-center color-1 wd-15p border-bottom-1">Total</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Win</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Comm</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Loyalty</th>
                                            <th class="text-center color-0 wd-15p border-bottom-1">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center "><a title="ma00aa">ma00aa</a></td>
                                            <td class="text-right">21.70</td>
                                            <td class="text-right">13.46</td>
                                            <td class="text-right color-0">1.44</td>
                                            <td class="text-right color-0">0.00</td>
                                            <td class="text-right color-0">0.00</td>
                                            <td class="text-right color-0">1.44</td>
                                            <td class="text-right color-1">0.00</td>
                                            <td class="text-right color-1">0.00</td>
                                            <td class="text-right color-1">0.00</td>
                                            <td class="text-right color-1">0.00</td>
                                            <td class="text-right color-0">0.00</td>
                                            <td class="text-right color-0">0.00</td>
                                            <td class="text-right color-0">0.00</td>
                                            <td class="text-right color-0">0.00</td>
                                            <td class="text-right color-1 text-danger">-0.79</td>
                                            <td class="text-right color-1">0.00</td>
                                            <td class="text-right color-1">0.00</td>
                                            <td class="text-right color-1 text-danger">-0.79</td>
                                            <td class="text-right color-0 warning">0.00</td>
                                            <td class="text-right color-0 warning">0.00</td>
                                            <td class="text-right color-0 warning">0.00</td>
                                            <td class="text-right color-0 warning">0.00</td>
                                            <td class="text-right color-1 text-danger">-0.65</td>
                                        </tr>
                                        <tr style="font-weight:bold">
                                            <td class="text-right ">Total = </td>
                                            <td class="text-right">21.70</td>
                                            <td class="text-right"><span>13.46</span></td>
                                            <td class="text-right color-0"><span>1.44</span></td>
                                            <td class="text-right color-0"><span>0.00</span></td>
                                            <td class="text-right color-0"><span>0.00</span></td>
                                            <td class="text-right color-0"><span>1.44</span></td>
                                            <td class="text-right color-1"><span>0.00</span></td>
                                            <td class="text-right color-1"><span>0.00</span></td>
                                            <td class="text-right color-1"><span>0.00</span></td>
                                            <td class="text-right color-1"><span>0.00</span></td>
                                            <td class="text-right color-0"><span>0.00</span></td>
                                            <td class="text-right color-0"><span>0.00</span></td>
                                            <td class="text-right color-0"><span>0.00</span></td>
                                            <td class="text-right color-0"><span>0.00</span></td>
                                            <td class="text-right color-1"><span class="text-danger">-0.79</span></td>
                                            <td class="text-right color-1"><span>0.00</span></td>
                                            <td class="text-right color-1"><span>0.00</span></td>
                                            <td class="text-right color-1"><span class="text-danger">-0.79</span></td>
                                            <td class="text-right color-0 warning"><span>0.00</span></td>
                                            <td class="text-right color-0 warning"><span>0.00</span></td>
                                            <td class="text-right color-0 warning"><span>0.00</span></td>
                                            <td class="text-right color-0 warning"><span>0.00</span></td>
                                            <td class="text-right color-1 text-danger">-0.65</td>
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
