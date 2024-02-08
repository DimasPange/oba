<?php
require_once('koneksi.php');


function bacamhs($sql)
{
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($hasil) == 0) {
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $data[$i]['nim'] = $baris['nim'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['kelamin'] = $baris['kelamin'];
        $data[$i]['jurusan'] = $baris['jurusan'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
