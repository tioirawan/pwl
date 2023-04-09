@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hobi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Hobi</li>
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
                    <h3 class="card-title">Tambah Hobi</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ $url_form }}">
                        @csrf

                        {!! isset($hobby) ? method_field('PUT') : '' !!}

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ isset($hobby) ? $hobby->name : old('name') }}" name="name">
                            @error('name')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ isset($hobby) ? $hobby->description : old('description') }}</textarea>
                            @error('description')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" value="Simpan" class="btn btn-primary">

                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
