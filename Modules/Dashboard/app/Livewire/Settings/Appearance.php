<?php

declare(strict_types=1);

namespace Modules\Dashboard\Livewire\Settings;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Appearance extends Component
{
    public function render(): View
    {
        return view('dashboard::livewire.settings.appearance');
    }
}
