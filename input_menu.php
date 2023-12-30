<?php
    include 'koneksi.php';
    
    $query =  "SELECT * FROM menu";
    $sql = mysqli_query($conn, $query);
    $no = 0;

    
    //var_dump($result);
    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard_style.css" />
    
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"

  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-coffee"></i>
        <span class="text">Koret.</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="dashboard_index.html">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="input_menu.php">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">Rehat Store</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-message-dots"></i>
            <span class="text">Chat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-group"></i>
            <span class="text">Teams</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="logout.php" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="btn">Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="profile">
          <img src="img/people.png" />
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Rehat Store </h1>
            <ul class="breadcrumb">
              <li>
                <a href="dashboard_index.html">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="input_menu.php">Menu</a>
              </li>
            </ul>
          </div>
          <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a>
        </div>

      <!-- MAIN -->
      <div class="container-fluid">
    <h1> Tambah Menu</h1> 
     
        <figure>
            <blockquote class="blockquote">
                 <p>Menambahkan Data Menu diKopi Rehat.</p>
            </blockquote>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i>Tambah Data</a>
    </div>
            <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th><center>no</center></th>
                    <th>Nama </th>
                    <th>Harga  </th>
                    <th>Foto Menu </th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             <tbody>
                <?php
                    while ($result = mysqli_fetch_assoc($sql)){
                        
                    
                ?>
                <tr>
                    <td><center>
                        <?php
                            echo ++$no;
                        ?>.
                        </center></td>
                    <td><?php
                            echo $result['nama'];
                        ?></td>
                    <td><?php
                            echo $result['harga'];
                        ?></td>
                    <td><img src="img/<?php
                            echo $result['foto'];
                        ?>" style="width: 100px;"></td>
                    <td><?php
                            echo $result['deskripsi'];
                        ?> </td>
                    <td>
                        <a href="kelola.php?ubah=<?php
                            echo $result['id_menu'];
                        ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i>Edit
                    </a>
                        <a href="proses.php?hapus=<?php
                            echo $result['id_menu'];
                        ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data??')"><i class="fa fa-trash"></i>Hapus
                    </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
    <!-- CONTENT -->
    <script src="dashboard_script.js"></script>
  </body>
</html>
