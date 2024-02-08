<?php
include('koneksi.php');

function cariUserDariUsername($username)
{
    $koneksi = koneksiAkademik();
    $sql = "select * from user where username='$username'";
    $hasil = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($hasil) > 0) {
        $baris = mysqli_fetch_assoc($hasil);
        $data['username'] = $baris['username'];
        $data['password'] = $baris['password'];
        $data['nama'] = $baris['nama'];

        mysqli_close($koneksi);
        return $data;
    } else {
        mysqli_close($koneksi);
        return null;
    }
}
function otentik($username, $password)
{
    $dataUser = array();
    $pwdmd5 = md5($password);
    $dataUser = cariUserDariUsername($username);

    if ($dataUser != null) {
        if ($pwdmd5 == $dataUser['password']) {
            return true;
        } else {
            return false;
        }
    } else return false;
}