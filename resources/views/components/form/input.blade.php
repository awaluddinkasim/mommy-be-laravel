@props(['label', 'type' => 'text', 'name', 'value' => null, 'required' => false])

<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" value="{{ $value }}"
        @if ($required) required @endif>
</div>
