<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko kayu</title>

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Meubel<span>SumberRejeki</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#info">Tentang Kami</a>
        <a href="#products">Produk</a>
        <a href="index.php">Exit</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <section class="hero-section" id="home">
      <div class="hero-judul">
        <img src="image/imagelogo.jpg" alt="" />
        <h1>Selamat Datang Di toko <br /><span>meubelSumberRejeki</span></h1>
        <p>Menyediakan berbagai macam perabotan rumah tangga</p>
        <div class="hero-button">
          <a href="#products">Product</a>
        </div>
      </div>
    </section>
    <section class="product" id="products">
      <div class="produk-isi">
        <div class="judul-product">
          <h4>PRODUCT</h4>
        </div>
        <div class="container">
          <div class="card">
            <img src="image/produk1.jpg" alt="Produk 1" />
            <div class="card-content">
              <h2>Kursi Tamu Biasa</h2>
              <p>Rp. 2.300.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>

          <div class="card">
            <img src="image/produk2.jpg" alt="Produk 2" />
            <div class="card-content">
              <h2>Lemari Pintu Tiga</h2>
              <p>Rp. 5.600.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>

          <div class="card">
            <img src="image/produk3.jpg" alt="Produk 3" />
            <div class="card-content">
              <h2>Kitchen Set</h2>
              <p>Rp. 4.500.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
          <div class="card">
            <img src="image/produk4.jpg" alt="Produk 4" />
            <div class="card-content">
              <h2>Kursi Tamu Satu Set+Meja</h2>
              <p>Rp. 5.600.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
          <div class="card">
            <img src="image/produk5.jpg" alt="Produk 5" />
            <div class="card-content">
              <h2>Pintu Ukuran</h2>
              <p>Rp. 35.000.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
          <div class="card">
            <img src="image/produk6.jpg" alt="Produk 6" />
            <div class="card-content">
              <h2>Meja Makan Kursi Satu Set</h2>
              <p>Rp. 2.300.000</p>
              <p><br /></p>
              <div class="button-beli">
                <a
                  href="formpembelian.php"
                  >PESAN DISINI</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info" id="info">
      <div class="isi-info">
        <div class="judul-info">
          <h1>About</h1>
          <div class="contact-info">
            <h2>Contact : 087733406010</h2>
            <div class="lokasi-info">
              <h2>Location</h2>
              <div class="maps">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3961.077409456243!2d109.37683837499611!3d-6.881329993117576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTInNTIuOCJTIDEwOcKwMjInNDUuOSJF!5e0!3m2!1sid!2sid!4v1699369304087!5m2!1sid!2sid"
                  width="600"
                  height="360"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="container-footer">
      <div class="judul-footer">
        <h4>Terima Kasih Sudah Mengunjungi Web Kami</h4>
        <h5>Jan Lupa Di Order</h5>
        <p>@created By Arga</p>
      </div>
    </footer>
    <script src="js/main.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
