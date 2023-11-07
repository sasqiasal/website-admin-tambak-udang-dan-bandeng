<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h3>Tambah Bibit</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="bibit.php"><i class="fas fa-share fa-flip-horizontal"></i><span
                class="ml-2">Kembali</span></a>
    </div>
    <form>
        <div class="form-group">
            <label for="jenisbibit">Jenis Bibit</label>
            <input type="text" class="form-control" id="hargajual">
        </div>
        <div class="form-group">
            <label for="datebibit" class="form-label">Tanggal Beli bibit</label>
            <input type="date" class="form-control" id="datebibit" name="date">
        </div>  
        <div class="form-group">
            <label for="jumlahbibit">Jumlah Bibit</label>
            <input type="text" class="form-control" id="jumlahbibit">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php
  include('layout/penutup.php');
?>