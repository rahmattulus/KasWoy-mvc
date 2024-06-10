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
                <h4 class="m-0 font-weight-bold text-primary">Pengeluaran</h4>
            </div>

            <div class="container-fluid">
                <div class="p-5 m-0">

                    <?php if (isset($_SESSION['success_massage'])) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?= $_SESSION['success_massage'] ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                    
                    <form method="POST" action="pengeluaran" class="user">
                        <div class="form-group pb-3 ">
                            <input type="date" name="tanggal" class="form-control form-control-user" value="<?= date('Y-m-d'); ?>" id="exampleInputEmail" placeholder="">
                        </div>
                        <div class="form-group pb-3 ">
                            <input type="text" name="nominal" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nominal">
                        </div>
                        <div class="form-group pb-3 ">
                            <input type="text" name="keterangan" class="form-control form-control-user" id="exampleInputEmail" placeholder="Keterangan">
                        </div>
                        <div class="d-grid gap-5 pt-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>



            <div class="table p-3" style="background-color: #fff;">
                <div class="form-floating mb-3" style="max-width: 35%;">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <?php
                        $bulan = array(
                            1 => "Januari",
                            2 => "Februari",
                            3 => "Maret",
                            4 => "April",
                            5 => "Mei",
                            6 => "Juni",
                            7 => "Juli",
                            8 => "Agustus",
                            9 => "September",
                            10 => "Oktober",
                            11 => "November",
                            12 => "Desember"
                        );

                        for ($i = 1; $i <= 12; $i++) {
                            echo '<option';
                            if (date('n') == $i) {
                                echo ' selected';
                            }
                            echo ' value="' . $i . '">' . $bulan[$i] . '</option>';
                        }
                        ?>
                    </select>
                    <label for="floatingSelect">Pilih Bulan</label>
                </div>
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
                                <?php foreach ($data['get'] as $out) : ?>
                                    <tr>
                                        <td><?= date('d F Y', strtotime($out['tanggal'])) ?></td>
                                        <td><?= 'Rp. '. number_format($out['nominal'], 0, ',', '.') ?></td>
                                        <td><?= $out['keterangan'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>