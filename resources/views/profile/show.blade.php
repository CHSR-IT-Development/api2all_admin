@section('css')
<!-- Tabs css-->
<link href="{{URL::asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" />
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Profile</h4>
            </div>
            <div class="page-rightheader ml-auto d-lg-flex d-none">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon">Dashboard</span></li>
                    <li class="breadcrumb-item active"><a href="#">Profile</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-6">
                        <div class="tab_wrapper first_tab">
                            <ul class="tab_list">
                                <li class="">Account Imformation</li>
                                <li>Google Authenticator</li>
                            </ul>
                            <div class="content_wrapper">
                                <div class="tab_content active">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">User Name </span>
                                                    </td>
                                                    <td class="py-2 px-0">test@ma00</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Role </span>
                                                    </td>
                                                    <td class="py-2 px-0">SSR</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Account Type </span>
                                                    </td>
                                                    <td class="py-2 px-0"> Credit</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Date of Birth</span>
                                                    </td>
                                                    <td class="py-2 px-0">Jan 1, 1</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Email </span>
                                                    </td>
                                                    <td class="py-2 px-0">georgemestayer@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Mobile</span>
                                                    </td>
                                                    <td class="py-2 px-0">+125 254 3562s</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Credit Limit</span>
                                                    </td>
                                                    <td class="py-2 px-0">0.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Currency</span>
                                                    </td>
                                                    <td class="py-2 px-0">MYR</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Time Zone</span>
                                                    </td>
                                                    <td class="py-2 px-0">+07:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Last Login Ip</span>
                                                    </td>
                                                    <td class="py-2 px-0">51.195.140.214</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-2 px-0">
                                                        <span class="font-weight-semibold w-50">Last Login Ip</span>
                                                    </td>
                                                    <td class="py-2 px-0"><a href="#" class="btn btn-success btn-sm">Change Password</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab_content">
                                    <p>You will need to install a two-factor authentication application to your smartphone/tablet (Android / iPhone)</p>
                                    <h3>1. Configure the app</h3>
                                    <p>Open your two-factor authentication application and scan the QR code</p>
                                    <p>If you can't use a QR Code, enter this text code</p>
                                    <input class="form-control mb-3" />
                                    <h3>2. Enter the 6-digit code</h3>
                                    <input class="form-control mb-3" />
                                    <button href="#" class="btn btn-success btn-sm">Verify</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---Prism Pre code-->
                </div>
            </div>
        </div>
        {{-- <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div> --}}
    </div>
    @section('js')
    <!---Tabs js-->
    <script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
    <script src="{{URL::asset('assets/js/tabs.js')}}"></script>
    @endsection
</x-app-layout>
