@extends('layouts.index')

@section('content')
<div class="container mt-4">
    <h2>TAMBAH MAHASISWA</h2>
    <form method="POST" action="{{ url('mahasiswa') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">ID:</label>
            <input type="text" name="ID" id="ID" class="form-control" placeholder="Masukkan ID" required>
        </div>

        <div class="form-group">
            <label for="NIM">NIM:</label>
            <input type="text" name="NIM" id="NIM" class="form-control" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="Jurusan">Nama:</label>
            <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="Alamat">Alamat:</label>
            <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Masukkan Alamat" required>
        </div>

        <div class="form-group">
            <label for="Gender">Gender:</label>
            <input type="text" name="Gender" id="Gender" class="form-control" placeholder="Masukkan Gender" required>
        </div>

        <div class="form-group">
            <label for="Agama">ProgramStudi:</label>
            <input type="text" name="ProgramStudi" id="ProgramStudi" class="form-control" placeholder="Masukkan Programstudi" required>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>
@endsection
