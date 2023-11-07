<?php
  include('layout/sidebar.php');
  include('layout/navbar.php');

  require_once 'koneksi.php';

if(isset($_POST["submit"])){
    echo"<script>alert('submitted')</script>";
    $keterangan = $_POST["keterangan"];

    $upload_dir = "uploads/";
    $foto = $upload_dir.$_FILES["imgUpload"]["name"];
    $upload_dir.$_FILES["imgUpload"]["name"];
    $upload_file = $upload_dir.basename($_FILES["imgUpload"]["name"]);
    $imgType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
    $check = $_FILES["imgUpload"]["size"];
    $upload_ok = 0;

    if(file_exists($upload_file)){
        echo "<script>alert('The file already exist')</script>";
        $upload_ok = 0;
    }else{
        $upload_ok = 1;
        if($check !== false){
            $upload_ok = 1;
            if($imgType == 'jpg' || $imgType == 'png' ||$imgType == 'jpeg' ||$imgType == 'gif'){
                $upload_ok = 1;
            }else{
                echo "<script>alert('please change the image format')</script>";
                $upload_ok = 0;
            }
        }else{
            echo "<script>alert('The photo size is 0 please change the photo')</script>";
            $upload_ok = 0;
        }
    }

    if($upload_ok == 0){
        echo "<script>alert('sorry your file is doesnt uploaded. Please try again')</script>";
    }else{
        if($keterangan != ""){
            move_uploaded_file($_FILES["imgUpload"]["tmp_name"],$upload_file);

            $sql = "INSERT INTO galeri(foto,keterangan) VALUES('$foto','$keterangan')";
            if($conn->query($sql) === TRUE){
                echo "<script>alert('uploaded successfully')</script>";
            }
        }
    }
}
?>
<div class="mr-5 ml-5">
    <h3>Tambah Galeri</h3>
    <div class="mb-5">
        <a class="btn btn-success float-right" href="galeri.php"><i class="fas fa-share fa-flip-horizontal"></i><span
                class="ml-2">Kembali</span></a>
    </div>
    <form action="tambahGaleri.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" required>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="imgUpload" id="imgUpload" required hidden>
            <button class="form-control" id="choose" onclick="upload();">Pilih Gambar</button>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Tambah">
    </form>
   
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
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</div>
<?php
  include('layout/penutup.php');
?>