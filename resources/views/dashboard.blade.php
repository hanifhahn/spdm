<x-app-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body class="bg-light">
        <main class="container">

            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">

                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <form class="d-flex" action="/dashboard" method="get">
                        <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Cari Nama Mahasiswa atau Prodi" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href='{{ url("/tambah") }}' class="btn btn-primary">+ Tambah Mahasiswa</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">@sortablelink('prodi', 'Prodi')</th>
                            <th class="col-md-2">@sortablelink('semester', 'Semester')</th>
                            <th class="col-md-2">@sortablelink('kelas', 'Kelas')</th>
                            <th class="col-md-2">@sortablelink('kelas', 'Angkatan')</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $key=>$mahasiswa)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->prodi }}</td>
                            <td>{{ $mahasiswa->semester }}</td>
                            <td>{{ $mahasiswa->kelas }}</td>
                            <td>{{ $mahasiswa->angkatan }}</td>

                            <td>
                                <form action="{{ url('/update', $mahasiswa) }}" method="GET">
                                    @csrf
                                    @method('UPDATE')
                                    <input placeholder="UPDATE" type="submit" value="Update" class="btn btn-warning btn-sm">
                                </form>
                                {{-- <a href='' class="btn btn-warning btn-sm">Edit</a> --}}
                                <form action="{{ url('/delete', $mahasiswa) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input placeholder="DELETE" type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!-- AKHIR DATA -->
        </main>
    </body>


</x-app-layout>