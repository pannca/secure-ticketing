@props(['ticket'])

<div {{ $attributes->merge(['class' => 'card mb-3']) }}>
    <div class="card-body">
        <h5 class="card-title">{{ $ticket->title ?? 'No Title' }}</h5>
        <p class="mb-2">
            <span class="badge bg-{{ $ticket->priority === 'high' ? 'danger' : ($ticket->priority === 'medium' ? 'warning' : 'secondary') }}">
                {{ ucfirst($ticket->priority ?? 'low') }}
            </span>
            <span class="badge bg-{{ $ticket->status === 'open' ? 'success' : 'secondary' }}">
                {{ ucfirst($ticket->status ?? 'open') }}
            </span>
        </p>
        {{ $slot }}
    </div>
</div>
