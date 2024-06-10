<?php 
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            window.location.href = 'http://localhost/kaswoymvc/public/home/login';
            alert('Anda siapa | LOG-IN DULU!!');
          </script>";
    exit;
}
?>
<body style="background: #D1F6F6;">

  <nav class="navbar navbar-lg navbar-light">
    <div class="container d-flex justify-content-between align-items-center">
      <a class=" ms-0" href="../">
        <img class="logo" src="../../public/image/kaswoy1.png" alt="" style="width: 150px;">
      </a>
      <div class="d-flex align-items-center">
        <div class="text-end me-2">
          <p class="m-0"><b><?= $_SESSION['username'] ?></b></p>
          <p class="m-0">XI PPLG 1</p>
        </div>
        <i class="fas fa-user fa-3x"></i>
      </div>
    </div>
  </nav>

  <div class="container pt-5">
    <div class="row row-cols-1 row-cols-md-3 g-3 mx-auto">
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-6">
        <div class="d-flex align-items-center justify-content-center mx-auto">
          <button type="button" class="btn btn-lg rounded-circle position-relative  " data-bs-toggle="popover" data-bs-title="BAYAR WOY!!" style="border: none;">
            <i class="fas fa-user fa-3x"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
            <p class="text-center mt-0">Nama</p>
          </button>
        </div>
      </div>

      <!-- Tambahkan lebih banyak tombol di sini sesuai dengan kebutuhan -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>