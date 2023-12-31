<!--app header-->
<div class="app-header header top-header">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="header-brand" href="{{ url('/' . $page='index') }}">
                <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dashtic logo">
                <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img dark-logo" alt="Dashtic logo">
                <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img mobile-logo" alt="Dashtic logo">
                <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img darkmobile-logo" alt="Dashtic logo">
            </a>
            <div class="dropdown side-nav">
                <div class="app-sidebar__toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="#">
                        <svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                    <a class="close-toggle" href="#">
                        <svg class="header-icon mt-1" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" /></svg>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-inline">
                <div class="main-profile-contact-list d-lg-flex align-items-center">
                    <div class="media mr-5 mt-0">
                        <div class="media-icon bg-primary-transparent text-primary mr-3 mt-1">
                            <i class="fa fa-user-secret"></i>
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Seniors</small>
                            <div class="font-weight-bold">
                                6
                            </div>
                        </div>
                    </div>
                    <div class="media mr-5  mt-0">
                        <div class="media-icon bg-warning-transparent text-warning mr-3 mt-1">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Players</small>
                            <div class="font-weight-bold">
                                7
                            </div>
                        </div>
                    </div>
                    <div class="media  mt-0">
                        <div class="media-icon bg-info-transparent text-info mr-3 mt-1">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="media-body">
                            <small class="text-muted">Balance</small>
                            <div class="font-weight-bold">
                                $  MYR 8,119/ 10,000.00
                            </div>
                        </div>
                    </div>
                </div><!-- main-profile-contact-list -->
            </div>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown header-notify pl-4">
                    <a class="nav-link icon p-0" data-toggle="dropdown">
                        <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                            <path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path>
                            <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z"></path>
                        </svg>
                        <span class="pulse "></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M15 11V4H4v8.17l.59-.58.58-.59H6z" opacity=".3" />
                                <path d="M21 6h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1zm-5 7c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zM4.59 11.59l-.59.58V4h11v7H5.17l-.58.59z" /></svg>
                            <div>
                                <div class="font-weight-bold">Message Sent.</div>
                                <div class="small text-muted">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M15.55 11l2.76-5H6.16l2.37 5z" opacity=".3" />
                                <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" /></svg>
                            <div>
                                <div class="font-weight-bold"> Order Placed</div>
                                <div class="small text-muted">5 hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M5 8h14V6H5z" opacity=".3" />
                                <path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z" />
                            </svg>
                            <div>
                                <div class="font-weight-bold"> Event Started</div>
                                <div class="small text-muted">45 mintues ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <svg class="header-icon mr-4" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M18 13h5v7h-5z" opacity=".3" />
                                <path d="M23 11.01L18 11c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5c.55 0 1-.45 1-1v-9c0-.55-.45-.99-1-.99zM23 20h-5v-7h5v7zM2 4h18v5h2V4c0-1.11-.9-2-2-2H2C.89 2 0 2.89 0 4v12c0 1.1.89 2 2 2h7v2H7v2h8v-2h-2v-2h2v-2H2V4zm9 2l-.97 3H7l2.47 1.76-.94 2.91 2.47-1.8 2.47 1.8-.94-2.91L15 9h-3.03z" /></svg>
                            <div>
                                <div class="font-weight-bold">Your Admin lanuched</div>
                                <div class="small text-muted">1 daya ago</div>
                            </div>
                        </a>
                        <div class=" text-center p-2 border-top">
                            <a href="#" class="">View All Notifications</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown profile-dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span>
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" width="30" class="avatar avatar-md brround rounded rounded-5">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                        <div class="text-center">
                            <a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</a>
                            <span class="text-center user-semi-title">{{ Auth::user()->email }}</span>
                            <div class="dropdown-divider"></div>
                        </div>
                        <a class="dropdown-item d-flex" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            <svg class="header-icon mr-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3" />
                                <circle cx="12" cy="8" opacity=".3" r="2" />
                                <path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" />
                            </svg>
                            <div class="mt-1">{{ __('Profile') }}</div>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a class="dropdown-item d-flex" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <svg class="header-icon mr-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                    <path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3" />
                                    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z" />
                                </svg>
                                <div class="mt-1">{{ __('Log Out') }}</div>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/app header-->
