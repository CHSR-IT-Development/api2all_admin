@section('css')
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Default Settings</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Cash Site Settings</a></li>
                <li class="breadcrumb-item active"><a href="#">Default Settings</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-6">
                    <div class="tab_wrapper first_tab">
                        <ul class="tab_list">
                            <li><i class="fa fa-futbol-o mr-2"></i>Sport</li>
                            <li><i class="fa fa-empire mr-2"></i>Live Casino</li>
                            <li><i class="fa fa-empire mr-2"></i>Lottery</li>
                            <li><i class="fa fa-gamepad mr-2"></i>Game</li>
                            <li><i class="fa fa-money mr-2"></i>Financial</li>
                            <li><i class="fa fa-life-bouy mr-2"></i>P2P</li>
                        </ul>
                        <div class="content_wrapper">
                            <div class="tab_content active">
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
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
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (50% - 79%)</label>
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
                                                                            <label class="form-label">My Share (Parlay/Others) (50% - 87%)</label>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
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
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>1.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (1%)</label>
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
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
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (50% - 79%)</label>
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
                                                                            <label class="form-label">My Share (Parlay/Others) (50% - 87%)</label>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
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
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>1.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (1%)</label>
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>84%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>76%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>77%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>78%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>84%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (Parlay/Step/Others) (50% - 84%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>84%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>85%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>86%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>84%</option>
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
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
                                                                            <label class="form-label">My Share (1X2/Outright/DC) (50% - 79%)</label>
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
                                                                            <label class="form-label">My Share (Parlay/Others) (50% - 87%)</label>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>4 (HDP/OU/O/E, Best Spread 4%)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
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
                                                                            <label class="form-label">Member Commission (1X2/Outright/DC) (1%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>0.00</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>0.00</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>0.00</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>1.00</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Member Commission (Parlay/CS/TG) (1%)</label>
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                    <div class="col-md-12 col-lg-12 mt-5 text-center">
                                        <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 mt-5">
                                        <div class="card shadow-none border border-1">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    Ag Dream Gaming Allbet Sexy Baccarat Bg Casino Xtreme Gaming Cq9live Lg88 Microgaming Live Evo Casino
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    Luckystreak Wm Casino Sa Gaming Gold Diamond King855 Fair Guaranted Pragmatic Play Live Won Casino
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    Ezugi Casino
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    Yeebet
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    Cockfight Miki World Rcb988
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                    <div class="col-md-12 col-lg-12 mt-5 text-center">
                                        <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
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
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    93 Connect Thai Lottery Xoso79
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                    <div class="col-md-12 col-lg-12 mt-5 text-center">
                                        <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
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
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    93 Connect Thai Lottery Xoso79
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                    <div class="col-md-12 col-lg-12 mt-5 text-center">
                                        <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
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
                                                                <h3 class="expanel-title">Position Taking</h3>
                                                            </div>
                                                            <div class="expanel-body">
                                                                <div class="row">
                                                                    <div class="col-12 mt-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                                    93 Connect Thai Lottery Xoso79
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
                                                                            <label class="form-label">My Share (HDP/OU/O/E) (50% - 86%)</label>
                                                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                                                <option value="br" data-data='{"image": "{{URL::asset('assets/images/flags/br.svg')}}"}'>83%</option>
                                                                                <option value="cz" data-data='{"image": "{{URL::asset('assets/images/flags/cz.svg')}}"}'>84%</option>
                                                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>85%</option>
                                                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>86%</option>
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
                                                                            <label class="form-label">Commission Type (HDP/OU/O/E)</label>
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
                                    <div class="col-md-12 col-lg-12 mt-5 text-center">
                                        <button type="submit" class="btn btn-success mt-4 mb-0">Submit</button>
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
@endsection
