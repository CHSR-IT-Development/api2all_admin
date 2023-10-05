<!--aside open-->
<div class="app-sidebar app-sidebar2">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route('dashboard') }}">
            <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Covido logo">
            <img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Covido logo">
            <img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Covido logo">
            <img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Covido logo">
        </a>
    </div>
</div>
<aside class="app-sidebar app-sidebar3">
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1 font-weight-bold">{{ Auth::user()->name }}</h5>
                <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->email }}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}" href="/dashboard">
                <i class="fa fa-th-large side-menu__icon"></i>
                <span class="side-menu__label">{{ __('Dashboard') }}</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item {{ Request::segment(1) == 'profile' ? 'active' : '' }}" href="/user/profile">
                <i class="fa fa-user side-menu__icon"></i>
                <span class="side-menu__label">{{ __('Profile') }}</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
                <i class="fa fa-lastfm side-menu__icon"></i>
                <span class="side-menu__label">Cash Site Settings</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/cash_site_settings/settings" class="slide-item {{ Request::segment(1) == 'setting' ? 'active' : '' }}">Settings</a></li>
                <li><a href="/cash_site_settings/default_settings" class="slide-item">Default Settings</a></li>
                <li><a href="/cash_site_settings/bank_settings" class="slide-item">Bank Setting</a></li>
                <li><a href="/cash_site_settings/paygate_setting" class="slide-item">Paygate Setting</a></li>
                <li><a href="/cash_site_settings/paygate_history" class="slide-item">Paygate History</a></li>
                <li><a href="/cash_site_settings/cash_deposit_list" class="slide-item">Cash Deposit List</a></li>
                <li><a href="/cash_site_settings/cash_withdraw_list" class="slide-item">Cash Withdraw List</a></li>
                <li><a href="/cash_site_settings/transfer_cash" class="slide-item">Transfer Cash</a></li>
                <li><a href="/cash_site_settings/transfer_logs" class="slide-item">Transfer Logs</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                <i class="fa fa-envelope side-menu__icon"></i>
                <span class="side-menu__label">Message</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/message/private_message" class="slide-item">Private Message</a></li>
                <li><a href="/message/sms" class="slide-item">SMS</a></li>
                <li><a href="/message/announcement" class="slide-item">Announcement</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                <i class="fa fa-futbol-o side-menu__icon"></i>
                <span class="side-menu__label">Total Bet</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ url('/' . $page='calendar') }}" class="slide-item">HDP & O/U</a></li>
                <li><a href="{{ url('/' . $page='dragula') }}" class="slide-item">FT HDP & O/U</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">HT HDP & O/U</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">FT OE</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">HT OE</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">1X2</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Double Chance</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Total goal</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">FT Correct Score</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">HT Correct Score</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">FT Lay Correct Score</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">HT Lay Correct Score</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">HT/FT</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">HG/FG</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">OutRight</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Mix Parlay</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Step</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Cockfight</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Sport</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Lottery</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">P2P</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Egamges</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Live Casino</a></li>
                <li><a href="{{ url('/' . $page='cookies') }}" class="slide-item">Associate/Member</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                <i class="fa fa-users side-menu__icon"></i>
                <span class="side-menu__label">Members</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/members/list_senior" class="slide-item">List Senior</a></li>
                <li><a href="/members/list_player" class="slide-item">List Player</a></li>
                <li><a href="/members/associate_profile" class="slide-item">Associate Profile</a></li>
                <li><a href="/members/list_alias" class="slide-item">List Alias</a></li>
                <li><a href="/members/online_user" class="slide-item">Online User</a></li>
                <li><a href="/members/member_account" class="slide-item">Member Account</a></li>
                <li><a href="/members/pt_comm_summary" class="slide-item">PT/Comm Summary</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                <i class="fa fa-file-excel-o side-menu__icon"></i>
                <span class="side-menu__label">Reports</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/reports/win_lose_simple" class="slide-item">Win Lose Simple</a></li>
                <li><a href="/reports/win_lose_full" class="slide-item">Win Lose Full</a></li>
                <li><a href="/reports/top_player" class="slide-item">Top Player</a></li>
                <li><a href="/reports/top_win_ticket" class="slide-item">Top Wind Ticket</a></li>
                <li><a href="/reports/win_loss_vip" class="slide-item">Winloss VIP</a></li>
                <li><a href="/reports/member_statement" class="slide-item">Member Statement</a></li>
                <li><a href="/reports/performance_report" class="slide-item">Performance Report</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
                <i class="fa fa-file-excel-o side-menu__icon"></i>
                <span class="side-menu__label">Archive Reports</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/archived_reports/win_lose_simple" class="slide-item">Win Lose Simple</a></li>
                <li><a href="/archived_reports/win_lose_full" class="slide-item">Win Lose Full</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item {{ Request::segment(1) == 'billing' ? 'active' : '' }}" href="/billing">
                <i class="fa fa-file-text-o side-menu__icon"></i>
                <span class="side-menu__label">{{ __('Billing') }}</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                <i class="fa fa-exchange side-menu__icon"></i>
                <span class="side-menu__label">Transfer</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/transfer/transfer" class="slide-item">Transfer</a></li>
                <li><a href="/transfer/transfer_log" class="slide-item">Transfer Logs</a></li>
                <li><a href="/transfer/transfer_settings" class="slide-item">Transfer Settings</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
                <i class="fa fa-line-chart side-menu__icon"></i>
                <span class="side-menu__label">Marketing</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/marketing/birthday_notification" class="slide-item">Birthday Notification</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
                <i class="fa fa-edit side-menu__icon"></i>
                <span class="side-menu__label">Logs</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="/logs/member_log" class="slide-item">Member Log</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="/search_ticket">
                 <i class="fa fa-search side-menu__icon"></i>
                <span class="side-menu__label">Search Ticket</span></a>
        </li>
    </ul>
</aside>
<!--aside closed-->
