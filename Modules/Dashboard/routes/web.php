<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Livewire\Settings\Appearance;
use Modules\Dashboard\Livewire\Settings\Password;
use Modules\Dashboard\Livewire\Settings\Profile;

Route::middleware(['auth', 'verified'])
    ->prefix('dashboard')
    ->group(function () {
        Route::view('/', 'dashboard::dashboard')->name('dashboard');

        Route::redirect('settings', 'settings/profile');
        Route::get('settings/profile', Profile::class)->name('settings.profile');
        Route::get('settings/password', Password::class)->name('settings.password');
        Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    });

