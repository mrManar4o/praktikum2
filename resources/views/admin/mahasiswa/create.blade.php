@extends('layouts.main')
@section('content')
<div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{Route('admin.mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <select name="jurusan" id="" class="form-control">
                        <option value="">Pilih</option>
                        <option value="TI">TI</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Ekonomi">Ekonomi</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="">NPM</label>
                    <input type="text" class="form-control" name="npm">
                </div>

                <div class="form-group mb-3">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa">
                </div>

                <div class="form-group mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>

                <label for="" class="mt-2">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                </div>

                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="">Hoby</label>
                    <input type="text" class="form-control" name="hoby">
                </div>

                <div class="form-group mb-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <div class="text-end">
                    <a href="{{Route('admin.mahasiswa.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection