<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

    <style type="text/css">
        /*design table 1*/
        .table1 {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }

        .table1, th, td {
            border: 1px solid #999;
            padding: 8px 20px;
        }

        .tombol_login{
            margin-top: 20px;
            background: #46de4b;
            color: white;
            font-size: 11pt;
            width: 20%;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }
    </style>
<body>
    <center>
    <h1>Data Pengguna</h1>
    <?php

    echo "<table class='table1'>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Action</th>
        </tr>";

        

            include "koneksi.php";
                $sql = "select * from users order by id_user";
                $tampil = mysqli_query($con, $sql);
                if (mysqli_num_rows($tampil) > 0) {
                    $no = 1;
                    while ($r = mysqli_fetch_array($tampil)) {
                        echo "<tr><td>$no</td><td>$r[id_user]</td>
                        <td>$r[nama_lengkap]</td>
                        <td>$r[email]</td>
                        <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a> <a href='edit_user.php?id=$r[id_user]'>Edit</a></td>
                        </tr>";
                        $no++;
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
            }
            mysqli_close($con);

        ?>
        <br>
        <br>
        <a href="user_login.php" class="tombol_login">Kehalaman Login</a> 
    </center>




</body>
</html>
