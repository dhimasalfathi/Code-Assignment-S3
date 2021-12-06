<?php
$namahost = "localhost";
$username = "root";
$password = "gondes";
$database = "praktikumweb";

$con = mysqli_connect($namahost, $username, $password,) or die("Failed");
mysqli_select_db($con, "$database") or die("Database not exist");
