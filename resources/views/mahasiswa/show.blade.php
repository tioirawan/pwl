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
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nim: </b>{{ $mahasiswa->nim }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $mahasiswa->nama }}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{ $mahasiswa->kelas->nama }}</li>
                        <li class="list-group-item"><b>Jenis Kelamin:
                            </b>{{ $mahasiswa->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}
                        </li>
                        <li class="list-group-item"><b>Hp: </b>{{ $mahasiswa->hp }}</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
