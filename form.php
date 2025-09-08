<center><h5>Form Buku Tamu</h5></center>
<form method="POST" action="skrip_input_tamu.php">
	<center>
	<table>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><input type="number" name="nik"	maxlength="10"><br></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" maxlength="50"><br></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="number" name="no_hp" maxlength="13"><br></td>
	</tr>
	</table>
	</center>
	<center>
		<button type="submit" value="Simpan">Simpan</button>
		<button type="reset" value="Reset">Reset</button>
	</center>
</form>
<br><a href="menampilkan_data.php">lihat data yang telah di input</a>
<?php
	include "validasi.php";
	// Inisialisasi variabel untuk pesan
		$pesan = "lengkapi dulu";
	// Proses form jika tombol submit ditekan
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
    	$nik   = empty($_POST['nik'] == 0)? trim($_POST['nik']):'';
   		$nama  = empty($_POST['nama'] == 0)? trim($_POST['nama']):'';
    	$no_hp = empty($_POST['no_hp'] == 0)? trim($_POST['no_hp']):'';

    // Cek apakah ada yang kosong
    	$validasi= new Validasi();
    	if ($validasi->validasiString($nik) || $validasi->validasiString($nama) || $validasi->validasiString($no_hp)) {
    		// code...
    		$pesan = "Semua field harus diisi!";
    	}
    else 
    {
        $pesan = "Data berhasil disimpan!<br>
                  NIK: $nik<br>
                  Nama: $nama<br>
                  No HP: $no_hp";
    }
}
?>
