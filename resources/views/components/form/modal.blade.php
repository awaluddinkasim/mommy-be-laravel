@props(['title', 'label', 'action'])

<a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#form-modal">
    {{ $label }}
</a>

<x-component.modal id="form-modal" title="{{ $title }}">
    <form action="{{ $action }}" method="post" autocomplete="off">
        @csrf
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-component.modal>
