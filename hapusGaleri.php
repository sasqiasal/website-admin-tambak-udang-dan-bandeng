<?php				
	include 'koneksi.php'; 
	$id = $_GET['id']; 

	$datas = mysqli_query($conn, "delete from galeri where id ='$id'") or die(mysqli_error($conn));

	echo "<script>alert('data berhasil dihapus.');window.location='galeri.php';</script>";
?>