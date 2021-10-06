<?php

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$deskripsi = $_POST['deskripsi'];
$direktori = "c:/xampp/htdocs/Pemrograman Web Dinamis/Praktikum 1/$nama_file";
if(move_uploaded_file($lokasi_file, $direktori)) {
    echo "Nama File : <b>$nama_file</b> berhasil di upload <b>";
    echo "Deskripsi File :<br>$deskripsi";
} else {
    echo "File gagal diupload";
}

echo "<br><a href='download.php'>Download</a>";