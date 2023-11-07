<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h3>Edit Data Keuntungan</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="keuntungan.php"><i
                class="fas fa-share fa-flip-horizontal"></i><span class="ml-2">Kembali</span></a>
    </div>
    <form>
        <div class="form-group">
            <label for="keuntungan">Keuntungan</label>
            <input type="text" class="form-control" id="keuntungan">
        </div>

        <div class="form-group">
            <label for="selectmodalwal">Modal Awal</label>
            <select class="form-control" id="selectmodalwal">
                <option>6500000</option>
                <option>700000</option>
            </select>
        </div>
        <div class="form-group">
            <label for="selectmodalpakan">Modal Pakan</label>
            <select class="form-control" id="selectmodalpakan">
                <option>540000</option>
                <option>870000</option>
            </select>
        </div>
        <div class="form-group">
            <label for="selectmodalwal">Harga Jual</label>
            <select class="form-control" id="selectmodalwal">
                <option>15000000</option>
                <option>34000000</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
<?php
  include('layout/penutup.php');
?>