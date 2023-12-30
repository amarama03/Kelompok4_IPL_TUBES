<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $id_menu = '';
    $nama ='';
    $harga =''; 
    $deskripsi ='';

    if(isset($_GET['ubah'])){
      $id_menu = $_GET['ubah'];
      
      $query = "SELECT * FROM menu WHERE id_menu= '$id_menu';";
      $sql = mysqli_query($conn, $query);

      $result = mysqli_fetch_assoc($sql);

      $nama = $result['nama'];
      $harga = $result['harga']; 
      $deskripsi = $result['deskripsi'];  

      // var_dump($result);

      // die();
    }      
   ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Kopi Rehat.</title>
  </head>
  <body>
    <!-- navbar mulai -->
    <nav class="navbar navbar-light bg-light mb-4">
      <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="#">Masukan Data</a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- menu  mulai-->
    <div class="container">
      <form method="POST" action="proses.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id_menu?>" name="id_menu">
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Menu</label>
        <div class="col-sm-10">
          <input required
            type="text" name="nama"
            class="form-control"
            id="nama"
            placeholder="ex ; masukan nama" value="<?php echo$nama; ?>"
          />
        </div>
      </div>
      <div class="mb-3 row">
          <label for="harga" class="col-sm-2 col-form-label">Harga Menu</label>
    <div class="col-sm-10">
        <input required
            type="number" name="harga" value="<?php echo $harga; ?>"
            class="form-control"
            id="harga"
            placeholder="Rp; masukkan Harga"/>
      </div>
    </div>
      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Masukan Gambar</label>
        <div class="col-sm-10">
          <input <?php if(!isset($_GET['ubah'])){echo"required";}?> class="form-control" type="file" name="foto" id="foto" accept="image/* " />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="deskripsi" class="col-sm-2 col-form-label"
          >Masukan Deskripsi</label
        >
        <div class="col-sm-10">
          <textarea required
            class="form-control" name="deskripsi"
            id="exampleFormControlTextarea1"
            rows="3"><?php echo$deskripsi;?>
          </textarea>
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <div class="col">
          <?php
            if(isset($_GET['ubah'])){
          ?>
              <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Data
              </button>
          <?php
            } else{
          ?>
              <button type="submit" name="aksi"value="add" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan
               </button>
          <?php
            } 
          ?>
          <a href="input_menu.php" type="button" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i> Batal
          </a>
        </div>
      </div>
      </form>
    </div>
    <!-- menu end -->
  </body>
</html>
