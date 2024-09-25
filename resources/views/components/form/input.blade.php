@props(['label', 'type' => 'text', 'name', 'required' => false])

<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}"
        @if ($required) required @endif>
</div>
