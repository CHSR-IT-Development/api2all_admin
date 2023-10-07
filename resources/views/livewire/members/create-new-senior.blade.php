@section('css')
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
<!-- Date Picker css -->
<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Create Senior</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Members</a></li>
                <li class="breadcrumb-item active"><a href="#">Create Senior</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-6">
                <div class="alert alert-info" role="alert">This is the Group Setting Page, <a href="#" class="text-danger">click to switch to the Individual Setting Page</a></div>
                    <div class="tab_wrapper first_tab">
                        <ul class="tab_list">
                            <li><i class="fa fa-futbol-o mr-2"></i>Informations</li>
                            <li><i class="fa fa-futbol-o mr-2"></i>Sport</li>
                            <li><i class="fa fa-empire mr-2"></i>Live Casino</li>
                            <li><i class="fa fa-empire mr-2"></i>Lottery</li>
                            <li><i class="fa fa-gamepad mr-2"></i>Games</li>
                            <li><i class="fa fa-money mr-2"></i>Financial</li>
                            <li><i class="fa fa-life-bouy mr-2"></i>P2P</li>
                        </ul>
                        <div class="content_wrapper">
                            <div class="tab_content active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Informations Senior
                                                </div>
                                            </div>
                                            <div class="card-body row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">User Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-append">
                                                                <span class="btn btn-light">ma00</span>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="Search for...">
                                                            <span class="input-group-append">
                                                                <button class="btn btn-success", type="button">Check Availability</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Password *</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" placeholder="Password must contain 8 -15 characters">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Re-enter Password *</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Credit Limit</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" placeholder="0">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Currency</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" readonly placeholder="MYR">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 d">
                                                        <button class="btn btn-danger mr-3 mt-3">Reset</button>
                                                        <button class="btn btn-danger mr-3 mt-3">Reset All</button>
                                                        <button class="btn btn-light mr-3 mt-3">Verified member</button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                     <div class="form-group mb-3">
                                                        <label class="form-label">Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" placeholder="">
                                                        </div>
                                                    </div>
                                                     <div class="form-group mb-3">
                                                        <label class="form-label">Date of Birth</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg>
                                                                </div>
                                                            </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                                        </div>
                                                    </div>
                                                     <div class="form-group mb-3">
                                                        <label class="form-label">Email</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" placeholder="">
                                                        </div>
                                                    </div>
                                                     <div class="form-group mb-3">
                                                        <label class="form-label">Mobile</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" placeholder="">
                                                        </div>
                                                    </div>
                                                     <div class="form-group mb-3">
                                                        <label class="form-label">Extra 1</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" placeholder="">
                                                        </div>
                                                    </div>
                                                     <div class="form-group mb-3">
                                                        <label class="form-label">Extra </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-left" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Time Zone</label>
                                                        <select name="country" id="select-countries" class="form-control custom-select select2">
                                                            <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>(UTC +07:00) Bangkok, Hanoi, Jakarta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success mx-2">Submit</button>
                                    <button class="btn btn-danger mx-2">Cancel</button>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betting Information
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Sports :</label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Enable</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                            <span class="custom-control-label">Disable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-4 mb-0 mb-4">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">M-sports</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                            <span class="custom-control-label">S-sports</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">la E-sports</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
                                                            <span class="custom-control-label">Maxbet</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5">
                                                            <span class="custom-control-label">Sbobet</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6">
                                                            <span class="custom-control-label">Sbo Virtual sports</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7">
                                                            <span class="custom-control-label">Ibc sports</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8">
                                                            <span class="custom-control-label">Ssportlcs</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Betswiz</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group mt-4">
                                                            <label class="form-label">Min Per Bet (Min: 5) :</label>
                                                            <div class="row gutters-sm">
                                                                <div class="col">
                                                                    <input type="number" class="form-control" placeholder="Search for...">
                                                                </div>
                                                                <span class="col-auto align-self-center">
                                                                    <span class="form-help" data-toggle="popover" data-placement="top" data-content="Min Per Bet will be 2x for SSportLCS /n  ie: Min Per Bet Setting: $10 ; SSportLCS will be $20">?</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group mt-4">
                                                            <label class="form-label">Max Per Bet (Max: 100) :</label>
                                                            <div class="row gutters-sm">
                                                                <div class="col">
                                                                    <input type="number" class="form-control" placeholder="Search for...">
                                                                </div>
                                                                <span class="col-auto align-self-center">
                                                                    <span class="form-help" data-toggle="popover" data-placement="top" data-content="Max Per Match will be 2x for SSportLCS /n ie: Max Per Match Setting: $10 ; SSportLCS will be $20">?</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4">
                                                        <div class="form-group mt-4">
                                                            <label class="form-label"> Max Per Match (Max: 300) :</label>
                                                            <div class="row gutters-sm">
                                                                <div class="col">
                                                                    <input type="number" class="form-control" placeholder="Search for...">
                                                                </div>
                                                                <span class="col-auto align-self-center">
                                                                    <span class="form-help" data-toggle="popover" data-placement="top" data-content="Max Per Bet will be 2x for SSportLCS \n ie: Max Per Bet Setting: $10 ; SSportLCS will be $20">?</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    M-sports S-sports
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (0% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>76%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>77%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>78%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>79%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (Parlay/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (1X2/Outright/DC) (0% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (Parlay/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (1X2/Outright/DC) (0% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (Parlay/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (1X2/Outright/DC) (50% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (Parlay/Others) (50% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision 4 (HDP/OU/O/E, Best Spread 4%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision A (HDP/OU/O/E, Best Spread 5%) (0.25%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision B (HDP/OU/O/E, Best Spread 7%) (0.4%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision C (HDP/OU/O/E, Best Spread 9%) (0.65%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0.85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0.85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0.85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision E (HDP/OU/O/E, Best Spread 13%) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision F (HDP/OU/O/E, Best Spread 15%) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision G (HDP/OU/O/E, Best Spread 22%) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">STEP Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">1 match (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">2 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">3 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">4 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">5 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">6 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">7 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">8 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">9 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">10 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">11 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">12 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">13 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">14 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">15 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Maxbet
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (0% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>76%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>77%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>78%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>79%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (Parlay/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (1X2/Outright/DC) (0% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (Parlay/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (1X2/Outright/DC) (0% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (Parlay/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (1X2/Outright/DC) (50% - 79%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (Parlay/Others) (50% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision 4 (HDP/OU/O/E, Best Spread 4%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision A (HDP/OU/O/E, Best Spread 5%) (0.25%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision B (HDP/OU/O/E, Best Spread 7%) (0.4%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision C (HDP/OU/O/E, Best Spread 9%) (0.65%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0.85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0.85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0.85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision E (HDP/OU/O/E, Best Spread 13%) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision F (HDP/OU/O/E, Best Spread 15%) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision G (HDP/OU/O/E, Best Spread 22%) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">STEP Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">1 match (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">2 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">3 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">4 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">5 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">6 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">7 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">8 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">9 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">10 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">11 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">12 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">13 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">14 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">15 matches (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Ibc Sport Sbobet
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (Parlay/Step/Others) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (HDP/OU/O/E) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (1X2/Outright/DC) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (Parlay/Step/Others) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (HDP/OU/O/E) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (1X2/Outright/DC) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (Parlay/Step/Others) (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (HDP/OU/O/E) (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (1X2/Outright/DC) (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (Parlay/Step/Others) (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (HDP/OU/O/E) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>1.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Sbo Virtual Sport
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (Parlay/Step/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (1X2/Outright/DC) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (Parlay/Step/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (HDP/OU/O/E) (0% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (1X2/Outright/DC) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (Parlay/Step/Others) (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (1X2/Outright/DC) (50% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (Parlay/Step/Others) (50% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision A (HDP/OU/O/E, Best Spread 5%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision B (HDP/OU/O/E, Best Spread 7%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision C (HDP/OU/O/E, Best Spread 9%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision D (HDP/OU/O/E, Best Spread 11%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision E (HDP/OU/O/E, Best Spread 13%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision F (HDP/OU/O/E, Best Spread 15%) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commision G (HDP/OU/O/E, Best Spread 22%) (%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Ia E-sports
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 92%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 92%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (0% - 92%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 92%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Ssportlcs
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (0% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (50% - 87%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betswiz
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Shared Forced (0% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
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
                                    <div class="text-center">
                                        <button class="btn btn-success mx-2">Submit</button>
                                        <button class="btn btn-danger mx-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betting Information
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Live Casino :</label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Enable</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                            <span class="custom-control-label">Disable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-4 mb-0 mb-4">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Ezugi Casino</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                            <span class="custom-control-label">Allbet </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">Ag</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
                                                            <span class="custom-control-label">Cockfight</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5">
                                                            <span class="custom-control-label">Wm Casino</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6">
                                                            <span class="custom-control-label">Luckystreak </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7">
                                                            <span class="custom-control-label">Dream Gaming </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8">
                                                            <span class="custom-control-label">Gold Diamond </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Sexy Baccarat</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">King855</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label"> Sa Gaming </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Fair Guaranted</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Evo Casino </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Bg Casino</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Pragmatic Play Live </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Miki World</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Xtreme Gaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Yeebet </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Cq9live </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Rcb988</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Lg88</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Microgaming Live</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Won Casino</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group mt-4">
                                                            <label class="form-label">Max Win Limit (1,000) :</label>
                                                            <div class="row gutters-sm">
                                                                <div class="col">
                                                                    <input type="number" class="form-control" placeholder="Search for...">
                                                                </div>
                                                                <span class="col-auto align-self-center">
                                                                    <span class="form-help" data-toggle="popover" data-placement="top" data-content="Min Per Bet will be 2x for SSportLCS /n  ie: Min Per Bet Setting: $10 ; SSportLCS will be $20">?</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group mt-4">
                                                            <label class="form-label">Max Per Bet (Max: 1,000) :</label>
                                                            <div class="row gutters-sm">
                                                                <div class="col">
                                                                    <input type="number" class="form-control" placeholder="Search for...">
                                                                </div>
                                                                <span class="col-auto align-self-center">
                                                                    <span class="form-help" data-toggle="popover" data-placement="top" data-content="Max Per Match will be 2x for SSportLCS /n ie: Max Per Match Setting: $10 ; SSportLCS will be $20">?</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="my-3 text-danger">* Player max win condition, system might have some minutes of delay depending on the product</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Ag, Dream Gaming, Allbet, Sexy Baccarat, Bg Casino, Xtreme Gaming, Cq9live, Lg88, Microgaming Live, Evo, Casino
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label"> Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label"> My Share (0% - 88%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>85</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>86</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>87</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>88</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 88%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>85</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>86</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>87</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>88</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 88%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>85</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>86</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>87</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>88</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Luckystreak, Wm Casino, Sa Gaming, Gold Diamond, King855, Fair Guaranted, Pragmatic Play Live, Won Casino
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label"> Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label"> My Share (0% - 87.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>85</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>86</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>87</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87.5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 87.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>85</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>86</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>87</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87.5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 87.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>85</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>86</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>87</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>87.5</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Ezugi Casino
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label"> Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label"> My Share (0% - 0.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.05</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.05</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.05</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.05</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 0.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.05</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.05</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.05</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.05</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 0.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.05</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.05</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.05</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.05</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Yeebet
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 81%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>78</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>79</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>80</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>81</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 81%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>78</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>79</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>80</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>81</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 81%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>78</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>79</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>80</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>81</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Cockfight Miki World Rcb988
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 80%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>77.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>78.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>79.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>80.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 80%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>77.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>78.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>79.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>80.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 80%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>77.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>78.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>79.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>80.00</option>
                                                                            </select>
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
                                    <div class="text-center">
                                        <button class="btn btn-success mx-2">Submit</button>
                                        <button class="btn btn-danger mx-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betting Information
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Lottery :</label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Enable</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                            <span class="custom-control-label">Disable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-4 mb-0 mb-4">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Malaysia Lottery </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                            <span class="custom-control-label">93 Connect</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">Thai Lottery</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
                                                            <span class="custom-control-label">Xoso79</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    93 Connect, Thai Lottery, Xoso79
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 50%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 50%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 50%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Malaysia Lottery
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (10%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                            </select>
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
                                    <div class="text-center">
                                        <button class="btn btn-success mx-2">Submit</button>
                                        <button class="btn btn-danger mx-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betting Information
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Games :</label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Enable</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                            <span class="custom-control-label">Disable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-4 mb-0 mb-4">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label"> Skywind </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                            <span class="custom-control-label">Pragmatic</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">Ace333</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
                                                            <span class="custom-control-label">Cq9</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5">
                                                            <span class="custom-control-label">Global Gaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6">
                                                            <span class="custom-control-label">Virtual Tech</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7">
                                                            <span class="custom-control-label">Simple Play</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8">
                                                            <span class="custom-control-label">Joker </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Pt Gaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Big Gaming Egame</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Betsoft</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Dream Tech</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Pg Soft</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Habanero </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">918kiss</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Kingmaker</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Bng Games</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Yggdrasil</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Genesis</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Play'n Go</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Jdb</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Microgaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Relax Gaming </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Dragon Gaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Jili Games </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Mario</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Fungaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Live22</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">One Game - Egame </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Spade Gaming </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">AdvantPlay</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">M365 </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Pegasus</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Mega</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">Hacksaw</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">FastSpin</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">No Limit City </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9">
                                                            <span class="custom-control-label">GFG Slot</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Global Gaming, Simple Play, Big Gaming Egame, Joker, Dream Tech, Habanero, Bng Games, Kingmaker, Genesis, Relax Gaming, Dragon Gaming, Jili Games, Betsoft, Pragmatic, Ace333, Cq9, Fungaming, Virtual Tech, Live22, One Game - Egame, AdvantPlay, Spade Gaming, Pegasus, FastSpin, Hacksaw, Mega, GFG Slot, M365, No Limit City
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 85%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                            </select>
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
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Pg Soft, Skywind, Pt Gaming, 918kiss, Yggdrasil, Play'n Go, Jdb, Microgaming, Mario
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 74%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>71</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>72</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>73</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>74</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 74%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>71</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>72</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>73</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>74</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 74%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>71</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>72</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>73</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>74</option>
                                                                            </select>
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
                                    <div class="text-center">
                                        <button class="btn btn-success mx-2">Submit</button>
                                        <button class="btn btn-danger mx-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betting Information
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Financial :</label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Enable</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                            <span class="custom-control-label">Disable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-success mx-2">Submit</button>
                                        <button class="btn btn-danger mx-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Betting Information
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Lottery :</label>
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">Enable</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" Disable>
                                                            <span class="custom-control-label">Disable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-4 mb-0 mb-4">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                            <span class="custom-control-label">One Gaming</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                                                            <span class="custom-control-label">Le Gaming </span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3">
                                                            <span class="custom-control-label">V8 Poker</span>
                                                        </label>
                                                        <label class="custom-control custom-checkbox mr-5">
                                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
                                                            <span class="custom-control-label">Mpoker</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    One Gaming
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6 mt-4">
                                                                        <div class="alert alert-warning" role="alert"><span class="text-danger">Note : </span>Ceme Keliling, Bandar Ceme, Capsa Susun, Bandar Capsa, Big Two, Bandar Baccarat, Bandar Sakong games will receive only half of the commission</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Le Gaming V8 Poker Mpoker
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Commission</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (0%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>0.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="expanel expanel-default">
                                                            <div class="expanel-heading">
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (0% - 73.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>73.50</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>73.50</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>73.50</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>73.50</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Downline Position Share (0% - 73.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>73.50</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>73.50</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>73.50</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>73.50</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Take Up Remaining (0% - 73.5%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>73.50</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>73.50</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>73.50</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>73.50</option>
                                                                            </select>
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
                                    <div class="text-center">
                                        <button class="btn btn-success mx-2">Submit</button>
                                        <button class="btn btn-danger mx-2">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Prism Pre code-->
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
<!-- Datepicker js -->
<script src="{{URL::asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<!-- Form Advanced Element -->
<script src="{{URL::asset('assets/js/formelementadvnced.js')}}"></script>
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
