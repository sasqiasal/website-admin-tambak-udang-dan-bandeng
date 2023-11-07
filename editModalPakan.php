<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h3>Edit Data Modal Pakan</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="modalPakan.php"><i
                class="fas fa-share fa-flip-horizontal"></i><span class="ml-2">Kembali</span></a>
    </div>
    <form>
        <div class="form-group">
            <label for="jumlahkg">Jumlah kg</label>
            <input type="text" class="form-control" id="jumlahkg">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga">
        </div>
        <div class="form-group">
            <label for="selectkolam">Pilih Kolam</label>
            <select class="form-control" id="selectkolam">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
<?php
  include('layout/penutup.php');
?>