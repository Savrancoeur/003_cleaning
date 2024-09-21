<div>
    <h4>Notifications</h4>
    <table>
        <thead>
        <tr>
            <th>
                <a href="#" wire:click.prevent="sortBy('created_at')">
                    Date
                    @if ($sortField === 'created_at')
                        <span>{{ $sortDirection === 'asc' ? '↑' : '↓' }}</span>
                    @endif
                </a>
            </th>
            <th>Notification</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notifications as $notification)
            <tr>
                <td>{{ $notification['created_at'] }}</td>
                <td>{{ $notification['message'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
