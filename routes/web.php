<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;

Route::get('/', fn () => redirect()->route('login'));

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');
    Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendReset'])->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class, 'showReset'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'reset'])->name('password.update');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware(['auth', 'verified', 'track.activity'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('contacts', ContactController::class);
    Route::post('contacts/import', [ContactController::class, 'import'])->name('contacts.import');
    Route::get('contacts/export/{type}', [ContactController::class, 'export'])->name('contacts.export');

    Route::resource('campaigns', CampaignController::class);
    Route::post('campaigns/{campaign}/send', [CampaignController::class, 'send'])->name('campaigns.send');
    Route::post('campaigns/{campaign}/pause', [CampaignController::class, 'pause'])->name('campaigns.pause');
    Route::post('campaigns/{campaign}/resume', [CampaignController::class, 'resume'])->name('campaigns.resume');

    Route::resource('templates', TemplateController::class);
    Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('reports/export/{format}', [ReportController::class, 'export'])->name('reports.export');

    Route::resource('users', UserController::class);
    Route::get('logs/activity', [LogController::class, 'activity'])->name('logs.activity');
    Route::get('logs/email', [LogController::class, 'email'])->name('logs.email');
    Route::get('logs/failed-jobs', [LogController::class, 'failedJobs'])->name('logs.failed-jobs');

    Route::get('settings/smtp', [SettingsController::class, 'smtp'])->name('settings.smtp');
    Route::post('settings/smtp', [SettingsController::class, 'updateSmtp'])->name('settings.smtp.update');
    Route::get('settings/system', [SettingsController::class, 'system'])->name('settings.system');
    Route::post('settings/system', [SettingsController::class, 'updateSystem'])->name('settings.system.update');

    Route::get('system/health', [SystemController::class, 'health'])->name('system.health');
    Route::get('system/import-history', [SystemController::class, 'imports'])->name('system.imports');
    Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
});
