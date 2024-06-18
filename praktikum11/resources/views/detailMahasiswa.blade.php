<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <h1 class="text-center">Data Lengkap Mahasiswa {{ $mahasiswa->nama }}</h1>
        <table class="table">
            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $mahasiswa->alamat }}</td>
            </tr>
            <tr>
                <th>Asal Sekolah</th>
                <td>{{ $mahasiswa->asal_sekolah }}</td>
            </tr>
          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

