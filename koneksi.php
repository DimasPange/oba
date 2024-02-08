<?php
function koneksiAkademik()
{
    $hostname = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'session';

    $con = mysqli_connect($hostname, $user, $pass, $db);
    if (!$con) {
        die("Gagal" . mysqli_connect_error());
    }
    return $con;
}