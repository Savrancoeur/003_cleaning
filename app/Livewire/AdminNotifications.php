<?php

namespace App\Livewire;

use Livewire\Component;

class AdminNotifications extends Component
{
    public $notifications = [];
    public $sortField = 'created_at'; // Default sort field
    public $sortDirection = 'desc'; // Default sort direction

    protected $listeners = ['echo:App.Models.Admin,NewOrderNotification' => 'notifyAdmin'];

    public function notifyAdmin($payload)
    {
        $this->notifications[] = $payload['message'];
    }

    // Method to handle sorting
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        // Optional: You can sort the notifications in this example, or apply the sorting logic when fetching data.
        $this->notifications = collect($this->notifications)
            ->sortBy([$this->sortField, $this->sortDirection])
            ->toArray();
    }

    public function render()
    {
        return view('livewire.admin-notifications', [
            'notifications' => $this->notifications,  // Optional: pass sorted notifications to view
        ]);
    }
}
