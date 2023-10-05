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
                                    </label><br/>
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
                                <table class="table table-bordered text-nowrap" id="example1">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">First name</th>
                                            <th class="wd-15p border-bottom-0">Last name</th>
                                            <th class="wd-20p border-bottom-0">Position</th>
                                            <th class="wd-15p border-bottom-0">Start date</th>
                                            <th class="wd-10p border-bottom-0">Salary</th>
                                            <th class="wd-25p border-bottom-0">E-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bella</td>
                                            <td>Chloe</td>
                                            <td>System Developer</td>
                                            <td>2018/03/12</td>
                                            <td>$654,765</td>
                                            <td>b.Chloe@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Donna</td>
                                            <td>Bond</td>
                                            <td>Account Manager</td>
                                            <td>2012/02/21</td>
                                            <td>$543,654</td>
                                            <td>d.bond@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Harry</td>
                                            <td>Carr</td>
                                            <td>Technical Manager</td>
                                            <td>20011/02/87</td>
                                            <td>$86,000</td>
                                            <td>h.carr@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas</td>
                                            <td>Dyer</td>
                                            <td>Javascript Developer</td>
                                            <td>2014/08/23</td>
                                            <td>$456,123</td>
                                            <td>l.dyer@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Karen</td>
                                            <td>Hill</td>
                                            <td>Sales Manager</td>
                                            <td>2010/7/14</td>
                                            <td>$432,230</td>
                                            <td>k.hill@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Dominic</td>
                                            <td>Hudson</td>
                                            <td>Sales Assistant</td>
                                            <td>2015/10/16</td>
                                            <td>$654,300</td>
                                            <td>d.hudson@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod</td>
                                            <td>Chandler</td>
                                            <td>Integration Specialist</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                            <td>h.chandler@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Jonathan</td>
                                            <td>Ince</td>
                                            <td>junior Manager</td>
                                            <td>2012/11/23</td>
                                            <td>$345,789</td>
                                            <td>j.ince@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Leonard</td>
                                            <td>Ellison</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>2010/03/19</td>
                                            <td>$205,500</td>
                                            <td>l.ellison@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Madeleine</td>
                                            <td>Lee</td>
                                            <td>Software Developer</td>
                                            <td>20015/8/23</td>
                                            <td>$456,890</td>
                                            <td>m.lee@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Karen</td>
                                            <td>Miller</td>
                                            <td>Office Director</td>
                                            <td>2012/9/25</td>
                                            <td>$87,654</td>
                                            <td>k.miller@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Lisa</td>
                                            <td>Smith</td>
                                            <td>Support Lead</td>
                                            <td>2011/05/21</td>
                                            <td>$342,000</td>
                                            <td>l.simth@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Morgan</td>
                                            <td>Keith</td>
                                            <td>Accountant</td>
                                            <td>2012/11/27</td>
                                            <td>$675,245</td>
                                            <td>m.keith@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Nathan</td>
                                            <td>Mills</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>2014/10/8</td>
                                            <td>$765,980</td>
                                            <td>n.mills@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Ruth</td>
                                            <td>May</td>
                                            <td>office Manager</td>
                                            <td>2010/03/17</td>
                                            <td>$654,765</td>
                                            <td>r.may@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Penelope</td>
                                            <td>Ogden</td>
                                            <td>Marketing Manager</td>
                                            <td>2013/5/22</td>
                                            <td>$345,510</td>
                                            <td>p.ogden@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Sean</td>
                                            <td>Piper</td>
                                            <td>Financial Officer</td>
                                            <td>2014/06/11</td>
                                            <td>$725,000</td>
                                            <td>s.piper@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Trevor</td>
                                            <td>Ross</td>
                                            <td>Systems Administrator</td>
                                            <td>2011/05/23</td>
                                            <td>$237,500</td>
                                            <td>t.ross@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Vanessa</td>
                                            <td>Robertson</td>
                                            <td>Software Designer</td>
                                            <td>2014/6/23</td>
                                            <td>$765,654</td>
                                            <td>v.robertson@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Una</td>
                                            <td>Richard</td>
                                            <td>Personnel Manager</td>
                                            <td>2014/5/22</td>
                                            <td>$765,290</td>
                                            <td>u.richard@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Justin</td>
                                            <td>Peters</td>
                                            <td>Development lead</td>
                                            <td>2013/10/23</td>
                                            <td>$765,654</td>
                                            <td>j.peters@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Adrian</td>
                                            <td>Terry</td>
                                            <td>Marketing Officer</td>
                                            <td>2013/04/21</td>
                                            <td>$543,769</td>
                                            <td>a.terry@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Cameron</td>
                                            <td>Watson</td>
                                            <td>Sales Support</td>
                                            <td>2013/9/7</td>
                                            <td>$675,876</td>
                                            <td>c.watson@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Evan</td>
                                            <td>Terry</td>
                                            <td>Sales Manager</td>
                                            <td>2013/10/26</td>
                                            <td>$66,340</td>
                                            <td>d.terry@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica</td>
                                            <td>Ramos</td>
                                            <td>Chief Executive Officer</td>
                                            <td>20017/10/15</td>
                                            <td>$6,234,000</td>
                                            <td>a.ramos@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Connor</td>
                                            <td>Johne</td>
                                            <td>Web Developer</td>
                                            <td>2011/1/25</td>
                                            <td>$92,575</td>
                                            <td>C.johne@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer</td>
                                            <td>Chang</td>
                                            <td>Regional Director</td>
                                            <td>2012/17/11</td>
                                            <td>$546,890</td>
                                            <td>j.chang@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden</td>
                                            <td>Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>2013/07/14</td>
                                            <td>$206,850</td>
                                            <td>b.wagner@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona</td>
                                            <td>Green</td>
                                            <td>Chief Operating Officer</td>
                                            <td>2015/06/23</td>
                                            <td>$345,789</td>
                                            <td>f.green@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Shou</td>
                                            <td>Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>2013/07/19</td>
                                            <td>$335,300</td>
                                            <td>s.itou@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle</td>
                                            <td>House</td>
                                            <td>Integration Specialist</td>
                                            <td>2016/07/18</td>
                                            <td>$76,890</td>
                                            <td>m.house@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Suki</td>
                                            <td>Burks</td>
                                            <td>Developer</td>
                                            <td>2010/11/45</td>
                                            <td>$678,890</td>
                                            <td>s.burks@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott</td>
                                            <td>Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>2014/12/25</td>
                                            <td>$789,100</td>
                                            <td>p.bartlett@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin</td>
                                            <td>Cortez</td>
                                            <td>Team Leader</td>
                                            <td>2015/1/19</td>
                                            <td>$345,890</td>
                                            <td>g.cortez@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Martena</td>
                                            <td>Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                            <td>m.mccray@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Unity</td>
                                            <td>Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>2014/7/28</td>
                                            <td>$34,983</td>
                                            <td>u.butler@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Howard</td>
                                            <td>Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>2013/8/19</td>
                                            <td>$98,000</td>
                                            <td>h.hatfield@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Hope</td>
                                            <td>Fuentes</td>
                                            <td>Secretary</td>
                                            <td>2015/07/28</td>
                                            <td>$78,879</td>
                                            <td>h.fuentes@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian</td>
                                            <td>Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>2010/02/14</td>
                                            <td>$452,500</td>
                                            <td>v.harrell@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy</td>
                                            <td>Mooney</td>
                                            <td>Office Manager</td>
                                            <td>20016/12/11</td>
                                            <td>$136,200</td>
                                            <td>t.mooney@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson</td>
                                            <td>Bradshaw</td>
                                            <td>Director</td>
                                            <td>2011/09/26</td>
                                            <td>$645,750</td>
                                            <td>j.bradshaw@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia</td>
                                            <td>Liang</td>
                                            <td>Support Engineer</td>
                                            <td>2014/02/03</td>
                                            <td>$234,500</td>
                                            <td>o.liang@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno</td>
                                            <td>Nash</td>
                                            <td>Software Engineer</td>
                                            <td>2015/05/03</td>
                                            <td>$163,500</td>
                                            <td>b.nash@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura</td>
                                            <td>Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>2010/08/19</td>
                                            <td>$139,575</td>
                                            <td>s.yamamoto@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Thor</td>
                                            <td>Walton</td>
                                            <td>Developer</td>
                                            <td>2012/08/11</td>
                                            <td>$98,540</td>
                                            <td>t.walton@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Finn</td>
                                            <td>Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>2016/07/07</td>
                                            <td>$87,500</td>
                                            <td>f.camacho@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Serge</td>
                                            <td>Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>2017/04/09</td>
                                            <td>$138,575</td>
                                            <td>s.baldwin@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida</td>
                                            <td>Frank</td>
                                            <td>Software Engineer</td>
                                            <td>2018/01/04</td>
                                            <td>$125,250</td>
                                            <td>z.frank@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita</td>
                                            <td>Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>2017/06/01</td>
                                            <td>$115,000</td>
                                            <td>z.serrano@datatables.net</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer</td>
                                            <td>Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>2017/02/01</td>
                                            <td>$75,650</td>
                                            <td>j.acosta@datatables.net</td>
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
