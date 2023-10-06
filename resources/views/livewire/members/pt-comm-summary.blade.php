@section('css')
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<!-- Slect2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">PT/Comm Summary</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Members</a></li>
                <li class="breadcrumb-item active"><a href="#">PT/Comm Summary</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-6">
                    <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="row ">
                                    <div class="col">
                                        <div class="form-group">
                                            <select name="country" id="select-countries" class="form-control custom-select select2">
                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>Agent</option>
                                                <option value="de" data-data='{"image": "{{URL::asset('assets/images/flags/de.svg')}}"}'>Player</option>
                                                <option value="pl" data-data='{"image": "{{URL::asset('assets/images/flags/pl.svg')}}"}' selected>Agent and Player</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                    <span class="col-auto">
                                        <button class="btn btn-success" type="button"><i class="fe fe-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 text-right">
                            <a href="#" class="btn btn-success">Export <i class="fa fa-download ml-2"></i></a>
                        </div>
                    </div>
                    <div class="tab_wrapper first_tab">
                        <ul class="tab_list">
                            <li><i class="fa fa-futbol-o mr-2"></i>Sport</li>
                            <li><i class="fa fa-empire mr-2"></i>Live Casino</li>
                            <li><i class="fa fa-empire mr-2"></i>Lottery</li>
                            <li><i class="fa fa-gamepad mr-2"></i>Game</li>
                            <li><i class="fa fa-life-bouy mr-2"></i>P2P</li>
                        </ul>
                        <div class="content_wrapper">
                            <div class="tab_content active">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="3" valign="top">Username</th>
                                                <th class="text-center dark-grey" colspan="7" data-next-col="6">S-sports</th>
                                                <th class="text-center" colspan="7" data-next-col="6">M-sports</th>
                                                <th class="text-center dark-grey" colspan="7" data-next-col="6">Maxbet</th>
                                                <th class="text-center" colspan="6" data-next-col="5">Sbobet</th>
                                                <th class="text-center dark-grey" colspan="7" data-next-col="6">Sbo Virtual Sport</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Ia E-sports</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Muaystep2</th>
                                                <th class="text-center " colspan="6" data-next-col="5">Ibc Sport</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Ssportlcs</th>
                                                <th class="text-center " colspan="6" data-next-col="6">Cmd</th>
                                                <th class="text-center " colspan="2" data-next-col="1">Betswiz</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center" data-prev-col="1" rowspan="2" valign="top">Group</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" rowspan="2" valign="top">Group</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" rowspan="2" valign="top">Group</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" rowspan="2" valign="top">Group</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" colspan="2" data-next-col="1">-</th>
                                                <th class="text-center" colspan="2" data-next-col="1">-</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" colspan="2" data-next-col="1">-</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">HDP/OU/O/E</th>
                                                <th class="text-center" colspan="2" data-next-col="1">1X2/Outright/DC</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Parlay/Others</th>
                                                <th class="text-center" colspan="2" data-next-col="1">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center dark-grey" data-prev-col="2">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center dark-grey" data-prev-col="1">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center dark-grey" data-prev-col="1">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey" data-prev-col="1">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey" data-prev-col="2">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap" id="example2">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2" valign="bottom">Username</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Ag</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Dream Gaming</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Allbet</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Sexy Baccarat</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Bg Casino</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Luckystreak</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Wm Casino</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Sa Gaming</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Gold Diamond</th>
                                                <th class="text-center" colspan="2" data-next-col="1">King855</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Fair Guaranted</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Ezugi Casino</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Pragmatic Play Live</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Evo Casino</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Cockfight</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Miki World</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Xtreme Gaming</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Yeebet</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Cq9live</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Rcb988</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Lg88</th>
                                                <th class="text-center" colspan="2" data-next-col="1">MGL</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Won Casino</th>
                                            </tr>
                                            <tr>
                                                <th data-prev-col="1" class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border" id="example2">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2" valign="bottom">Username</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Keno</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Malaysia Lottery</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">93 Connect</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Thai Lottery</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Xoso79</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Malaysia Lottery 2</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Perdana 3D</th>
                                            </tr>
                                            <tr>
                                                <th data-prev-col="1" class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border" id="example2">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2" valign="bottom">Username</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Betsoft</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Pragmatic</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Ace333</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Cq9</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Global Gaming</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Virtual Tech</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Simple Play</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Bg Egame</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Joker</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Dream Tech</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Skywind</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Pt Gaming</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Pg Soft</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Habanero</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">918kiss</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Kingmaker</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Bng Games</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Yggdrasil</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Genesis</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Play'n Go</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Jdb</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Relax Gaming</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Microgaming</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Dragon Gaming</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Jili Games</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Mario</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Fungaming</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Live22</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">One Game - Egame</th>
                                                <th class="text-center" colspan="2" data-next-col="1">AdvantPlay</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Spade Gaming</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Pegasus</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">FastSpin</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Hacksaw</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">Mega</th>
                                                <th class="text-center" colspan="2" data-next-col="1">No Limit City</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">GFG Slot</th>
                                                <th class="text-center" colspan="2" data-next-col="1">M365</th>
                                            </tr>
                                            <tr>
                                                <th data-prev-col="1" class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab_content">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border" id="example2">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2" valign="bottom">Username</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">One Gaming</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Le Gaming</th>
                                                <th class="text-center dark-grey" colspan="2" data-next-col="1">V8 Poker</th>
                                                <th class="text-center" colspan="2" data-next-col="1">Mpoker</th>
                                            </tr>
                                            <tr>
                                                <th data-prev-col="1" class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                                <th class="text-center dark-grey">PT%</th>
                                                <th class="text-center dark-grey">Comm%</th>
                                                <th class="text-center">PT%</th>
                                                <th class="text-center">Comm%</th>
                                            </tr>
                                        </thead>
                                    </table>
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
<!-- Data tables -->
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
<!-- Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
@endsection
