<?php
if(isset($_POST['tomboltambah'])){
	
	include('connect.php');
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kdbarang = $_POST['kodebarang'];
	$jmlbeli = $_POST['jumlahbeli'];
	$notlp = $_POST['nomortelepon'];
	$input = mysql_query("INSERT INTO tbl_order VALUES(NULL,'$nama', '$alamat', '$kdbarang', '$jmlbeli', '$notlp')") or die(mysql_error());
	
	if($input){
		echo 'Data berhasil di tambahkan! ';
		echo '<a href="index.html">Kembali</a>';
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="index.html">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';

}
?>