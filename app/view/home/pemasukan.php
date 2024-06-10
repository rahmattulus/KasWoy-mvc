<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     echo "<script>
//             window.location.href = 'http://localhost/kaswoymvc/public/home/login';
//             alert('Anda siapa | LOG-IN DULU!!');
//           </script>";
//     exit;
// }
?>
<style>
    body {
        background-color: #D1F6F6;
    }

    @import url('https://fonts.googleapis.com/css2?family=Doppio+One&family=Inter&display=swap');

    /* .atas{
      
    } */

    .table {
        border-radius: 10px;
    }

    h1 {
        font-family: 'Doppio One';
    }

    .profil {
        font-family: 'Doppio One';
    }

    th td {
        font-family: 'Inter';
        align-items: center;


    }
</style>

<body>

    <nav class="navbar navbar-lg navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
            <a class=" ms-0" href="../">
                <img class="logo" src="../../public/image/kaswoy1.png" alt="kaswoy1" style="width: 150px;">
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

    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Pemasukan</h4>
            </div>

            <div class="container p-4" style="background-color: #fff;">
                <div class="form-floating mb-3" style="max-width: 35%;">
                    <select class="form-select" id="toggleView" aria-label="Floating label select example">
                        <option value="table">Iuran Rutin</option>
                        <option value="form">Lainnya</option>
                    </select>
                    <label for="toggleView">Jenis Pemasukan</label>
                </div>

                <div class="card-body">
                    <div class="table-responsive ps-5 pe-5" id="tableView">
                        <h4 class="p-2 m-0">Iuran Rutin</h4>
                        <form method="POST" action="iuran">
                            <table class="main table text-center">
                                <div class="form-floating" style="max-width: 35%;">
                                    <select class="form-select" id="floatingSelect" name="bulan" aria-label="Floating label select example" required>
                                        <option selected disabled>Open this select Month</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                    <label for="floatingSelect">Pilih Bulan</label>
                                </div>
                            </table>
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="min-width: 275px;">Nama</th>
                                        <th class="text-center">Week 1</th>
                                        <th class="text-center">Week 2</th>
                                        <th class="text-center">Week 3</th>
                                        <th class="text-center">Week 4</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($data['getNama'] as $anggota): ?>
                                        <tr>
                                            <td><?= $anggota['nama'] ?></td>
                                            <td><input type="checkbox" name="status[<?php echo $anggota['id']; ?>][minggu1]" value="Sudah Bayar"></td>
                                            <td><input type="checkbox" name="status[<?php echo $anggota['id']; ?>][minggu2]" value="Sudah Bayar"></td>
                                            <td><input type="checkbox" name="status[<?php echo $anggota['id']; ?>][minggu3]" value="Sudah Bayar"></td>
                                            <td><input type="checkbox" name="status[<?php echo $anggota['id']; ?>][minggu4]" value="Sudah Bayar"></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="d-grid gap-5 pt-3">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>

                        </form>

                    </div>

                    <div class="" id="formView" style="display: none;">
                        <div class="p-5 m-0">
                            <h4>Pemasukan Lainnya</h4>
                            <form method="POST" action="pemasukan" class="user">
                                <div class="form-group pb-3 ">
                                    <input type="date" name="tanggal_lainnya" class="form-control form-control-user" value="<?= date('Y-m-d'); ?>" id="exampleInputEmail" placeholder="">
                                </div>
                                <div class="form-group pb-3 ">
                                    <input type="text" name="nominal_lainnya" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nominal">
                                </div>
                                <div class="form-group pb-3 ">
                                    <input type="text" name="keterangan_lainnya" class="form-control form-control-user" id="exampleInputEmail" placeholder="Keterangan">
                                </div>
                                <div class="d-grid gap-5 pt-3">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="container mt-4">
                        <div class="table p-3" style="background-color: #fff;">
                            <h4 class="p-2 m-0">Riwayat Pemasukan</h4>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nominal</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['pemasukan'] as $masuk) : ?>
                                                <tr>
                                                    <td><?= date('d F Y', strtotime($masuk['tanggal'])) ?></td>
                                                    <td><?= 'Rp.' . number_format($masuk['nominal'], 0, ',', '.') ?></td>
                                                    <td><?= $masuk['keterangan'] ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script>
        // Fungsi untuk mengatur opsi bulan aktif sesuai dengan bulan saat ini
        document.addEventListener('DOMContentLoaded', function () {
            const bulanSelect = document.getElementById('floatingSelect');
            const bulanSekarang = new Date().getMonth(); // Mendapatkan bulan saat ini (0 - 11)
            bulanSelect.selectedIndex = bulanSekarang + 1; // Indeks dimulai dari 1 karena ada opsi "Open this select Month"
        });
    </script> -->