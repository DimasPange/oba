<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca</title>
</head>

<body>
    <?php
    session_start();
    echo 'user:' . $_SESSION['username'];
    ?>
    <h2>Daftar Mahsiswa</h2>
    <table border="1">
        <th>NIM</th>
        <th>Nama</th>

        <th>Jenis Kelamin</th>

        <th>Jurusan</th>
        <?php

        $hostname = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'session';

        //koneb
        $koneksi = mysqli_connect($hostname, $user, $pass, $db);

        //cek

        if (!$koneksi) {
            die("gagal:" . mysqli_connect_error());
        }


        // $koneksi = koneksiAkademik();
        $sql = "select * from mahasiswa";
        $hasil = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($hasil) > 0) {
            while ($baris = mysqli_fetch_assoc($hasil)) {
                $nim = $baris['nim'];
                $nama = $baris['nama'];
                $kelamin = $baris['kelamin'];
                $jurusan = $baris['jurusan'];
                echo "
            <tr>
            <td>$nim</td>
            <td>$nama</td>
            <td>$kelamin</td>
            <td>$jurusan</td>

            </tr>
            ";
            }
        } else {
            echo "Tidak ada Record";
        }

        ?>
    </table>
    <br>
    <a href="logout.php">Metuoo</a>
</body>

</html>