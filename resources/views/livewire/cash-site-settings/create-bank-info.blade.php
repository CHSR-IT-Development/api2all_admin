@section('css')
<!-- P-scroll bar css -->
<link href="{{URL::asset('assets/plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet">
<!-- Quill css -->
<link href="{{URL::asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">
<!-- WYSIWYG Editor css -->
<link href="{{URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />
<!-- Date Picker css -->
<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Add Bank Info</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Cash Site Settings</a></li>
                <li class="breadcrumb-item"><a href="#">Bank Setting</a></li>
                <li class="breadcrumb-item"><a href="#">Add Bank Info</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Add Bank Info
                    </div>
                </div>
                <div class="card-body">
                    <div class='row'>
                        <div class="col-sm-12 col-md-6 mx-auto">
                            <div class="form-group mb-3">
                                <label class="form-label">Bank Name *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Url</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group mb-b">
                                <label class="form-label">Currency</label>
                                <select name="country" id="select-countries" class="form-control custom-select select2">
                                    <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>All Currencies</option>
                                    <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>CNY</option>
                                    <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>EUR</option>
                                    <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>HKD</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Account Number *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Account Name *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Branch</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Remark</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Upload Image</label>
                                <div class="input-group">
                                    <input type="text" class="form-control browse-file" placeholder="Choose" readonly>
                                    <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            QR Image <input type="file" style="display: none;" multiple>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group  mb-3">
                                <label class="form-label">Status</label>
                                <select name="country" id="select-countries" class="form-control custom-select select2">
                                    <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>Active</option>
                                    <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>Inactive</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success mx-2">Submit</button>
                                <button class="btn btn-danger mx-2">Cancel</button>
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
<!-- WYSIWYG Editor js -->
<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{URL::asset('assets/js/form-editor.js')}}"></script>
<!-- P-scroll js -->
<script src="{{URL::asset('assets/plugins/p-scrollbar/p-scrollbar.js')}}"></script>
<!-- quill js -->
<script src="{{URL::asset('assets/plugins/quill/quill.min.js')}}"></script>
<script src="{{URL::asset('assets/js/form-editor2.js')}}"></script>
<!-- Datepicker js -->
<script src="{{URL::asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<!-- Form Advanced Element -->
<script src="{{URL::asset('assets/js/formelementadvnced.js')}}"></script>
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
