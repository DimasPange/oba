<?php
session_start();
include('cruduser.php');
$username = $_POST['username'];
$password = $_POST['password'];

if (otentik($username, $password)) {
    $_SESSION['username'] = $username;
    $dataUser = array();
    $dataUser = cariUserDariUsername($username);

    $_SESSION['namauser'];
    header("Location: bacamhs.php");
} else {
    header("Location: login.php?error");
}
