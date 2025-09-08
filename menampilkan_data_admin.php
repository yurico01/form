<h3>Data Tamu</h3>
<?php
	$connect=mysqli_connect("localhost","root","","latihan");
// query untuk manampilkan data
	$tampil="SELECT * from tamu ORDER BY id";
	$hasil=mysqli_query($connect,$tampil);
// tampilkan nik nama no_hp di browser
	echo "<table border='1'cellpading='10'>
		<tr bgcolor='blue'>
			<td><b><center>NIK</center></b></td>
			<td><b><center>Nama</center></b></td>
			<td><b><center>No_HP</center></b></td>
			<td><b><center>Aksi</center></b></td>
		</tr>";
	while ($data=mysqli_fetch_array ($hasil)){
		echo "<tr>
				<td>$data[nik]</td>
				<td>$data[nama]</td>
				<td>$data[no_hp]</td>
			<td><a href=\edit_tamu.php?id=$data[id]\">Edit</a>|
				<a href=\"hapus_tamu.php?id=$data[id]\">Hapus</a></td>
			</tr>";
	}
	echo"</table>";
	echo "<p>jumlah tamu: <b>$total</b>orang</p>";
?>
<br><a href="buku_tamu.php">kembali ke form</a>
