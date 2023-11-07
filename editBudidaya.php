<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h3>Edit Data Budidaya</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="budidaya.php"><i class="fas fa-share fa-flip-horizontal"></i><span
                class="ml-2">Kembali</span></a>
    </div>
    <form>
        <div class="form-group">
            <label for="date" class="form-label">Tanggal Panen</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="jumlahpanen">Jumlah Panen</label>
            <input type="text" class="form-control" id="jumlahpanen">
        </div>

        <div class="form-group">
            <label for="selectbibit">Pilih Bibit</label>
            <select class="form-control" id="selectbibit">
                <option>Bandeng</option>
                <option>Udang</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hargajual">Harga Jual</label>
            <input type="text" class="form-control" id="hargajual">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
<?php
  include('layout/penutup.php');
?>