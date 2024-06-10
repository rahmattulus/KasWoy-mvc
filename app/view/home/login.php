<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $data['title']?>
  </title>
    <link rel="shortcut icon" href="http://localhost/kaswoymvc/public/image/kaswoy2.png" type="image/x-icon">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="http://localhost/kaswoymvc/public/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" >
</head>
<style>
    body {
        background-image: url(../../public/image/landing.png);
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
    }


    .yo {
        width: 220px;
    }

    .container {
        width: 30%;
        min-width: 385px;
        height: auto;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.70);
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        fill-opacity: inherit;
        margin: 20px auto;
        padding: 30px;
    }

    h2 {
        margin-top: 20px;
        margin-bottom: 40px;
        text-align: center;
    }

    input[type="text"],
    input[type="password"] {
        width: 85%;
        height: 30px;
        border-radius: 10px;
        border: 1px solid #000;
        background: rgba(255, 255, 255, 0.70);
        margin-left: 31px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
    }

    input[type="submit"] {
        width: 35%;
        height: 33px;
        border: none;
        border-radius: 5px;
        /* margin-left: 134px; */
        margin-top: 15px;
        background: #92CE98;
    }

    #exampleModal {
        padding: 0;
    }
</style>

<body>
    <!-- <img src="img/landing.png" alt="" class="position-absolute top-0 start-0" style="z-index: -9;"> -->
    <div class="text-center">
        <div class="col-md-12">
            <img class="yo" src="../../public/image/kaswoy1.png" alt="">
        </div>
    </div>


    <div class="position-absolute top-0 end-0 p-5">
        <a data-bs-toggle="modal" data-bs-target="#info">
            <i class="fa fa-info fa-sm  " style="--fa-primary-opacity: 0.60;cursor: pointer;"></i>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="info" tabindex="-1" aria-labelledby="infoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="modal" aria-label="Close"></button>
                        <br>
                        <img class="d-flex align-items-center justify-content-center mx-auto mb-5" src="../../public/image/info.png" alt="" width="40%">
                        <b class="text-center mt-5">
                            <h2 class="m-0 mt-2">KAS WOY?</h2>
                        </b>
                        <div class="text-center mt-2">
                            <p>KasWoy adalah sebuah platform yang dapat membantu<br> untuk mengelola atau memanajemen Keuangan dalam kelas</p>
                        </div>
                        <!-- <div class="p d-flex align-items-center justify-content-center mx-auto">
                        <P>Powered by</P> 
                        <img class="" src="../img/pplg.png" alt="" style="width: 9%; margin-top: -0.5%;">
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-4">
        <h2>Selamat Datang</h2>
        <form action="" method="post" class="form-registrasi">
            <div class="login">
                <?php if (isset($_SESSION['error_message'])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?= $_SESSION['error_message'] ?></strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['error_message']);
                } ?>
                <div class="input">
                    <input class="form-control form-control-sm" type="text" name="username" id="username" placeholder="username" aria-label=".form-control-sm example">

                    <input class="form-control form-control-sm" type="password" name="password" id="password" placeholder="password" aria-label=".form-control-sm example">

                    <input class="form-control form-control-sm mx-auto" type="submit" name="login" value="Masuk">
                </div>
            </div>
        </form>
    </div>


    
