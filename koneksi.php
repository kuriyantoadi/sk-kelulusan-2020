<?php
$koneksi = mysqli_connect("localhost", "root", "", "sk-kelulusan-2020");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
