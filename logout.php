<?php
session_start();
if(!empty($_SESSION['login_user']))
{
$_SESSION['login_user']='';
session_destroy();
}
header("Location:index.php");