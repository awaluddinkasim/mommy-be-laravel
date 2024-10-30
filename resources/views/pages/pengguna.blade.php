<x-layout title="Daftar Pengguna">
    <div class="card">
        <div class="card-body">
            <x-component.datatable id="penggunaa">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>No. HP</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ Carbon\Carbon::parse($user->tanggal_lahir)->isoFormat('DD MMMM YYYY') }}</td>
                            <td>{{ $user->usia }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>
                                <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('pengguna.destroy', $user->id) }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-component.datatable>
        </div>
    </div>
</x-layout>
