@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Home Page</li>
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
                  <h3 class="card-title">Title</h3>

                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                          <i class="fas fa-times"></i>
                      </button>
                  </div>
              </div>
              <div class="card-body">
                <p>Halo, perkenalkan nama saya <b>{{ Str::title(Str::replace('-', ' ', $name)) }}</b>, saya mahasiswa Jurusan Teknologi Informasi Prodi D4 Teknik Informatika di Politeknik Negeri Malang. Saya berada di kelas TI-2A dan menjadi salah satu mahasiswa dengan nomor absen 29. Saya sangat tertarik dengan mata kuliah pemrograman web lanjut yang diajarkan oleh pak Moch. Zawaruddin Abdullah, S.ST., M.Kom. dan merasa beruntung bisa belajar dari beliau. Terima kasih.</p>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  Footer
              </div>
              <!-- /.card-footer-->
          </div>
          <!-- /.card -->

    
        <section >
    </div>
@endsection
