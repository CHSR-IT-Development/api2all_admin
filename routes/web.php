<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CashSiteSettings\Settings;
use App\Livewire\CashSiteSettings\DefaultSettings;
use App\Livewire\CashSiteSettings\BankSetting;
use App\Livewire\CashSiteSettings\PaygateSetting;
use App\Livewire\CashSiteSettings\PaygateHistory;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
