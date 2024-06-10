<style>
    body {
        background-color: #D1F6F6;
        margin: 0;

    }

    @import url('https://fonts.googleapis.com/css2?family=Doppio+One&family=Inter&display=swap');

    .satu {
        border-radius: 37px;
        background: linear-gradient(239deg, #0F1012 30.62%, #1A2448 63.11%, #304EBA 90.96%);
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        color: white;
    }

    .dua {
        flex-shrink: 0;
        border-radius: 27px;
        background: linear-gradient(271deg, #0D170E 9.42%, #24722B 81.06%);
        color: white;
        gap: 10px;
    }

    .tiga {
        margin-top: 20px;
        border-radius: 27px;
        background: #ACCCD3;
        padding: 15px;
        gap: 15px;
    }

    .empat {
        border-radius: 12px;
        padding: 10px;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    #selisih {
        border: 1px solid black;
        border-radius: 10px;
        font-family: 'Doppio One';
        flex-shrink: 0;
    }

    .text1 {
        display: flex;
        width: 146px;
        height: 21px;
        flex-direction: column;
        justify-content: flex-end;
        flex-shrink: 0;
    }
</style>

<body>
    <nav class="navbar navbar-lg navbar-light">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex align-items-center">
                <div class="text-end me-2">
                    <p class="m-0"><b>
                            <?= $_SESSION['username'] ?>
                        </b></p>
                    <p class="m-0">XI PPLG 1</p>
                </div>
                <i class="">
                    <img src="http://localhost/kaswoymvc/public/image/pplg.png" alt="">
                </i>
            </div>
        </div>
    </nav>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                    <br>
                    <img class="d-flex align-items-center justify-content-center mx-auto" src="../public/image/belum.png" alt="" width="40%">
                    <b class="text-center mt-5">
                        <h2 class="text-danger">BAYAR KAS WOY!!</h2>
                    </b>
                    <div class="text-center">
                        <p>Demi kesejahteraan bersama <br>Berfikir kritisnya tolong!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                    <br>
                    <img class="d-flex align-items-center justify-content-center mx-auto" src="../public/image/sudah.png" alt="" width="40%">
                    <b class="text-center mt-5">
                        <h2 class="text-primary">SALAM YANG MULIA</h2>
                    </b>
                    <div class="text-center">
                        <p>Semoga harimu menyenangkan</p>
                    </div>
                    <!-- <div class="p d-flex align-items-center justify-content-center  mx-auto">
            <P>Powered by</P> 
            <img class="" src="../img/pplg.png" alt="" style="width: 9%; ">
          </div> -->
                </div>
            </div>
        </div>
    </div>




    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav" style="max-width: 30%;">
        <div class="offcanvas-header">
            <img src="../public/image/kaswoy1.png" alt="Kas Woy1" style="width: 40%;">
        </div>
        <div class="offcanvas-body" style="opacity: 0.7;">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="home/riwayat">Riwayat Transaksi</a>
                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="home/list" >Sudah Bayar</a></li> -->

                <?php if ($_SESSION['user_level'] == 1 || $_SESSION['user_level'] == 2) : ?>
                    <li class="nav-item"><a class="nav-link" href="home/pemasukan">Pemasukan</a></li>
                    <li class="nav-item"><a class="nav-link" href="home/pengeluaran">Pengluaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="home/admin">Admin</a></li>
                <?php endif; ?>

            </ul>

            <a href="home/logout" class="btn btn-primary" style="position: fixed; bottom: 0; margin: bottom 4px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>
                Keluar
            </a>
        </div>
    </div>

    <div class="container">
        <div class="satu  container-md d-flex justify-content-center align-items-center" style="height: 30vh;">
            <div class="">
                <p>Saldo</p>
                <h2>Rp <?= number_format($data['saldo'], 0, ',', '.') ?></h2>
            </div>
        </div>

        <div class="dua container-md d-flex justify-content-center align-items-center" style="height: 7vh;">
            <p>Rp. <?= number_format($data['pengeluaran']['total_pengeluaran'], 0, ',', '.') ?> Dana terpakai bulan ini</p>

        </div>
    </div>


    <div class="container p-2" style="height: 45vh; ">
        <!-- Riwayat -->
        <div class="tiga row g-2 justify-content-evenly mx-auto">
            <div class="empat col-md col-12" style="background-color: white; border-radius: 12px;">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Riwayat Transaksi</h5>
                    <a href="home/riwayat">See all</a>
                </div>
                <table class="table table-borderless mb-0 ">
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
                            <div class="text-center masuk ">
                                <h6 class="m-0">Pemasukan</h6>
                                <p>Rp. <?= number_format($data['pemasukan']['total_pemasukan'], 0, ',', '.') ?></p>
                            </div>
                        </td>
                        <td>
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
                                <p>Rp. <?= number_format($data['pengeluaran']['total_pengeluaran'], 0, ',', '.') ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- <div class="d-flex justify-content-between mx-auto" id="selisih" style="max-height: 30px;">
                    <p class="ms-2" style="color: #7ABAF5;">Selisih</p>
                    <p class="me-2">Rp 250.000</p>
                </div> -->
            </div>

            <!-- list -->
            <div class="empat col-md col-12" style="background-color: white; border-radius: 12px;">

                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Tagihan</h5>
                </div>
                <div class="container list d-flex justify-content-center align-items-center">

                </div>
            </div>
        </div>
    </div>


    <!-- <script>
        // Aktifkan modal saat halaman dimuat
        window.onload = function () {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        };
    </script> -->