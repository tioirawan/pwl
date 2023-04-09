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
                            <li class="breadcrumb-item active">Hobby</li>
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
                    <h3 class="card-title">Mata Kuliah</h3>
                </div>
                <div class="card-body">
                    <table id="article-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Deskripsi</th>
                                <th>Dosen</th>
                                <th>Hari</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->sks }}</td>
                                    <td>{{ $course->semester }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->lecturer }}</td>
                                    <td>{{ $course->day }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Deskripsi</th>
                                <th>Dosen</th>
                                <th>Hari</th>
                            </tr>
                        </tfoot>
                    </table>
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

@push('custom_js')
    <script>
        $('#article-table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
@endpush
