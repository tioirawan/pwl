@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Mahasiswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ $url_form }}">
                        @csrf

                        {!! isset($mhs) ? method_field('PUT') : '' !!}


                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror"
                                value="{{ isset($mhs) ? $mhs->nim : old('nim') }}" name="nim" maxlength="10">
                            @error('nim')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ isset($mhs) ? $mhs->nama : old('nama') }}" name="nama">
                            @error('nama')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="l"
                                    {{ old('jk') == 'l' ? 'selected' : (isset($mhs) && $mhs->jk == 'l' ? 'selected' : '') }}>
                                    Laki-laki</option>
                                <option value="p"
                                    {{ old('jk') == 'p' ? 'selected' : (isset($mhs) && $mhs->jk == 'p' ? 'selected' : '') }}>
                                    Perempuan</option>
                                </option>
                            </select>
                            @error('jk')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                value="{{ isset($mhs) ? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir">
                            @error('tempat_lahir')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                value="{{ isset($mhs) ? $mhs->tanggal_lahir : old('tanggal_lahir') }}"
                                name="tanggal_lahir">
                            @error('tanggal_lahir')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ isset($mhs) ? $mhs->alamat : old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hp">No. HP</label>
                            <input type="text" class="form-control @error('hp') is-invalid @enderror"
                                value="{{ isset($mhs) ? $mhs->hp : old('hp') }}" name="hp" minlength="6"
                                maxlength="15">
                            @error('hp')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" value="Simpan" class="btn btn-primary">

                    </form>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
    </div>
@endsection
