<?php
//koneksi ke database
	$connect=mysqli_connect("localhost","root","","latihan");

//ambil variabel yang dikirim dari form
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$no_hp=$_POST['no_hp'];
		$input="INSERT INTO tamu(nik,nama,no_hp)
		values('$nik','$nama','$no_hp')";
		$hasil=mysqli_query($connect,$input);

	//apabila query untuk menginput data benar
		if($hasil){
			echo "input data tamu berhasil";
		}
		else{
			echo "input data tamu gagal";
		}
?>
<br><a href="buku_tamu.php">kembali ke form</a>
<br><a href="menampilkan_data.php">Lihat Data</a>
