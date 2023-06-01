<?php
session_start();

unset($_SESSION['mail']);
unset($_SESSION['name']);

header("Location:login.php");


?>