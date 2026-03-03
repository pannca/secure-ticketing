@props(['type' => 'info', 'message', 'dismissible' => true])

<div {{ $attributes->merge(['class' => 'alert alert-' . $type . ($dismissible ? ' alert-dismissible fade show' : '')]) }} role="alert">
    {{ $message }}
    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @endif
</div>
