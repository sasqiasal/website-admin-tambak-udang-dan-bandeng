<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h3>Edit Data Kolam</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="dataKolam.php"><i class="fas fa-share fa-flip-horizontal"></i><span
                class="ml-2">Kembali</span></a>
    </div>
    <form>
        <div class="form-group">
            <label for="kolam">Kolam</label>
            <input type="text" class="form-control" id="kolam">
        </div>
        <div class="form-group">
            <label for="selectbibit">Pilih Bibit</label>
            <select class="form-control" id="selectbibit">
                <option>Bandeng</option>
                <option>Udang</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ukuran">Ukuran</label>
            <input type="text" class="form-control" id="ukuran">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
<?php
  include('layout/penutup.php');
?>