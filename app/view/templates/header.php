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
