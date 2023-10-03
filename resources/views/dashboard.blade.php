<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="fa fa-credit-card card-custom-icon text-success icon-dropshadow-success" style="font-size:48px"></i>
                                <p class=" mb-1 ">Credit Limit</p>
                                <h2 class="mb-1 font-weight-bold">$ 10,0000.00</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="fa fa-calculator card-custom-icon text-secondary icon-dropshadow-secondary" style="font-size:48px"></i>
                                <p class=" mb-1 ">Used Credit</p>
                                <h2 class="mb-1 font-weight-bold">$8,119.00</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="fa fa-users card-custom-icon text-primary icon-dropshadow-primary" style="font-size:48px"></i>
                                <p class=" mb-1 ">Total Seniors</p>
                                <h2 class="mb-1 font-weight-bold">6</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="fa fa-users card-custom-icon text-primary icon-dropshadow-primary" style="font-size:48px"></i>
                                <p class=" mb-1 ">Total Player</p>
                                <h2 class="mb-1 font-weight-bold">7</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="fa fa-users card-custom-icon text-primary icon-dropshadow-primary" style="font-size:48px"></i>
                                <p class=" mb-1 ">Total Player</p>
                                <h2 class="mb-1 font-weight-bold">7</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>