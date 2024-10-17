<x-layout title="Makanan">

    <x-form.modal title="Tambah" label="Add Food" action="{{ route('makanan.store') }}">
        <x-form.input name="nama" label="Nama Makanan" :required="true" />
        <x-form.input name="kalori" label="Jumlah Kalori (kcal)" :required="true" />
        <x-form.input name="porsi" label="Jumlah Porsi" :required="true" />
    </x-form.modal>

    <div class="row row-cards mt-4">
        @foreach ($foods as $food)
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-4 text-center">
                        <span class="avatar avatar-xl mb-3 rounded"
                            style="background-image: url('{{ asset('static/food.jpg') }}')"></span>
                        <h3 class="m-0 mb-1">{{ $food->nama }}</h3>
                        <div class="text-secondary">{{ $food->kalori }} kkal</div>
                        <div class="text-secondary">{{ $food->porsi }} porsi</div>
                    </div>
                    <div class="card-footer text-center">
                        <form action="{{ route('makanan.destroy', $food->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
