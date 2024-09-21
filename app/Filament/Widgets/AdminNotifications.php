<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class AdminNotifications extends Widget
{
    protected static ?string $heading = 'Notifications';

    protected static string $view = 'filament.widgets.admin-notifications';

    public $notifications = [];

    protected function getData(): array
    {
        return [
            'notifications' => $this->notifications,
        ];
    }

    public function mount()
    {
        // Initialize notifications or set up listeners if needed
    }

    // Optionally, add real-time capabilities here
}
