<x-layout title="Akun">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('akun.update') }}" method="post">
                        @method("PUT")
                        @csrf
                        <x-form.input label="Nama" name="nama" :value="$user->nama" :required="true" />
                        <x-form.input label="Email" type="email" name="email" :value="$user->email" :required="true" />
                        <x-form.input label="Password" type="password" name="password" />

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/img/edit.svg') }}" alt="" class="w-75">
        </div>
    </div>
</x-layout>
