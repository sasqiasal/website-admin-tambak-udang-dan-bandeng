<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h3>Edit Data Modal Utama</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="modalUtama.php"><i
                class="fas fa-share fa-flip-horizontal"></i><span class="ml-2">Kembali</span></a>
    </div>
    <form>
        <div class="form-group">
            <label for="pilbit">Pilih Bibit</label>
            <select class="form-control" id="pilbit">
                <option>Udang</option>
                <option>Bandeng</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hargabit">Harga Bibit</label>
            <input type="text" class="form-control" id="hargabit">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?php
  include('layout/penutup.php');
?>