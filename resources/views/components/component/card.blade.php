@props(['header', 'footer'])

<div class="card">
    <div class="card-header">
        @isset($header)
            {{ $header }}
        @endisset
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
    <div class="card-footer">
        @isset($footer)
            {{ $footer }}
        @endisset
    </div>
</div>
