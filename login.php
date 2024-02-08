<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 3</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if (array_key_exists('error', $_GET)) {
        echo "<p style='color: red'>Username Password Salh</p>";
    }
    ?>
    <form action="prosesloginUser.php" method="post">
        <div class="kotak_login">
            <p class="tulisan_login">Silahkan login</p>
            <br>


            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password ..">

            <input type="submit" class="tombol_login" value="ok">

            <br />
            <br />

    </form>
</body>

</html>