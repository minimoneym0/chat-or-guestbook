<?php

$host = "localhost";
$user = "********";
$pass = "********";
$db_name = "********";

$conn = mysqli_connect($host, $user, $pass, $db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($conn, "SET NAMES 'utf8'");

