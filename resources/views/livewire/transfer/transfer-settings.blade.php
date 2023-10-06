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
            <h4 class="page-title">Transfer Settings</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Transfer</a></li>
                <li class="breadcrumb-item active"><a href="#">Transfer Settings</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Transfer Settings
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap" id="example1">
                                    <thead>
                                        <tr>
                                            <th class="text-center wd-15p border-bottom-0">#</th>
                                            <th class="text-center wd-15p border-bottom-0">User Name</th>
                                            <th class="text-center wd-15p border-bottom-0">Status</th>
                                            <th class="text-center wd-15p border-bottom-0">Monday</th>
                                            <th class="text-center wd-15p border-bottom-0">Tuesday</th>
                                            <th class="text-center wd-15p border-bottom-0">Wednesday</th>
                                            <th class="text-center wd-15p border-bottom-0">Thursday</th>
                                            <th class="text-center wd-15p border-bottom-0">Friday</th>
                                            <th class="text-center wd-15p border-bottom-0">Saturday</th>
                                            <th class="text-center wd-15p border-bottom-0">Sunday</th>
                                            <th class="text-center wd-15p border-bottom-0">
                                                <input name="seclectAll" type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>ma00aa</td>
                                            <td class="text-center">
                                                Active
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>

                                            <td class="text-center">
                                                <input type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>ma00bb</td>
                                            <td class="text-center">
                                                Active
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>

                                            <td class="text-center">
                                                <input type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>ma00cc</td>
                                            <td class="text-center">
                                                Active
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>

                                            <td class="text-center">
                                                <input type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>ma00max</td>
                                            <td class="text-center">
                                                Active
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>
                                            <td class="text-center">
                                                ✅
                                            </td>

                                            <td class="text-center">
                                                <input type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>ma00sus</td>
                                            <td class="text-center">
                                                Active
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>

                                            <td class="text-center">
                                                <input type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td>ma00tes</td>
                                            <td class="text-center">
                                                Active
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>
                                            <td class="text-center">
                                                ❌
                                            </td>

                                            <td class="text-center">
                                                <input type="checkbox" class="ng-untouched ng-pristine ng-valid">
                                            </td>
                                        </tr>

                                        <tr class="no-border">
                                            <td class="text-right" colspan="2">
                                                Set Values
                                            </td>
                                            <td class="text-center">
                                                <select>
                                                    <option selected="" value="0">Not Set</option>
                                                    <option value="1">All to Yes</option>
                                                    <option value="2">All to No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <select convert-to-number="" name="setValue" class="ng-untouched ng-pristine ng-valid">
                                                    <option selected="" value="0: 0">-</option>
                                                    <option value="1: 1">Yes</option>
                                                    <option value="2: 2">No</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <button class="btn btn-success" type="button">Submit</button>
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
