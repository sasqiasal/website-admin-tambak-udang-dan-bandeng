<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

  require_once 'koneksi.php';

  if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $keterangan = $_POST["keterangan"];

    $foto = $_POST["current_img"];
    if(isset($_FILES["imgUpload"]["name"]) && $_FILES["imgUpload"]["name"] != ""){
      $upload_dir = "uploads/";
      $foto = $upload_dir.$_FILES["imgUpload"]["name"];
      $upload_file = $upload_dir.basename($_FILES["imgUpload"]["name"]);
      $imgType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
      $check = $_FILES["imgUpload"]["size"];
      $upload_ok = 1;

      if(file_exists($upload_file)){
        echo "<script>alert('The file already exists')</script>";
        $upload_ok = 0;
      } else {
        if($check !== false){
          if($imgType == 'jpg' || $imgType == 'png' || $imgType == 'jpeg' || $imgType == 'gif'){
            $upload_ok = 1;
          } else {
            echo "<script>alert('Please change the image format')</script>";
            $upload_ok = 0;
          }
        } else {
          echo "<script>alert('The photo size is 0, please change the photo')</script>";
          $upload_ok = 0;
        }
      }

      if($upload_ok == 1){
        move_uploaded_file($_FILES["imgUpload"]["tmp_name"], $upload_file);
      }
    }

    $sql = "UPDATE galeri SET foto = '$foto', keterangan = '$keterangan' WHERE id = $id";
    if($conn->query($sql) === TRUE){
      echo "<script>alert('Gallery updated successfully');window.location='galeri.php';</script>";
    }
  }

  if(isset($_GET["id"])){
    $id = $_GET["id"];

    // Mengambil data galeri yang akan diedit dari database
    $sql = "SELECT * FROM galeri WHERE id = $id";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
    } else {
      echo "<script>alert('Gallery not found')</script>";
      header("Location: galeri.php");
    }
  }
?>
<div class="mr-5 ml-5">
    <h3>Edit Galeri</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="galeri.php">
          <i class="fas fa-share fa-flip-horizontal"></i><span class="ml-2">Kembali</span>
        </a>
    </div>
    <form action="editGaleri.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="current_img" value="<?php echo $row['foto']; ?>">
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" required value="<?php echo $row['keterangan']; ?>">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="imgUpload" id="imgUpload" required hidden>
            <button class="form-control" id="choose" onclick="upload();">Pilih Gambar</button>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
    </form>
</div>
<script>
    var keterangan = document.getElementById("keterangan");
    var choose = document.getElementById("choose");
    var uploadImg = document.getElementById("imgUpload");

    function upload(){
        uploadImg.click();
    }

    uploadImg.addEventListener("change", function(){
        var file = this.files[0];
        if(keterangan.value == ""){
            keterangan.value = file.name;
        }
        choose.innerHTML = "You can change (" + file.name + ") picture";
    });
</script>

<?php
  include('layout/penutup.php');
?>