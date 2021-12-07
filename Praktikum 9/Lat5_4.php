<?php

echo $_POST["user"];
echo $_POST["pass"];


$namahost = "localhost";
$username = "root";
$password = "gondes";
$database = "praktikumweb";

$con = new mysqli($namahost, $username, $password, $database);

$user = $_POST["user"];
$pass = $_POST["pass"];

$q = mysqli_query($con, "CALL SP_LOGIN('$user', '$pass')");
$row = $q->fetch_object();

if ($row) {
    header("location:Lat5_1.php");
} else {
    echo "Data tidak terdaftar";

    header("location:form_login.html");
}
