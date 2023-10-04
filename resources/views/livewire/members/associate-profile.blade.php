@section('css')
<!-- Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Associate Profile</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Members</a></li>
                <li class="breadcrumb-item active"><a href="#">Associate Profile</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="card-title">
                        Associate Profile
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <select name="country" id="select-countries" class="form-control custom-select select2">
                                    <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>998asia.net</option>
                                    <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>998site.com</option>
                                </select>
                            </div>
                            <div class="expanel expanel-default">
                                <div class="expanel-body p-5">
                                    
                                </div>
                            </div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="d-flex bold">https://998site.com/m/register/ma00</span></a></li>
                            </ol>
                            <div class="expanel expanel-default">
                                <div class="expanel-body">
                                    <div class="alert alert-warning" role="alert">
                                        <h5>
                                            Promote your site to players by sharing this QR Code
                                        </h5>
                                        <ul class="ml-3">
                                            <li>● Right click to download and save as a copy in your device.</li>
                                            <li>● By scanning the QR code above, players will be redirected to your site and they can register an account directly with 998BET.</li>
                                        </ul>
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
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection
