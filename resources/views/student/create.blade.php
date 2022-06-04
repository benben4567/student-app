<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Student</title>
</head>

<body>
    <h1>Input Data Baru</h1>
    <br>
    <form action="/student" method="post">
        @csrf
        <label for="">Nomor Induk Siswa</label>
        <input type="text" name="nis">
        </br>
        <label for="">Nama</label>
        <input type="text" name="nama">
        </br>
        <label for="">Umur</label>
        <input type="text" name="umur">
        </br>
        <label for="">Kelas</label>
        <select name="kelas" id="kelas">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        </br>
        <label for="">Alamat</label>
        <textarea name="alamat" id="alamat" rows="4"></textarea>
        </br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
