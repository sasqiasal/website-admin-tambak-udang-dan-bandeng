<?php
include('layout/sidebar.php');
include('layout/navbar.php');
require_once "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM bibit WHERE id_bibit= '$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST["edit"])){
    $id = $_POST['id_bibit'];
    $jenis_bibit = $_POST['jenisbibit'];
    $tgl_bibit = $_POST['datebibit'];
    $jumlah_bibit = $_POST['jumlahbibit'];

    $updateQuery = "UPDATE bibit SET jenis_bibit='$jenis_bibit', tgl_bibit='$tgl_bibit', jumlah_bibit='$jumlah_bibit' WHERE id_bibit='$id'";
    $updateResult = mysqli_query($conn, $updateQuery) or die(mysqli_error($conn));

    if ($updateResult) {
        echo "<script>alert('Data berhasil di Ubah.');window.location='bibit.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>

<div class="mr-5 ml-5">
    <h3>Edit Bibit</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="bibit.php"><i class="fas fa-share fa-flip-horizontal"></i><span
                class="ml-2">Kembali</span></a>
    </div>
    <form method="post" action="">
        <input type="hidden" name="id_bibit" required="" value="<?= $row['id_bibit']; ?>">
        <div class="form-group">
            <label for="jenisbibit">Jenis Bibit</label>
            <input type="text" class="form-control" id="jenisbibit" name="jenisbibit"
                value="<?= $row['jenis_bibit']; ?>">
        </div>
        <div class="form-group">
            <label for="datebibit" class="form-label">Tanggal Beli bibit</label>
            <input type="date" class="form-control" id="datebibit" name="datebibit" value="<?= $row['tgl_bibit']; ?>">
        </div>
        <div class="form-group">
            <label for="jumlahbibit">Jumlah Bibit</label>
            <input type="text" class="form-control" id="jumlahbibit" name="jumlahbibit"
                value="<?= $row['jumlah_bibit']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="edit"
            onclick="return confirm('Apakah anda yakin ingin mengubah data ini ?')">Edit</button>
    </form>
</div>

<?php
include('layout/penutup.php');
?>