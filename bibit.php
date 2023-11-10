<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');
  require_once "koneksi.php";
  $sql = "SELECT * FROM bibit";
  $bibit = $conn->query($sql);
?>
<div class="mr-5 ml-5">
    <h1>Data Bibit</h1>
    <div class="mb-2">
        <a class="btn btn-primary" href="tambahBibit.php"><i class="fa fa-fw fa-plus"></i>Tambah</a>
    </div>
    <table class=" table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Bibit</th>
                <th scope="col">Tanggal Beli Bibit</th>
                <th scope="col">Jumlah Bibit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                while($row = mysqli_fetch_assoc($bibit)){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row["jenis_bibit"]; ?></td>
                <td><?php echo $row["tgl_bibit"]; ?></td>
                <td><?php echo $row["jumlah_bibit"]; ?> <span>kg<span></td>
                <td><a href="editBibit.php?id=<?php echo $row["id_bibit"] ?>" class="btn btn-sm btn-warning"><i
                            class="fas fa-fw fa-edit"></i></a>
                    <a href="hapusBibit.php?id=<?php echo $row["id_bibit"] ?>" class="btn btn-sm btn-danger"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i
                            class="fas fa-fw fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</div>
<?php
  include('layout/penutup.php');
?>