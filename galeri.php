<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');
  require_once "koneksi.php";
  $sql = "SELECT * FROM galeri";
  $all_product = $conn->query($sql);
?>
<div class="mr-5 ml-5">
    <h1>Galeri</h1>
    <div class="mb-2">
        <a class="btn btn-primary" href="tambahGaleri.php"><i class="fa fa-fw fa-plus"></i>Tambah</a>
    </div>
    <table class=" table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($all_product)){
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["keterangan"]; ?></td>
                    <td><img src="<?php echo $row["foto"]; ?>" alt="unsplash.com" height="50px"/></td>
                    <td><a href="editGaleri.php?id=<?php echo $row["id"] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                    <a href="hapusGaleri.php?id=<?php echo $row["id"] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fas fa-fw fa-trash-alt"></i></a></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
<?php
  include('layout/penutup.php');
?>