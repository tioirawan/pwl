@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mata Kuliah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Mata Kuliah</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Mata Kuliah</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ $url_form }}">
                        @csrf

                        {!! isset($course) ? method_field('PUT') : '' !!}

                        {{-- $table->string('name');
                        $table->string('sks');
                        $table->string('semester');
                        $table->string('description');
                        $table->string('lecturer');
                        $table->string('day'); --}}

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ isset($course) ? $course->name : old('name') }}" name="name">
                            @error('name')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="text" class="form-control @error('sks') is-invalid @enderror"
                                value="{{ isset($course) ? $course->sks : old('sks') }}" name="sks">
                            @error('sks')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control @error('semester') is-invalid @enderror"
                                value="{{ isset($course) ? $course->semester : old('semester') }}" name="semester">
                            @error('semester')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                value="{{ isset($course) ? $course->description : old('description') }}" name="description">
                            @error('description')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lecturer">Dosen</label>
                            <input type="text" class="form-control @error('lecturer') is-invalid @enderror"
                                value="{{ isset($course) ? $course->lecturer : old('lecturer') }}" name="lecturer">
                            @error('lecturer')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="day">Hari</label>
                            <input type="text" class="form-control @error('day') is-invalid @enderror"
                                value="{{ isset($course) ? $course->day : old('day') }}" name="day">
                            @error('day')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
