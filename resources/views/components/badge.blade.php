@props(['type' => 'primary', 'pill' => false])

<span {{ $attributes->merge(['class' => 'badge bg-' . $type . ($pill ? ' rounded-pill' : '')]) }}>
    {{ $slot }}
</span>
