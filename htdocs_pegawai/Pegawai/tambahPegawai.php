<?php

    include "koneksi.php";
    $nama      = $_POST['namaPegawai'];
    $posisi    = $_POST['posisiPegawai'];
    $gaji      = $_POST['gajiPegawai'];

    $connect->query("INSERT INTO tb_pegawai (nama, posisi, gaji)
        VALUES ('".$nama."','".$posisi."','".$gaji."')");

?>