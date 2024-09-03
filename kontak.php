<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak - Fireblock Official Website</title>
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
    <link rel="stylesheet" href="kontak.css" />
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
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item px-4">
              <a class="nav-link" href="tentang.php">Tentang Kami</a>
            </li>
            <li class="nav-item px-4">
              <a
                class="nav-link active"
                style="color: orangered; border-bottom: none"
                href="kontak.php"
                >Kontak</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="hero-kontak jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Kontak</h1>
        <span
          ><a href="index.html">Home</a> >>
          <span class="kontak">Kontak</span></span
        >
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Form -->
    <div class="form">
      <div class="container">
        <div class="row">
        <div class="col-lg-6">
        <div class="row">
          <h2>Send a Message</h2>

          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih</strong> Pesan anda sudah kami terima.
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
              
            </button>
          </div>

          <div class="alert alert-danger alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Error!</strong> Terjadi kesalahan saat mengirimkan form.
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
              
            </button>
          </div>
          <div class="col-lg-6">


          



            <form name="fireblock-contact-form">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input
                  type="text"
                 
                  name="name"
                  class="form-control"
                  id="name"
                  aria-describedby="emailHelp"
                  ="Insert your name*"
                  required
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input
                  type="email"
                
                  name="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  ="Insert your Email*"
                  required
                />
              </div>
            </div>
          </div>

            <div class="row">
          <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Subject</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="subject"
                  name="subject"
                  aria-describedby="emailHelp"
                  ="Insert your Subject*"
                  required
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input
                  type="number"
          
                  name="phone"
                  class="form-control"
                  id="phone"
                  aria-describedby="emailHelp"
                  ="Insert your Number Phone*"
                  required
                />
              </div>
            </div>
          </div>
          <div class="col-lg-12"> 
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Message</label
                >
                <textarea
                  class="form-control"
                  id="message"
                  name="message"
                  rows="3"
                  required
                ></textarea>
              </div>
            </div>
              <button type="submit" class="btn btn-submit btn-kirim">Kirim</button>
              <button class="btn btn-danger btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
        
      </div>

      <div class="col-lg-6">
        <div class="kontak-kami">
          <h2>Kontak Kami</h2>
        <h3>Alamat</h3>
        <p>Jl.H.SamanHudi No.9 - 9A <br>
        Pasar Baru - Jakarta Pusat <br>
      DKI Jakarta, 10710</p>
      <h3>Phone</h3>
      <p>021 - 3483 0111</p>
      <p>0856 4092 0760</p>
      <p>0821 8877 9800</p>
      <h3>Email</h3>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
      </svg>
      marketing@fireblock.co.id
        </div>
      </div>


      
    </div>
      </div>
    <!-- Akhir Form -->

    <!-- Map -->
     <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d507747.3361543721!2d106.833728!3d-6.160739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5c38a18589d%3A0xd72984f8281f7f2c!2sJl.%20H.%20Samanhudi%20No.9%2C%20RT.3%2FRW.3%2C%20Ps.%20Baru%2C%20Kecamatan%20Sawah%20Besar%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010710%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1724647559860!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <!-- Akhir Map -->

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
              0856 4092 0760 <br />
              0821 8877 9800
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

<!-- Script -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"
></script>
<script>
  const scriptURL =
  "https://script.google.com/macros/s/AKfycbxnW8VZqauRzr-NaFTF3TddgihXdreSa6b5IN08q8mEn4v1I_6uY8gCooaB6oeBMiJv/exec";
const form = document.forms["fireblock-contact-form"];
const btnKirim = document.querySelector(".btn-kirim");
const btnLoading = document.querySelector(".btn-loading");
const myAlert = document.querySelector(".my-alert");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  //ketika tombol submit diklik
  //tampilan tombol loading, hilangkan tombol kirim
  btnLoading.classList.toggle("d-none");
  btnKirim.classList.toggle("d-none");
  try {
    fetch(scriptURL, { method: "POST", body: new FormData(form) })
      .then((response) => {
        //tampilan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");
        //tampilkan alert
        myAlert.classList.toggle("d-none");
        //reset formnya
        form.reset();
        console.log("Success!", response);
      })
      .catch((error) => {
        //tampilan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");
        //tampilkan alert error
        const errorAlert = document.querySelector(".error-alert");
        errorAlert.classList.toggle("d-none");
        //reset formnya
        form.reset();
        console.error("Error!", error.message);
      });
  } catch (error) {
    //tampilan tombol kirim, hilangkan tombol loading
    btnLoading.classList.toggle("d-none");
    btnKirim.classList.toggle("d-none");
    //tampilkan alert error
    const errorAlert = document.querySelector(".error-alert");
    errorAlert.classList.toggle("d-none");
    //reset formnya
    form.reset();
    console.error("Error!", error.message);
  }
});

</script>
  </body>
</html>
