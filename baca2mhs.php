<?php
include('crudmhs.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php
    $sql = "select * from mahasiswa";
    $data = bacamhs($sql);
    if ($data == null) {
        echo "Data kosong";
    } else {
    }
    ?>
    <table border="1">
        <th>NIM</th>
        <th>Nama</th>

        <th>Jenis Kelamin</th>

        <th>Jurusan</th>


        <?php
        foreach ($data as $baris)
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
        ?>
        <a href="tambahmhs.php">
            <button>Tambah data</button></a>
</body>

</html>