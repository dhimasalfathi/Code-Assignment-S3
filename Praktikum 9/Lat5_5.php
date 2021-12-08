<?php

include "koneksi2.php";

$sql = ('INSERT INTO `user` (`username`, `password`, `level`) VALUES (:userr, :pass, :lev)');

$user = "Adam";
$pass = "ahay";
$lev = "1";

$statement = $pdo->prepare($sql);

$statement->bindValue(':userr', "Mada", PDO::PARAM_STR);
$statement->bindValue(':pass', "ahayy", PDO::PARAM_STR);
$statement->bindValue(':lev', "1", PDO::PARAM_INT);

$inserted = $statement->execute();

if ($inserted) {
    echo 'Data Pertama berhasil ditambahkan!<br>';
}

$statement->bindValue(':userr', "Hendra", PDO::PARAM_STR);
$statement->bindValue(':pass', "yuhuu", PDO::PARAM_STR);
$statement->bindValue(':lev', "2", PDO::PARAM_INT);

$inserted = $statement->execute();

if ($inserted) {
    echo 'Data Kedua berhasil ditambahkan!<br>';
}
