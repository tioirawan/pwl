<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Hasil Studi - {{ $mahasiswa->nama }}</title>

    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

    <style>
        .biodata-table {
            margin-bottom: 2rem;
        }

        .biodata-table th {
            text-align: left;
        }
    </style>
</head>

<body>

    <h1 class="text-center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h1>


    <h2 class="mt-5 mb-2 text-center">KARTU HASIL STUDI (KHS)</h2>


    <div class="container">
        <table class="biodata-table">
            <tr>
                <th><strong>NAMA</strong></th>
                <td>:</td>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th><strong>NIM</strong></th>
                <td>:</td>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th><strong>KELAS</strong></th>
                <td>:</td>
                <td>{{ $mahasiswa->kelas->nama }}</td>
            </tr>
        </table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td><strong>Mata Kuliah</strong></td>
                    <td><strong>SKS</strong></td>
                    <td><strong>Semester</strong></td>
                    <td><strong>Nilai</strong></td>
                </tr>
            </thead>

            <tbody>

                @foreach ($mahasiswa->courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->sks }}</td>
                        <td>{{ $course->semester }}</td>
                        <td>{{ $course->pivot->nilai }}</td>
                    </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>
