<?php
include "koneksi.php";
mysqli_query($conn, "INSERT INTO siswa (nama,kelas) VALUES ('Nisa','MI 5c')");
echo "Data berhasil ditambahkan";
?>