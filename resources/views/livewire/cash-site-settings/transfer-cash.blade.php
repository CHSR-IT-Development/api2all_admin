@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">Transfer Cash</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Cash Site Settings</a></li>
                <li class="breadcrumb-item active"><a href="#">Transfer Cash</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header bg-info text-white">
                <div class="card-title">
                    Transfer Cash
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="alert alert-info" role="alert"><i class="fa fa-users mr-2" aria-hidden="true"></i> <strong class="mr-3">Players: 7</strong> <i class="fa fa-calculator mr-2" aria-hidden="true"></i>Available transfer credit limit: 1,881.00</div>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-success" type="button">Search</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">User Name</th>
                                        <th class="text-center">FullName</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Credit Limit</th>
                                        <th class="text-center">Total Outstanding</th>
                                        <th class="text-center">Current Balance</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>ma00maxman77</td>
                                        <td>sample</td>
                                        <td class="text-center">
                                            Active
                                        </td>
                                        <td class="text-right"> 0.00</td>
                                        <td class="text-right"> 0.00</td>
                                        <td class="text-right text-danger"> 10.00</td>
                                        <td class="text-center">
                                            <a class="transfer-cash_icon fa fa-exchange"></a>
                                            <a class="transfer-cash_icon fa fa-file transfer-cash_button-log"></a>
                                        </td>
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

@section('js')
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
@endsection
