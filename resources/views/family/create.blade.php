@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Keluarga</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Keluarga</li>
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
                    <h3 class="card-title">Tambah Anggota Keluarga</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ $url_form }}">
                        @csrf

                        {!! isset($family) ? method_field('PUT') : '' !!}


                        {{-- <td>{{ $family->name }}</td> --}}
                        {{-- <td>{{ $family->address }}</td> --}}
                        {{-- <td>{{ $family->phone }}</td> --}}
                        {{-- <td>{{ $family->relation }}</td> --}}
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ isset($family) ? $family->name : old('name') }}" name="name">
                            @error('name')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                value="{{ isset($family) ? $family->address : old('address') }}" name="address">
                            @error('address')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">No. Telepon</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ isset($family) ? $family->phone : old('phone') }}" name="phone">
                            @error('phone')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="relation">Relasi</label>
                            <input type="text" class="form-control @error('relation') is-invalid @enderror"
                                value="{{ isset($family) ? $family->relation : old('relation') }}" name="relation">
                            @error('relation')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" value="Simpan" class="btn btn-primary">

                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
