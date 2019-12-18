<?php

    $connect = new mysqli("localhost", "root" ,"", "db_pegawai");
    if(!$connect)
    {
        echo "Koneksi Gagal";
        exit();
    }

?>