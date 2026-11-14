<?php
    $host = "db";
    $port = "3306";
    $username = "root";
    $password = "secretPassword";
    $db_name = "db_berita";

    try {

        $conn = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Koneksi berhasil!";

    } catch (PDOException $e) {
        echo "Koneksi Gagal : " . $e->getMessage();
    }
?>