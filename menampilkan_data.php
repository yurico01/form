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
		</tr>";
	while ($data=mysqli_fetch_array ($hasil)){
		echo "<tr>
				<td>$data[nik]</td>
				<td>$data[nama]</td>
				<td>$data[no_hp]</td>
			</tr>";
	}
	echo"</table>";
?>
<br><a href="buku_tamu.php">kembali ke form</a>
<br><a href="menampilkan_data_admin.php">data admin</a>
