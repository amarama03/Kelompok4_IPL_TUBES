<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
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

    <!-- Alpine JS-->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar" x-data>
      <a href="#" class="Navbar-logo">Kopi <span>Rehat</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#menu">Menu</a>
        <a href="#" onclick="openCustomModal()">Transaksi</a>
        <a href="AboutUs.html">About Us</a>
        <a href="#ContactUs">Contact Us</a>
        <a href="logout.php">Logout</a>
      </div>

      <div class="Navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button">
        <i data-feather="shopping-cart"></i>
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
      </a>
        <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- code Search  mulai -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="Cari Disini ..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>

      <!-- code Search  berakhir-->

     <!-- Shopping Cart start -->
    <div class="shopping-cart" x-data>
      <template x-for="(item, index) in $store.cart.items" x-keys="index">
      <div class="cart-item">
        <img :src="`img/${item.img}`" :alt="item.name"  >
        <div class="item-detail">
          <h3 x-text="item.name"></h3>
          <div class="item-price"> 
            <span style="color:black" x-text="rupiah(item.price)"></span> &times;
            <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
            <span style="color:black" x-text="item.quantity"></span>
            <button id="add" @click="$store.cart.add(item)">&plus;</button> &equals;
            <span style="color:black" x-text="rupiah(item.total)"></span>
          </div>
        </div>
      </div>
    </template>
    <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem; color:black">Cart is empty</h4>
    <h4 style="color:black" x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)">
    </span></h4>

    <div class="form-container" x-show="$store.cart.items.length">
      <form action="src/CreateTransactions.php" method="POST">
        <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
        <input type="hidden" name="total" x-model="$store.cart.total">

        <h5>Customer Detail</h5>

        <label for="name">
          <span style="color:black">Name</span>
          <input type="text" name="name" id="name">
        </label>

        <label for="email">
          <span style="color:black">Email</span>
          <input type="email" name="email" id="email" autocomplete="off">
        </label>

        <label for="phone">
          <span style="color:black">Phone</span>
          <input type="text" name="phone" id="phone" autocomplete="off">
        </label>

        <button class="checkout-button" type="submit" 
        value="checkout">Checkout</button>
      </form>
    </div>
    </div>

    <!-- Shopping Cart end -->

    </nav>
    <!-- Navbar end -->

    <!-- Halaman pertama mulai  -->

    <section class="hero" id="home">
      <main class="content">
        <h1>Rehat dulu <span>Yuk</span></h1>
        <p>Don`t FORGET FOLLOW ME</p>
        <a href="#" class="cta">Beli Sekarang </a>
      </main>
    </section>

    <!-- Halaman pertama selesai  -->


    <div id="customModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCustomModal()">&times;</span>
            <div id="modalContent"></div>
        </div>
    </div>

    <!-- Products Section start -->
    <section class="menu" id="menu" x-data="products">
    <h2><span>Menu</span> Kami</h2>
      <div class="row" style="margin: 10px; padding: 10px">
        <template x-for="(item, index) in items" x-key="index">
          <div class="product-card">
          <div class="product-icons">
            <a href="#" @click.prevent="$store.cart.add(item)">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <use href="img/feather-sprite.svg#shopping-cart" />
            </svg>
            </a>
            <a href="#" class="item-detail-button">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <use href="img/feather-sprite.svg#eye" />
            </svg>
            </a>
          </div>
          <div class="product-image">
            <img :src="`img/${item.img}`" style="width: 250px; height: 250px" :alt="item.name">
          </div>
          <div class="product-content">
            <h3 x-text="item.name"></h3>
            <div class="product-stars">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <use href="img/feather-sprite.svg#star" />
            </svg>
            </div>
            <div class="product-price"><span x-text="rupiah(item.price)"></span></div>
          </div>
          </div>
        </template>
      </div>
    </section>
    <!-- Products Section end -->

    <!-- bagian Contact Us mulai  -->
    <footer id="ContactUs" class="footer">
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
    <script src="js/app.js" ;></script>
  </body>
</html>


