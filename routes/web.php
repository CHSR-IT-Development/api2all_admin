<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CashSiteSettings\Settings;
use App\Livewire\CashSiteSettings\DefaultSettings;
use App\Livewire\CashSiteSettings\BankSetting;
use App\Livewire\CashSiteSettings\CreateBankInfo;
use App\Livewire\CashSiteSettings\PaygateSetting;
use App\Livewire\CashSiteSettings\PaygateHistory;
use App\Livewire\CashSiteSettings\CashDepositList;
use App\Livewire\CashSiteSettings\CashWithdrawList;
use App\Livewire\CashSiteSettings\TransferCash;
use App\Livewire\CashSiteSettings\TransferLogs;

use App\Livewire\Message\PrivateMessage;
use App\Livewire\Message\Sms;
use App\Livewire\Message\Announcement;
use App\Livewire\Message\CreateAnnouncement;

use App\Livewire\TotalBet\AssociateMember;
use App\Livewire\TotalBet\Cockfight;
use App\Livewire\TotalBet\DoubleChance;
use App\Livewire\TotalBet\Egames;
use App\Livewire\TotalBet\FgLg;
use App\Livewire\TotalBet\FtCorrectScore;
use App\Livewire\TotalBet\FtHdpOu;
use App\Livewire\TotalBet\HtHdpOu;
use App\Livewire\TotalBet\FtLayCorrectScore;
use App\Livewire\TotalBet\FtOe;
use App\Livewire\TotalBet\HdpOu;
use App\Livewire\TotalBet\HtCorrectScore;
use App\Livewire\TotalBet\HtFt;
use App\Livewire\TotalBet\HtLayCorrectScore;
use App\Livewire\TotalBet\HtOe;
use App\Livewire\TotalBet\LiveCasino;
use App\Livewire\TotalBet\Lottery;
use App\Livewire\TotalBet\MixParlay;
use App\Livewire\TotalBet\OneXTwo;
use App\Livewire\TotalBet\Outright;
use App\Livewire\TotalBet\P2p;
use App\Livewire\TotalBet\Sport;
use App\Livewire\TotalBet\Step;
use App\Livewire\TotalBet\TotalGoal;

use App\Livewire\Members\AssociateProfile ;
use App\Livewire\Members\ListAlias ;
use App\Livewire\Members\CreateNewAlias ;
use App\Livewire\Members\ListPlayer ;
use App\Livewire\Members\CreateNewPlayer;
use App\Livewire\Members\ListSenior ;
use App\Livewire\Members\CreateNewSenior ;
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

use App\Livewire\Logs\MemberLog ;

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
Route::middleware(['auth'])->group(function() {
// Cash Site Settings
    Route::get('/cash_site_settings/settings', Settings::class);
    Route::get('/cash_site_settings/default_settings', DefaultSettings::class);
    Route::get('/cash_site_settings/bank_settings', BankSetting::class);
    Route::get('/cash_site_settings/bank_settings/create_bank_info', CreateBankInfo::class);
    Route::get('/cash_site_settings/paygate_setting', PaygateSetting::class);
    Route::get('/cash_site_settings/paygate_history', PaygateHistory::class);
    Route::get('/cash_site_settings/cash_deposit_list', CashDepositList::class);
    Route::get('/cash_site_settings/cash_withdraw_list', CashWithdrawList::class);
    Route::get('/cash_site_settings/transfer_cash', TransferCash::class);
    Route::get('/cash_site_settings/transfer_logs', TransferLogs::class);
// Message
    Route::get('/message/private_message', PrivateMessage::class);
    Route::get('/message/sms', Sms::class);
    Route::get('/message/announcement', Announcement::class);
    Route::get('/message/create_announcement', CreateAnnouncement::class);
// Total Bet
    Route::get('/total_bet/hdp_ou', HdpOu::class);
    Route::get('/total_bet/ft_hdp_ou', FtHdpOu::class);
    Route::get('/total_bet/ht_hdp_ou', HtHdpOu::class);
    Route::get('/total_bet/ft_oe', FtOe::class);
    Route::get('/total_bet/ht_oe', HtOe::class);
    Route::get('/total_bet/one_x_two', OneXTwo::class);
    Route::get('/total_bet/douable_chance', DoubleChance::class);
    Route::get('/total_bet/total_goal', TotalGoal::class);
    Route::get('/total_bet/ft_correct_score', FtCorrectScore::class);
    Route::get('/total_bet/ht_correct_score', HtCorrectScore::class);
    Route::get('/total_bet/ft_lay_correct_score', FtLayCorrectScore::class);
    Route::get('/total_bet/ht_lay_correct_score', HtLayCorrectScore::class);
    Route::get('/total_bet/ht_ft', HtFt::class);
    Route::get('/total_bet/fg_lg', FgLg::class);
    Route::get('/total_bet/outright', Outright::class);
    Route::get('/total_bet/mix_player', MixParlay::class);
    Route::get('/total_bet/step', Step::class);
    Route::get('/total_bet/cockfight', Cockfight::class);
    Route::get('/total_bet/sport', Sport::class);
    Route::get('/total_bet/lottery', Lottery::class);
    Route::get('/total_bet/p2p', P2p::class);
    Route::get('/total_bet/egames', Egames::class);
    Route::get('/total_bet/live_casino', LiveCasino::class);
    Route::get('/total_bet/associate_member', AssociateMember::class);

// Members
    Route::get('/members/associate_profile', AssociateProfile::class);
    Route::get('/members/list_alias', ListAlias::class);
    Route::get('/members/list_alias/create_new_alias', CreateNewAlias::class);
    Route::get('/members/list_player', ListPlayer::class);
    Route::get('/members/list_player/create_new_player', CreateNewPlayer::class);
    Route::get('/members/list_senior', ListSenior::class);
    Route::get('/members/list_senior/create_new_senior', CreateNewSenior::class);
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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
