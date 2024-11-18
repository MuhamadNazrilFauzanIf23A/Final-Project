<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zahra</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link href="style.css" rel="stylesheet" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="logo.jpg" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="logo.jpg" alt="Logo" class="logo" />
        </a>
        <a class="navbar-brand" href="#">Sewa Mobil</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Login
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="admin-login.php">Login</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Halaman -->
    <div style="height: 1300px">
      <div class="hero-section text-center py-5">
        <h1>Aplikasi untuk Sewa Mobil</h1>
        <p style="font-size: 20px">
          Sewa Mobil di Karawang? Sewa Mobil di Purwakarta? Sewa Mobil di 10+
          kota lainnya? Cari di sini
        </p>
      </div>
      <section class="container my-4 py-4">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2>
              Cari rental mobil terdekat dengan mudah, disinilah tempatnya.
            </h2>
            <p>
              Pengguna sewa mobil di Zahra store disebut "Guest", di mana Guest dapat
              melakukan pencarian rental mobil terdekat yang tersedia di sekitar
              tempat tinggal Guest...
            </p>
          </div>
          <div class="col-md-6">
            <img src="foo.jpg" alt="Sewa Mobil" class="img-fluid" />
          </div>
        </div>
      </section>

      <div class="container my-5">
        <h2 class="text-center mb-4">Jenis Layanan</h2>
        <div class="row justify-content-center">
          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="Fourr.jpg" class="card-img-top" alt="Mobil 1">
              <div class="card-body">
                <h5 class="card-title">Toyota</h5>
                <p class="card-text">Masih dalam pengembangan</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-primary w-100">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="Fourr.jpg" class="card-img-top" alt="Mobil 2">
              <div class="card-body">
                <h5 class="card-title">Fortuner</h5>
                <p class="card-text">Masih dalam pengembangan</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-primary w-100">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="Fourr.jpg" class="card-img-top" alt="Mobil 3">
              <div class="card-body">
                <h5 class="card-title">alphard</h5>
                <p class="card-text">Masih dalam pengembangan</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-primary w-100">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="Fourr.jpg" class="card-img-top" alt="Mobil 4">
              <div class="card-body">
                <h5 class="card-title">bmw</h5>
                <p class="card-text">Masih dalam pengembangan</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-outline-primary w-100">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="text-center py-3 mt-5 bg-dark" style="color: rgb(255, 255, 255);">
        <p>&copy; 2024 Zahra. All Rights Reserved.</p>
        <p>Contact us: <a href="mailto:MobilSewa@Zahra.com">nazrilfauzan</a> | Phone: +62 81287819067</p>
      </footer>
  </body>
</html>
