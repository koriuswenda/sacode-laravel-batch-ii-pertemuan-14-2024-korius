<?php

$host = "localhost";
$username = "root";
$password = "  ";
$database = "db_sekolah";


$sconn = mysqli_connect($host, $username, $password, $db);

mysqli_select_db($sconn, $db);