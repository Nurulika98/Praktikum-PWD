<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="row text-center mb-5 mt-5">
		<div class="col-sm">
			<h2>Pencarian Data Mahasiswa</h2>
		</div>
	</div>

	<div class="row" style="padding: 3px; margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
		<div class="col-sm">
			<form action="" method="GET">
			<label>Cari Berdasarkan Nama :</label>
			<input type="text" name="cari">
			<input type="submit" value="Cari" class="btn btn-danger">
			</form>

			<?php
			if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
			}
			?>
		</div>
	</div>


	
	<div class="row" style="padding: 3px; margin-left: 50px; margin-right: 50px;">

		<div class="col-sm">

			<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">ID</th>
				      <th scope="col">Nama Lengkap</th>
				      <th scope="col">Email</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php
						if(isset($_GET['cari'])){
						 $cari = $_GET['cari'];
						 $sql="SELECT * FROM users WHERE nama_lengkap LIKE '%".$cari."%'";
						 $tampil = mysqli_query($con,$sql);
						}else{
						 $sql="SELECT * FROM users";
						 $tampil = mysqli_query($con,$sql);
						 }
						$no = 1;
						while($r = mysqli_fetch_array($tampil)){
					?>
				    <tr>
						 <td><?php echo $no++; ?></td>
						 <td><?php echo $r['id_user']; ?></td>
						 <td><?php echo $r['nama_lengkap']; ?></td>
						 <td><?php echo $r['email']; ?></td>
					</tr>
					<?php } ?>
				  </tbody>
				</table>



              <tbody>
              <tr>
                <?php
                  
                    if (isset($_GET['cari'])) {
                      $cari = $_GET['cari'];
                      $sql = mysqli_query($koneksi,"SELECT * FROM dokumentasi WHERE kd_dokumentasi LIKE '%".$cari."%'");
                    }
                    else{
                      $sql= mysqli_query($koneksi, "SELECT * FROM dokumentasi");
                    }
                    
                      foreach ($sql as $data) {
                        echo "<td>$data[kd_dokumentasi]</td>";
                        echo "<td>$data[judul_dokumentasi]</td>";
                        echo "<td>$data[Keterangan]</td>";
                        echo "<td>$data[tanggal]</td>";
                        echo "<td><img src='isi_data/proses/gambar/<?php echo $data[foto] ?>' width='35' height='40'></td>";
                        echo "<td><center><a href='hapus/index.php?kd_dokumentasi=$data[kd_dokumentasi]' class='badge badge-danger'>Hapus</a> <a href='edit/index.php?kd_dokumentasi=$data[kd_dokumentasi]' class='badge badge-success'>Edit</a></center></td>";
                        echo "</tr>";
                      }
                    ?>
              </tbody>

              <!-- IKM -->
              <tbody>
            <tr>
              <?php
                include "../../koneksi/koneksi.php";
                  if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $sql = mysqli_query($koneksi,"SELECT ikm.kd_ikm as kd_ikm, ikm.nama_usaha as nama_usaha, ikm.nik as nik, penduduk.nama_penduduk as nama_penduduk from ikm join penduduk on penduduk.nik=ikm.nik WHERE ikm.kd_ikm LIKE '%".$cari."%'");
                  }
                  else{
                    $sql= mysqli_query($koneksi, "SELECT ikm.kd_ikm as kd_ikm, ikm.nama_usaha as nama_usaha, ikm.nik as nik, penduduk.nama_penduduk as nama_penduduk from ikm join penduduk on penduduk.nik=ikm.nik");
                  }
                  
                    foreach ($sql as $data) {
                      echo "<td>$data[kd_ikm]</td>";
                      echo "<td>$data[nama_usaha]</td>";
                      echo "<td>$data[nik]</td>";
                      echo "<td>$data[nama_penduduk]</td>";
                      echo "<td><center><a href='hapus/index.php?kd_ikm=$data[kd_ikm]' class='badge badge-danger'>Hapus</a> <a href='edit/index.php?kd_ikm=$data[kd_ikm]' class='badge badge-success'>Edit</a></center></td>";
                      echo "</tr>";
                    }
                  ?>
            </tbody>
              <!--  -->
			
		</div>
		
	</div>

</body>
</html>