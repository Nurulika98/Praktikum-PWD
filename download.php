<?php

$myDir = "c:/xampp/htdocs/Pemrograman Web Dinamis/Praktikum 1/$nama_file";
$dir = opendir($myDir);
echo "Isi folder (Klik link untuk download : <br>";
while ($tmp =readdir($dir)) {
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);

echo "<br><a href='index.php'>Upload</a></br>";