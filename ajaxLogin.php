<?php

include("db.php");
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // username and password sent from Form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    //Here converting passsword into MD5 encryption. 
    $password = md5(mysqli_real_escape_string($db, $_POST['password']));
    $result = mysqli_query($db, "SELECT ID FROM usuario WHERE usuario='$username' and contrasena='$password'");
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // If result matched $username and $password, table row  must be 1 row
    if ($count == 1) {
        $_SESSION['login_user'] = $row['ID']; //Storing user session value.
        $_SESSION['usuario'] = $username;
    }
}
