<?php
include "../../../konfigurasi/koneksi.php";

$pilih=$_GET[pilih];
$untukdi=$_GET[untukdi];

if ($pilih=='kelas' AND $untukdi=='tambah'){
	mysql_query("INSERT INTO sh_kelas
				(nama_kelas, deskripsi_kelas)
				VALUES
				(	'$_POST[nama_kelas]',
					'$_POST[deskripsi]')");
					
	header('location:../../kelas.php');
}

elseif ($pilih=='kelas' AND $untukdi=='edit'){
	mysql_query("UPDATE sh_kelas SET 		nama_kelas ='$_POST[nama_kelas]',
											deskripsi_kelas ='$_POST[deskripsi]'
											WHERE id_kelas ='$_POST[id]'");						
	header('location:../../kelas.php');
}

elseif ($pilih=='kelas' AND $untukdi=='hapus'){
	if ($_GET[id]== 1){
	header('location:../../kelas.php');
	}
	else {
	mysql_query("UPDATE sh_siswa SET id_kelas=1 WHERE id_kelas='$_GET[id]'");
	mysql_query("DELETE FROM sh_kelas WHERE id_kelas ='$_GET[id]'");
	header('location:../../kelas.php');
	}
	}

elseif ($pilih=='kelas' AND $untukdi=='hapusbanyak'){
	$cek=$_POST[cek];
	$jumlah=count($cek);
	for($i=0;$i<$jumlah;$i++){
	mysql_query("UPDATE sh_siswa SET id_kelas=1 WHERE id_kelas='$cek[$i]'");
	mysql_query("DELETE FROM sh_kelas WHERE id_kelas='$cek[$i]'");
	}
	header('location:../../kelas.php');
}
?>