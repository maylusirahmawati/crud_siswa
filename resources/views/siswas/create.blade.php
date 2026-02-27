<h1>Tambah Siswa</h1>

<form action="{{ route('siswas.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama">
    <input type="number" name="umur" placeholder="Umur">
    <input type="number" step="0.1" name="nilai" placeholder="Nilai">
    <button type="submit">Simpan</button>
</form>

