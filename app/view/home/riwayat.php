<style>
  body {
    background: #D1F6F6;
  }

  @import url('https://fonts.googleapis.com/css2?family=Doppio+One&family=Inter&display=swap');

  .logo {
    width: 150px;
  }

  #atas {
    background-color: white;
    border-radius: 12px;

    /* width: 50%;
      height: 75%; */
  }

  #atas h5 {
    color: #7ABAF5;
    font-family: 'Doppio One';
    font-size: 15px;
    font-weight: 400;
    line-height: normal;
  }

  .masuk {
    margin-top: 18px;
    font-family: 'Doppio One';
  }

  .keluar {
    margin-top: 18px;
    font-family: 'Doppio One';
  }

  #selisih {
    border: 1px solid black;
    border-radius: 10px;
    font-family: 'Doppio One';
    flex-shrink: 0;
  }

  .col-md {
    /* max-width: 600px;
    height: 400px; */
    font-family: 'Inter';
    border-radius: 10px;
    background: #FFF;
    margin-bottom: 25px;
  }

  .bawah {
    font-family: 'Inter';
    gap: 5%;
  }
</style>

<body>
  <nav class="navbar navbar-lg navbar-light">
    <div class="container d-flex justify-content-between align-items-center">
      <a class=" ms-0" href="../">
        <img class="logo" src="../../public/image/kaswoy1.png" alt="kaswoy1">
      </a>
      <div class="d-flex align-items-center">
        <div class="text-end me-2">
          <p class="m-0">Nama</p>
          <p class="m-0">XI PPLG 1</p>
        </div>
        <i class="fas fa-user fa-3x"></i>
      </div>
    </div>
  </nav>

  <div class="container mb-3 pb-3 " id="atas">
    <h5 class="d-flex justify-content-start pt-3 pb-3">Riwayat Transaksi</h5>
    <table class="table table-borderless mb-0">

      <tr class="d-flex justify-content-evenly">
        <td>
          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90" fill="none">
            <path d="M90 45C90 52.4003 88.1749 59.6864 84.6865 66.2129C81.198 72.7393 76.1538 78.3047 70.0007 82.4161C63.8475 86.5275 56.7754 89.058 49.4108 89.7833C42.0461 90.5087 34.6162 89.4065 27.7792 86.5746C20.9423 83.7426 14.9092 79.2682 10.2145 73.5477C5.51983 67.8272 2.30839 61.0372 0.864663 53.7791C-0.579063 46.521 -0.210507 39.0188 1.93768 31.9372C4.08588 24.8556 7.94739 18.413 13.1802 13.1802L45 45H90Z" fill="#2A7131" fill-opacity="0.81" />
            <path d="M45 0C52.2334 8.62571e-08 59.3602 1.7437 65.7764 5.08333C72.1927 8.42297 77.7094 13.2601 81.8589 19.1849C86.0085 25.1096 88.6687 31.9474 89.614 39.1187C90.5594 46.2901 89.7621 53.5836 87.2897 60.3813C84.8172 67.179 80.7426 73.2805 75.411 78.1689C70.0794 83.0572 63.6479 86.5882 56.6616 88.4627C49.6754 90.3372 42.3402 90.5 35.2777 88.9372C28.2151 87.3744 21.6334 84.1321 16.0902 79.4851L45 45V0Z" fill="#92CE98" />
            <path d="M67.5222 83.9583C58.9452 88.9167 48.9717 90.9062 39.1488 89.618C29.3259 88.3298 20.2026 83.836 13.1942 76.8338L45 45L67.5222 83.9583Z" fill="#2A7131" />
            <path d="M90 45C90 51.6758 88.5147 58.2679 85.6517 64.2986C82.7888 70.3293 78.6199 75.6475 73.4473 79.8676L45 45H90Z" fill="#206827" />
            <path d="M56.7244 1.55419C65.3172 3.87305 73.0293 8.68789 78.8857 15.3898C84.742 22.0918 88.4795 30.3798 89.6254 39.2059C90.7714 48.032 89.2744 56.9997 85.3237 64.9749C81.373 72.9502 75.1461 79.5749 67.4305 84.0112L45 45L56.7244 1.55419Z" fill="#206827" />
            <path d="M13.1802 76.8198C6.50033 70.1399 2.09207 61.5273 0.580106 52.2023L45 45L13.1802 76.8198Z" fill="#64AC6B" />
            <path d="M45 0C39.0905 -7.04699e-08 33.2389 1.16396 27.7792 3.42542C22.3196 5.68688 17.3588 9.00156 13.1802 13.1802L45 45V0Z" fill="#59A861" />
          </svg>
          <!-- <img src="" alt=""> -->
          <div class="text-center masuk">
            <h6 class="m-0">Pemasukan</h6>
            <p>Rp. <?= number_format($data['total_pemasukan']['total_pemasukan'], 0, ',', '.') ?></p>
          </div>
        </td>
        <td class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90" fill="none">
            <path d="M90 45C90 50.2941 89.0658 55.5467 87.2404 60.5162L45 45H90Z" fill="#E7A72A" />
            <path d="M2.1313 58.6848C-0.741552 49.6854 -0.709339 40.0101 2.22337 31.03C5.15608 22.05 10.8405 14.2206 18.4712 8.65138C26.1018 3.0822 35.2917 0.0556929 44.7383 0.000760791C54.185 -0.0541713 63.4094 2.86525 71.1043 8.34532L45 45L2.1313 58.6848Z" fill="#661274" />
            <path d="M87.2391 60.5197C86.4999 62.5315 85.6179 64.4879 84.5999 66.374L45 45L87.2391 60.5197Z" fill="#FF1C1C" />
            <path d="M2.04806 58.4213C4.38354 65.8955 8.62896 72.6309 14.3647 77.9618C20.1005 83.2927 27.1281 87.0347 34.753 88.8178L45 45L2.04806 58.4213Z" fill="#5C4DB3" />
            <path d="M50.3341 89.6827C44.9268 90.3283 39.4471 89.9869 34.1616 88.6753L45 45L50.3341 89.6827Z" fill="#46B044" />
            <path d="M84.7492 66.095C81.3198 72.557 76.3667 78.0855 70.3189 82.2015C64.271 86.3176 57.3109 88.8971 50.0414 89.7167L45 45L84.7492 66.095Z" fill="#BE3232" />
            <path d="M70.9414 8.22983C76.8336 12.3868 81.6406 17.8989 84.9573 24.3019C88.2741 30.7049 90.0035 37.8111 90 45.0222L45 45L70.9414 8.22983Z" fill="#B0A3A3" />
          </svg>
          <div class="text-center keluar">
            <h6 class="m-0">Pengluaran</h6>
            <p>Rp. <?= number_format($data['total_pengeluaran']['total_pengeluaran'], 0, ',', '.') ?></p>
          </div>
        </td>
      </tr>
    </table>
    <div class="d-flex justify-content-between mx-auto" id="selisih" style="max-height: 30px;">
      <p class="ms-2" style="color: #7ABAF5;">SALDO</p>
      <p class="me-2">Rp. <?= number_format($data['saldo'], 0, ',', '.') ?></p>
    </div>
  </div>

  <div class="container">
    <div class="bawah row g-1 justify-content-evenly mx-auto">

      <div class="col-md col-12">
        <h6 class="ps-3 pt-3">Pemasukan</h6>
        <table class="table text-center" style="font-family: Inter;">
          <div class="form-floating mb-3" style="max-width: 35%;">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Open this select Month</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
            <label for="floatingSelect">Pilih Bulan</label>
          </div>

          <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Nominal</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['getpemasukan'] as $masuk) : ?>
              <tr>
                <td><?= date('d F Y', strtotime($masuk['tanggal'])) ?></td>
                <td><?= 'Rp.' . number_format($masuk['nominal'], 0, ',', '.') ?></td>
                <td><?= $masuk['keterangan'] ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>

        </table>
      </div>
      <div class="col-md col-12">
        <h6 class="ps-3 pt-3">Pengeluaran</h6>
        <table class="table text-center" style="font-family: Inter;">
          <div class="form-floating mb-3" style="max-width: 35%;">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Open this select Month</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
            <label for="floatingSelect">Pilih Bulan</label>
          </div>

          <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Nominal</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['getpengeluaran'] as $out) : ?>
              <tr>
                <td><?= date('d F Y', strtotime($out['tanggal'])) ?></td>
                <td><?= 'Rp. ' . number_format($out['nominal'], 0, ',', '.') ?></td>
                <td><?= $out['keterangan'] ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>