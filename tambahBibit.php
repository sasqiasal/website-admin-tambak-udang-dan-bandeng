<?php
include('layout/sidebar.php');
include('layout/navbar.php');
require_once "koneksi.php";

if(isset($_POST["Simpan"])){
    $jenis_bibit = $_POST['jenisbibit'];
    $tgl_bibit = $_POST['datebibit'];
    $jumlah_bibit = $_POST['jumlahbibit'];
    $datas = mysqli_query($conn, "INSERT INTO bibit (jenis_bibit, tgl_bibit, jumlah_bibit) VALUES ('$jenis_bibit', '$tgl_bibit', '$jumlah_bibit')") or die(mysqli_error($koneksi));
    echo "<script>alert('data berhasil disimpan.');window.location='bibit.php';</script>";
}
?>

<div class="mr-5 ml-5">
    <h3>Tambah Bibit</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="bibit.php"><i class="fas fa-share fa-flip-horizontal"></i><span
                class="ml-2">Kembali</span></a>
    </div>
    <form method="post" action="">
        <div class="form-group">
            <label for="jenisbibit">Jenis Bibit</label>
            <input type="text" class="form-control" id="jenisbibit" name="jenisbibit">
        </div>
        <div class="form-group">
            <label for="datebibit" class="form-label">Tanggal Beli bibit</label>
            <input type="date" class="form-control" id="datebibit" name="datebibit">
        </div>
        <div class="form-group">
            <label for="jumlahbibit">Jumlah Bibit</label>
            <input type="text" class="form-control" id="jumlahbibit" name="jumlahbibit">
        </div>
        <button type="submit" class="btn btn-primary" name="Simpan"
            onclick="return confirm('Apakah anda yakin ingin mengubah data ini ?')">Simpan</button>
    </form>
</div>

<?php
include('layout/penutup.php');
?>