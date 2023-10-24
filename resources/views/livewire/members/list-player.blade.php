@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<!-- Slect2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

<link href="{{URL::asset('assets/plugins/sweetalert2/sweetalert2.css')}}" rel="stylesheet" />
@endsection
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title">List Player</h4>
        </div>
        <div class="page-rightheader ml-auto d-lg-flex d-none">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
                            <path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" /></svg><span class="breadcrumb-icon">Dashboard</span></a></li>
                <li class="breadcrumb-item"><a href="#">Members</a></li>
                <li class="breadcrumb-item active"><a href="#">List Player</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <div class="row ">
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
                            <a href="#" class="btn btn-warning mr-3">Download</a>
                            <a href="/members/list_player/create_new_player" class="btn btn-success">Add New Senior</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example2">
                            <thead>
                                <tr>
                                    <th class="text-center" width="70">No.</th>
                                    <th class="text-center" width="150">User Name</th>
                                    <th class="text-center" width="150">FullName</th>
                                    <th class="text-center" width="120">Status</th>
                                    <th class="text-center hide" width="100">Cash Mode</th>
                                    <th class="text-center" width="200">Credit Limit</th>
                                    <th class="text-center" width="100">Cash Balance</th>
                                    <th class="text-center" width="120">Currency</th>
                                    <th class="text-center" width="120">Last Login Ip</th>
                                    <th class="text-center" width="120">Created Date</th>
                                    <th class="text-center" width="120">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr class="gradeX">
                                    <td class="text-center">1</td>
                                    <td class="text-left">ma00maxman77</td>
                                    <td class="text-left">sample</td>
                                    <td class="text-center"><a _ngcontent-c22="" class="btn-action" title="Active/Suspend">Active</a></td>
                                    <td class="text-center hide"><i class="text text-muted fa fa-circle"></i></td>
                                    <td class="text-left"><a title="Update credit limit">0.00</a></td>
                                    <td class="text-left">10.00</td>
                                    <td class="text-left">MYR</td>
                                    <td class="text-left"><i class="font-slight-small">2018-08-06 19:46:03</i></td>
                                    <td class="text-center">2018-08-06 19:46:03</td>
                                    <td class="text-center">
                                        <a class="hide" requirepermission="access_player" secured="" style="font-size:20px;padding-right:5px;" title="Copy">
                                            <i class="fa fa-copy"></i>
                                        </a>
                                        <a requirepermission="edit_member_info" secured="" style="font-size:20px;" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr> -->
                                @foreach ($this->players as $player)
                                    <tr class="gradeX" wire:key="{{ $loop->index }}">
                                        <td class="text-center">{{ $loop->index + 1 }}</td>
                                        <td class="text-left">{{ $player->user_name }}</td>
                                        <td class="text-left">{{ $player->full_name }}</td>
                                        <td class="text-center"><a _ngcontent-c22="" class="btn-action" title="Active/Suspend">Active</a></td>
                                        <td class="text-center hide"><i class="text text-muted fa fa-circle"></i></td>
                                        <td class="text-left"><a title="Update credit limit">{{ $player->credit_limit }}</a></td>
                                        <td class="text-left">10.00</td>
                                        <td class="text-left">{{ $player->currency }}</td>
                                        <td class="text-left"><i class="font-slight-small">2018-08-06 19:46:03</i></td>
                                        <td class="text-center">{{ $player->created_at }}</td>
                                        <td class="text-center">
                                            <a class="hide" requirepermission="access_player" secured="" style="font-size:20px;padding-right:5px;" title="Copy">
                                                <i class="fa fa-copy"></i>
                                            </a>
                                            <a requirepermission="edit_member_info" secured="" style="font-size:20px;" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
<!-- Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>

<script src="{{URL::asset('assets/plugins/sweetalert2/sweetalert2.js')}}"></script>
@if (session('error') != 0)
<script>
    $(document).ready(function(){
        Swal.fire({
            position: 'center',
            type: 'error',
            title: 'Error!',
            icon: 'error',
            text: '{{ session('message') }}',
            showConfirmButton: false,
            timer: 1500
        });
    });
</script>
@endif
@if (session('error') == 0)
    <script>
        $(document).ready(function(){
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Success!',
                icon: 'success',
                text: '{{ session('message') }}',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
@endif
@endsection
