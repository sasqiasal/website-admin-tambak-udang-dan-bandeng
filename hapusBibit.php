<?php
require_once "koneksi.php";
$id_bibit = $_GET['id'];
			$datas = mysqli_query($conn, "delete from bibit where id_bibit ='$id_bibit'") or die(mysqli_error($conn));
			echo "<script>alert('data berhasil dihapus.');window.location='bibit.php';</script>";
?>