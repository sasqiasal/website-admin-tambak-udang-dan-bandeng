<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

?>
<div class="mr-5 ml-5">
    <h1>Data Modal Pakan</h1>
    <div class="mb-2">
        <a class="btn btn-primary" href="tambahModalPakan.php"><i class="fa fa-fw fa-plus"></i>Tambah</a>
    </div>
    <table class=" table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jumlah/kg</th>
                <th scope="col">Harga</th>
                <th scope="col">Nomer Kolam</th>
                <th scope="col">Tanggal Beli</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="editModalPakan.php" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                    <a href="hapusModalPakan.php" class="btn btn-sm btn-danger"><i
                            class="fas fa-fw fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
  include('layout/penutup.php');
?>