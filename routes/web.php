<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CashSiteSettings\Settings;
use App\Livewire\CashSiteSettings\DefaultSettings;
use App\Livewire\CashSiteSettings\BankSetting;
use App\Livewire\CashSiteSettings\PaygateSetting;
use App\Livewire\CashSiteSettings\PaygateHistory;
use App\Livewire\CashSiteSettings\CashDepositList;
use App\Livewire\CashSiteSettings\CashWithDrawList;
use App\Livewire\CashSiteSettings\TransferCash;
use App\Livewire\CashSiteSettings\TransferLogs;

use App\Livewire\Members\AssociateProfile ;
use App\Livewire\Members\ListAlias ;
use App\Livewire\Members\ListPlayer ;
use App\Livewire\Members\ListSenior ;
use App\Livewire\Members\MemberAccount ;
use App\Livewire\Members\OnlineUser ;
use App\Livewire\Members\PtCommSummary ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/login');
Route::get('/cash_site_settings/settings', Settings::class);
Route::get('/cash_site_settings/default_settings', DefaultSettings::class);
Route::get('/cash_site_settings/bank_settings', BankSetting::class);
Route::get('/cash_site_settings/paygate_setting', PaygateSetting::class);
Route::get('/cash_site_settings/paygate_history', PaygateHistory::class);
Route::get('/cash_site_settings/cash_deposit_list', CashDepositList::class);
Route::get('/cash_site_settings/cash_withdraw_list', CashWithDrawList::class);
Route::get('/cash_site_settings/transfer_cash', TransferCash::class);
Route::get('/cash_site_settings/transfer_logs', TransferLogs::class);
// Members
Route::get('/members/associate_profile', AssociateProfile::class);
Route::get('/members/list_alias', ListAlias::class);
Route::get('/members/list_player', ListPlayer::class);
Route::get('/members/list_senior', ListSenior::class);
Route::get('/members/member_account', MemberAccount::class);
Route::get('/members/online_user', OnlineUser::class);
Route::get('/members/pt_comm_summary', PtCommSummary::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
