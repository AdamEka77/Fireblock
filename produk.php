<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Fireblock</title>
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="img/fireblock-logo.png"
      type="image/x-icon"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- External CSS -->
    <link rel="stylesheet" href="produk.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=New+Amsterdam&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Viga&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="img/fireblock-logo.png"
            alt="Logo"
            width="60"
            class="logo"
          />
          <span class="Fireblock">FireBlock </span><br />
          <span class="Fireblock">Official Website </span>
        </a>
        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navrespon" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item px-4">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item px-4">
              <a
                class="nav-link active"
                style="color: orangered; border-bottom: none"
                href="#"
                >Produk</a
              >
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="tentang.php">Tentang Kami</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="hero-produk jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Produk</h1>
        <span
          ><a href="index.html">Home</a> >>
          <span class="produk">Produk</span></span
        >
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Produk -->
    <div class="container">
      <div class="produk1">
        <h1>FIREBLOCK (1 LITER)</h1>
        <img src="img/produk/fireblock-produk1-banner.png" alt="" />
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div
              id="carouselExampleIndicators"
              class="carousel produk-pemasangan cf"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active bg-dark"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  class="bg-dark"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  class="bg-dark"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  class="bg-dark"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="img/produk/photo-galeri-1.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/photo-galeri-2.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/photo-galeri-7.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/photo-galeri-8.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon bg-dark"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon bg-dark"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-6">
            <p class="deskripsi">
              FireBlock tipe FB/P1 adalah alat pemadam api cerdas dan otomatis
              yang dipasang langsung pada titik - titik rawan kebakaran seperti
              : Stop Kontak, KwH Meter, MCB, dll. <br />
              <br />
              FireBlock tipe FB/P1 bisa digunakan dengan 2 cara : <br />
              1. Otomatis Penempatan langsung pada titik - titik rawan kebakaran
              <br />
              2. Manual Penggunaan secara manual dengan melemparkan FireBlock
              langsung ke titik api (tidak dengan menyulut sumbu secara manual)
            </p>
          </div>
        </div>
      </div>

      <div class="row spesifikasi justify-content-center">
        <div class="col-lg-4 text-center spek">
          <h3>Kapasitas</h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            fill="currentColor"
            class="bi bi-diagram-3 bi-panel"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"
            />
          </svg>
          <div class="number" id="kapasitas"><h1>1</h1></div>
          <p>Liter</p>
        </div>
        <div class="col-lg-4 text-center spek">
          <h3>Luas Pemadaman</h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            fill="currentColor"
            class="bi bi-box-fill bi-panel"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"
            />
          </svg>
          <div class="number" id="luaspemadaman"><h1>2</h1></div>
          <p>Meter Persegi</p>
        </div>
        <div class="col-lg-4 text-center spek">
          <h3>Masa Pakai</h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            fill="currentColor"
            class="bi bi-calendar2-week bi-panel"
            viewBox="0 0 16 16"
          >
            <path
              d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"
            />
            <path
              d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"
            />
          </svg>
          <div class="number" id="masapakai"><h1>6</h1></div>
          <p>Tahun</p>
        </div>
        <div class="col-lg-4 text-center spek">
          <h3>Suhu Penyimpanan (Min.)</h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            fill="currentColor"
            class="bi bi-thermometer-low bi-panel"
            viewBox="0 0 16 16"
          >
            <path
              d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V9.5a.5.5 0 0 1 1 0v1.585a1.5 1.5 0 0 1 1 1.415"
            />
            <path
              d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1"
            />
          </svg>
          <div class="number" id="suhumin"><h1>-10</h1></div>
          <p>Celcius</p>
        </div>
        <div class="col-lg-4 text-center spek">
          <h3>Suhu Penyimpanan (Max.)</h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            fill="currentColor"
            class="bi bi-thermometer-high bi-panel"
            viewBox="0 0 16 16"
          >
            <path
              d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585a1.5 1.5 0 0 1 1 1.415"
            />
            <path
              d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1"
            />
          </svg>
          <div class="number" id="suhumax"><h1>55</h1></div>
          <p>Celcius</p>
        </div>
        <div class="col-lg-4 text-center spek">
          <h3>Komposisi</h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="80"
            height="80"
            fill="currentColor"
            class="bi bi-hourglass-bottom bi-panel"
            viewBox="0 0 16 16"
          >
            <path
              d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5m2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2z"
            />
          </svg>
          <div class="number" id="Komposisi"><h1>100</h1></div>
          <p>Water & Fluorocarbon Surfactant</p>
        </div>
      </div>

      <!-- Produk 4 Liter -->

      <div class="produk1">
        <h1>FIREBLOCK (4 LITER)</h1>
        <img src="img/produk/fireblock-produk2-banner.png" alt="" />
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div
              id="carouselExampleIndicators11"
              class="carousel produk-pemasangan cf"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators11"
                  data-bs-slide-to="0"
                  class="active bg-dark"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators11"
                  class="bg-dark"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators11"
                  class="bg-dark"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators11"
                  class="bg-dark"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators11"
                  class="bg-dark"
                  data-bs-slide-to="4"
                  aria-label="Slide 5"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="img/produk/4 liter/photo-galeri-10.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/4 liter/photo-galeri-3.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/4 liter/photo-galeri-4.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/4 liter/photo-galeri-5.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/produk/4 liter/photo-galeri-9.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators11"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon bg-dark"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators11"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon bg-dark"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-6">
            <p class="deskripsi">
              FireBlock tipe FB/P4 adalah alat pemadam api cerdas dan otomatis
              yang dipasang langsung pada titik - titik rawan kebakaran seperti
              : Genset, Tangki Solar, Travo, dll <br />
              <br />
              FireBlock tipe FB/P4 bisa digunakan dengan 2 cara : <br />
              1. Otomatis Penempatan langsung pada titik - titik rawan kebakaran
              <br />
              2. Manual Penggunaan secara manual dengan melemparkan FireBlock
              langsung ke titik api (tidak dengan menyulut sumbu secara manual)
            </p>
          </div>
        </div>

        <div class="row spesifikasi justify-content-center">
          <div class="col-lg-4 text-center spek">
            <h3>Kapasitas</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              fill="currentColor"
              class="bi bi-diagram-3 bi-panel"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"
              />
            </svg>
            <div class="number" id="kapasitas1"><h1>4</h1></div>
            <p>Liter</p>
          </div>
          <div class="col-lg-4 text-center spek">
            <h3>Luas Pemadaman</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              fill="currentColor"
              class="bi bi-box-fill bi-panel"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"
              />
            </svg>
            <h1>7</h1>
            <p>Meter Persegi</p>
          </div>
          <div class="col-lg-4 text-center spek">
            <h3>Masa Pakai</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              fill="currentColor"
              class="bi bi-calendar2-week bi-panel"
              viewBox="0 0 16 16"
            >
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"
              />
              <path
                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"
              />
            </svg>
            <h1>6</h1>
            <p>Tahun</p>
          </div>
          <div class="col-lg-4 text-center spek">
            <h3>Suhu Penyimpanan (Min.)</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              fill="currentColor"
              class="bi bi-thermometer-low bi-panel"
              viewBox="0 0 16 16"
            >
              <path
                d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V9.5a.5.5 0 0 1 1 0v1.585a1.5 1.5 0 0 1 1 1.415"
              />
              <path
                d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1"
              />
            </svg>
            <h1>-10</h1>
            <p>Celcius</p>
          </div>
          <div class="col-lg-4 text-center spek">
            <h3>Suhu Penyimpanan (Max.)</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              fill="currentColor"
              class="bi bi-thermometer-high bi-panel"
              viewBox="0 0 16 16"
            >
              <path
                d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585a1.5 1.5 0 0 1 1 1.415"
              />
              <path
                d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1"
              />
            </svg>
            <h1>55</h1>
            <p>Celcius</p>
          </div>
          <div class="col-lg-4 text-center spek">
            <h3>Komposisi</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80"
              height="80"
              fill="currentColor"
              class="bi bi-hourglass-bottom bi-panel"
              viewBox="0 0 16 16"
            >
              <path
                d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5m2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2z"
              />
            </svg>
            <h1>100</h1>
            <p>Water & Fluorocarbon Surfactant</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Produk -->

    <!-- Keunggulan -->
    <div class="container">
      <div class="keunggulan">
        <h3>Keunggulan <span>Fireblock</span></h3>
        <div class="row justify-content-center">
          <div class="info-panel">
            <div class="row text-center">
              <div class="col-lg-4 mb-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="40"
                  fill="currentColor"
                  class="bi bi-hand-thumbs-up bi-panel"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"
                  />
                </svg>
                <h4>OTOMATIS</h4>
                <p>
                  FireBlock akan bekerja secara Otomatis tanpa bantuan tenaga
                  manusia dan siaga 24 jam / 7 hari
                </p>
              </div>
              <div class="col-lg-4 mb-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="40"
                  fill="currentColor"
                  class="bi bi-clock-history bi-panel"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"
                  />
                  <path
                    d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"
                  />
                  <path
                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"
                  />
                </svg>
                <h4>CEPAT</h4>
                <p>
                  FireBlock akan memadamkan api secara cepat dalam hitungan
                  detik api mati total
                </p>
              </div>
              <div class="col-lg-4 mb-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="40"
                  fill="currentColor"
                  class="bi bi-fire bi-panel"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"
                  />
                </svg>
                <h4>SEMUA KELAS API</h4>
                <p>FireBlock dapat memadamkan di semua Kelas Api</p>
              </div>
              <!--  -->
              <div class="col-lg-4 mb-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="40"
                  fill="currentColor"
                  class="bi bi-recycle bi-panel"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"
                  />
                </svg>
                <h4>TANPA PERAWATAN</h4>
                <p>
                  Tidak perlu isi ulang selama 6 Tahun (FireBlock) & 3 Tahun
                  (Power X)
                </p>
              </div>
              <div class="col-lg-4 mb-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="40"
                  fill="currentColor"
                  class="bi bi-tree-fill bi-panel"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777z"
                  />
                </svg>
                <h4>RAMAH LINGKUNGAN</h4>
                <p>
                  FireBlock memiliki kandungan yang Ramah Lingkungan dan Tidak
                  berbahaya bagi Manusia
                </p>
              </div>
              <div class="col-lg-4 mb-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="40"
                  height="40"
                  fill="currentColor"
                  class="bi bi-bookmark-star bi-panel"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.18.18 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.18.18 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.18.18 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.18.18 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.18.18 0 0 0 .134-.098z"
                  />
                  <path
                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"
                  />
                </svg>
                <h4>SERTIFIKASi</h4>
                <p>
                  FireBlock telah memiliki sertifikasi Nasional dan
                  Internasional
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Keunggulan -->
    <!-- Floating Contact -->
    <a href="https://www.instagram.com/fireblock_indonesia/" target="_blank">
      <button class="btn-floating instagram">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          fill="currentColor"
          class="bi bi-instagram"
          viewBox="0 0 16 16"
        >
          <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
          />
        </svg>
        <span>Fireblock Indonesia </span>
      </button></a
    >
    <a href="https://api.whatsapp.com/send?phone=08119711777" target="_blank">
      <button class="btn-floating whatsapp">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          fill="currentColor"
          class="bi bi-whatsapp"
          viewBox="0 0 16 16"
        >
          <path
            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"
          />
        </svg>
        <span>08119711777</span>
      </button></a
    >
    <!-- Akhir Floating Contact -->

    <!-- Video Demo -->
    <div class="container">
      <div class="video-demo text-center">
        <h3>Video Demo Fireblock</h3>
        <center>
          <iframe
            src="https://www.youtube.com/embed/lzgBbnikV10?si=CqvyGu3fGygRpP1A"
            class="video-1"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </center>
        <div class="row">
          <div class="col-lg-6">
            <iframe
              class="video-2"
              src="https://www.youtube.com/embed/SvJMl_eRHNc?si=JX-xZbx5WBjuVlH0"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-lg-6">
            <iframe
              class="video-3"
              src="https://www.youtube.com/embed/1xBYZblQxig?si=iBP_BVVl6wMB64Dj"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Video Demo -->
    <!-- Video Testimoni -->
    <div class="container">
      <div class="testimoni text-center">
        <h3>Video Testimoni</h3>
        <div class="row">
          <div class="col-lg-4 mb-5">
            <iframe
              class="videot-1"
              src="https://www.youtube.com/embed/4SVpYIkXpcE?si=qkGFuLANcz5JYddf"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-lg-4 mb-5">
            <iframe
              class="videot-1"
              src="https://www.youtube.com/embed/ycUmXuUYAAg?si=ZO1IAMeFyqPpAg2c"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-lg-4 mb-5">
            <iframe
              class="videot-1"
              src="https://www.youtube.com/embed/EQ30_LiHw2c?si=B2l-EL1pjbxaQsS_"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Video Testimoni -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h3>Fireblock Indonesia</h3>
            <img src="img/map-indonesia.png" alt="" />
          </div>
          <div class="col-lg-3">
            <ol>
              <a href="index.html"><li>> Home</li></a>
              <a href="produk.html"><li>> Produk</li></a>
              <a href="tentang.html"><li>> Tentang Kami</li></a>
              <a href="kontak.html"><li>> Kontak</li></a>
            </ol>
          </div>
          <div class="col-lg-3">
            <h3>Alamat</h3>
            <p>
              Jl. H. Samanhudi No. 9 Pasar baru - Jakarta Pusat, DKI Jakarta,
              10710
            </p>
          </div>
          <div class="col-lg-3">
            <h3>Kontak Kami</h3>
            <p>Via Email:</p>
            <p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-envelope"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"
                />
              </svg>
              marketing@fireblock.co.id
            </p>
            <p>Via Phone:</p>
            <p>
              021 - 3483 0111 <br />
              0811 9711 777 <br />
              0813 8181 6386
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer2">
      <div class="container">
        <p>
          Visitor : 109,198 | Official Website © Copyright Fireblock Indonesia,
          All Right Reserved
        </p>
      </div>
    </div>
    <!-- Akhir Footer -->
    <!-- Akhir -->
    <!-- Javascript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- 1 Liter -->
    <script>
      function animateNumber(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("kapasitas").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber);
          }
        }

        requestAnimationFrame(updateNumber);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("kapasitas");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber(1, 1000);
        }
      });
    </script>
    <script>
      function animateNumber1(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber1(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("luaspemadaman").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber1);
          }
        }

        requestAnimationFrame(updateNumber1);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("luaspemadaman");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber1(2, 1000);
        }
      });
    </script>
    <script>
      function animateNumber2(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber2(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("masapakai").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber2);
          }
        }

        requestAnimationFrame(updateNumber2);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("masapakai");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber2(6, 1000);
        }
      });
    </script>
    <script>
      function animateNumber3(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber3(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("suhumin").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber3);
          }
        }

        requestAnimationFrame(updateNumber3);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("suhumin");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber3(-10, 1000);
        }
      });
    </script>
    <script>
      function animateNumber4(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber4(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("suhumax").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber4);
          }
        }

        requestAnimationFrame(updateNumber4);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("suhumax");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber4(55, 1000);
        }
      });
    </script>
    <script>
      function animateNumber5(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber5(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("Komposisi").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber5);
          }
        }

        requestAnimationFrame(updateNumber5);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("Komposisi");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber5(100, 1000);
        }
      });
    </script>

    <!-- 4 Liter -->
    <script>
      function animateNumber6(finalNumber, duration) {
        let startNumber = 0;
        let startTime = null;

        function updateNumber6(currentTime) {
          if (!startTime) startTime = currentTime;
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(
            progress * (finalNumber - startNumber) + startNumber
          );

          document.getElementById("Komposisi").textContent = currentNumber;

          if (progress < 1) {
            requestAnimationFrame(updateNumber6);
          }
        }

        requestAnimationFrame(updateNumber6);
      }

      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
      }

      window.addEventListener("scroll", function () {
        const numberElement = document.getElementById("Komposisi");
        if (isInViewport(numberElement) && numberElement.style.opacity == 0) {
          numberElement.style.opacity = 1;
          animateNumber6(100, 1000);
        }
      });
    </script>
  </body>
</html>
