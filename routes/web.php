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

use App\Livewire\Message\PrivateMessage;
use App\Livewire\Message\Sms;
use App\Livewire\Message\Announcement;

use App\Livewire\Members\AssociateProfile ;
use App\Livewire\Members\ListAlias ;
use App\Livewire\Members\ListPlayer ;
use App\Livewire\Members\ListSenior ;
use App\Livewire\Members\MemberAccount ;
use App\Livewire\Members\OnlineUser ;
use App\Livewire\Members\PtCommSummary ;

use App\Livewire\Reports\WinLoseSimple ;
use App\Livewire\Reports\WinLoseFull ;
use App\Livewire\Reports\TopPlayer ;
use App\Livewire\Reports\TopWinTicket ;
use App\Livewire\Reports\WinlossVip ;
use App\Livewire\Reports\MemberStatement ;
use App\Livewire\Reports\PerformanceReport ;

use App\Livewire\ArchivedReports\WinLossSimple ;
use App\Livewire\ArchivedReports\WinLossFull ;

use App\Livewire\Billing ;

use App\Livewire\Transfer\Transfer ;
use App\Livewire\Transfer\TransferLog ;
use App\Livewire\Transfer\TransferSettings ;

use App\Livewire\Marketing\BirthdayNotification ;

use App\Livewire\logs\MemberLog ;

use App\Livewire\SearchTicket ;


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
// Cash Site Settings
Route::get('/cash_site_settings/settings', Settings::class);
Route::get('/cash_site_settings/default_settings', DefaultSettings::class);
Route::get('/cash_site_settings/bank_settings', BankSetting::class);
Route::get('/cash_site_settings/paygate_setting', PaygateSetting::class);
Route::get('/cash_site_settings/paygate_history', PaygateHistory::class);
Route::get('/cash_site_settings/cash_deposit_list', CashDepositList::class);
Route::get('/cash_site_settings/cash_withdraw_list', CashWithDrawList::class);
Route::get('/cash_site_settings/transfer_cash', TransferCash::class);
Route::get('/cash_site_settings/transfer_logs', TransferLogs::class);
// Message
Route::get('/message/private_message', PrivateMessage::class);
Route::get('/message/sms', Sms::class);
Route::get('/message/announcement', Announcement::class);
// Members
Route::get('/members/associate_profile', AssociateProfile::class);
Route::get('/members/list_alias', ListAlias::class);
Route::get('/members/list_player', ListPlayer::class);
Route::get('/members/list_senior', ListSenior::class);
Route::get('/members/member_account', MemberAccount::class);
Route::get('/members/online_user', OnlineUser::class);
Route::get('/members/pt_comm_summary', PtCommSummary::class);
// Reports
Route::get('/reports/win_lose_simple', WinLoseSimple::class);
Route::get('/reports/win_lose_full', WinLoseFull::class);
Route::get('/reports/top_player', TopPlayer::class);
Route::get('/reports/top_win_ticket', TopWinTicket::class);
Route::get('/reports/win_loss_vip', WinlossVip::class);
Route::get('/reports/member_statement', MemberStatement::class);
Route::get('/reports/performance_report', PerformanceReport::class);
// Archived Report
Route::get('/archived_reports/win_lose_simple', WinLossSimple::class);
Route::get('/archived_reports/win_lose_full', WinLossFull::class);
// Billing
Route::get('/billing', Billing::class);
// Transfer
Route::get('/transfer/transfer', Transfer::class);
Route::get('/transfer/transfer_log', TransferLog::class);
Route::get('/transfer/transfer_settings', TransferSettings::class);
// Marketing
Route::get('/marketing/birthday_notification', BirthdayNotification::class);
// Logs
Route::get('/logs/member_log', MemberLog::class);
// Search Ticket
Route::get('/search_ticket', SearchTicket::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
