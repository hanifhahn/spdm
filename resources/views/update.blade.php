<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container">
        <!-- START FORM -->
        <form action="{{ route('mahasiswa.update', $mahasiswa)}}" method='post'>
            @csrf
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nim' id="nim" value="{{ $mahasiswa->nim }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='nama' id="nama" value="{{ $mahasiswa->nama }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='prodi' id="prodi" value="{{ $mahasiswa->prodi }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='semester' id="semester" value="{{ $mahasiswa->semester }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='kelas' id="kelas" value="{{ $mahasiswa->kelas }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="angkatan" class="col-sm-2 col-form-label">Tahun Angkatan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='angkatan' id="angkatan" value="{{ $mahasiswa->angkatan }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                </div>
            </div>
        </form>
        <div><a href="{{ url("dashboard") }}">Back</a></div>
    </main>
</body>
<!-- AKHIR FORM -->