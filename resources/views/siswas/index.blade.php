<h1>Data Siswa</h1>

<a href="{{ route('siswas.create')}}">Tambah Data Siswa</a>

<br> <br>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($siswa as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->umur }}</td>
            <td>{{ $data->nilai }}</td>
            <td>
                <a href="{{ route('siswa.edit', $data->id) }}">Edit</a>

                <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">Belum ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>