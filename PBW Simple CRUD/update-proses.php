<?php
include ('database.php');
	if( !empty($_POST['simpan'])){
		
		$kode_pasien = $_POST['kode_pasien'];
        $nama_pasien = $_POST['nama_pasien'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $umur = $_POST['umur'];
        $telp = $_POST['telp'];

		$sql = mysql_query("UPDATE registrasi set kode_pasien='$kode_pasien' nama_pasien='$nama_pasien' , alamat='$alamat' , jk='$jk' , umur='$umur' , telp='$telp' WHERE no= ?");
		if ($sql) {
			echo ' Data berhasil di UPDATE! ';
			header("Location: index.php");
		}else{
			echo ' Terjadi Error ';
		}
	}
?>
