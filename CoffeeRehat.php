<?php
    include 'koneksi.php';
    $query =  "SELECT * FROM menu";
    $sql = mysqli_query($conn, $query);
    $no = 0;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <!-- bootstrap -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Rehat</title>

    <!-- fonts dari google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather icon  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- stylecss -->
    <link rel="stylesheet"  type="text/css" href="stylecoffee.css"/>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar ">
      <a href="#" class="Navbar-logo">Kopi <span>Rehat</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="AboutUs.html">About Us</a>
        <a href="AboutUs.html">Contact Us</a>
        <a href="logout.php">Logout</a>
      </div>

      <div class="Navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="iconkeranjang.html" id="iconkeranjang"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- code Search  mulai -->
      <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>

      <!-- code Search  berakhir-->
    </nav>

    <!-- Navbar end -->

    <!-- Halaman pertama mulai  -->

    <section class="hero" id="home">
      <main class="content">
        <h1>Rehat dulu <span>Yuk</span></h1>
        <p k>Don`t FORGET FOLLOW ME</p>
        <a href="#menu" class="cta">Beli Sekarang </a>
      </main>
    </section>

    <!-- Halaman pertama selesai  -->

    <!-- halaman menu  mulai-->
    <div class="table-responsive" id="menu">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Foto Menu</th>
                    <th><center>Deskripsi</center></th>
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
                        ?>" style="width: 80px;"></td>
                    <td><?php
                            echo $result['deskripsi'];
                        ?></td>
                    <td>
                    <a href="iconkeranjang.html" id="iconkeranjang"><i data-feather="shopping-cart" color=white></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!-- halaman menu  berakhir -->

    <!-- bagian Contact Us mulai  -->
    <footer  class="footer">
      <div class="sosial">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="x"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="youtube"></i></a>
      </div>
      <div class="link">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="AboutUs.html">About Us</a>
        <a href="login_form.php">Login</a>
        <a href="#ContactUs">Contact Us</a>
      </div>
      <div class="creadit">
        <p>Created by <a href="">Kelompok 4</a>|&copy 2023.</p>
      </div>
    </footer>
    <!-- bagian Contact Us Berakhir  -->
    <!-- Feather icon  -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript di home awal -->
    <script src="js/scripthome.js" ;></script>
  </body>
</html>
