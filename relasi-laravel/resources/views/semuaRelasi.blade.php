<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Semua Relasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="text-center">
            <h1>Daftar Semua Relasi</h1>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class="table-info">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Hobi</th>
                    <th>Wali</th>
                    <th>Dosen Wali</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semuaRelasi as $relasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $relasi->nama }}</td>
                        <td>{{ $relasi->nim }}</td>
                        <td>
                            <ul>
                                @foreach ($relasi->hobi as $hobi)
                                    <li>{{ $hobi->hobi }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $relasi->wali->nama }}</td>
                        <td>{{ $relasi->dosen->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>