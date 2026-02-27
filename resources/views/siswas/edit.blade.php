<h1>Edit Siswa</h1>

<form action="{{ route('siswa.update', $siswa) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $siswa->nama }}">
    <input type="number" name="umur" value="{{ $siswa->umur }}">
    <input type="number" step="0.1" name="nilai" value="{{ $siswa->nilai }}">

    <button type="submit">Update</button>
</form>