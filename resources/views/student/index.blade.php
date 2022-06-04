<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Index</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="/student/create">Tambah Siswa Baru</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->umur }}</td>
                    <td>{{ $student->kelas }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>
                        <form action={{ '/student/' . $student->id }} method="post">
                            @csrf
                            @method('DELETE')
                            <button>HAPUS</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
