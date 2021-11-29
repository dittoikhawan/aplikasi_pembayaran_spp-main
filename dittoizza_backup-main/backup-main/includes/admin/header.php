<?php
session_start();
require_once 'Admin.php';

$admin = new Admin;

// jika session id belum di set, maka kembalikan ke halaman login
if (!isset($_SESSION['id'])) {
    header('Location: ../../');
}

$id = $_SESSION['id'];

$data = $admin->getDataPetugas($id);
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#ffd700" fill-opacity="1" d="M0,128L40,133.3C80,139,160,149,240,138.7C320,128,400,96,480,101.3C560,107,640,149,720,170.7C800,192,880,192,960,165.3C1040,139,1120,85,1200,69.3C1280,53,1360,75,1400,85.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
</svg>

<body>
    <div class="container text-center">
        <h1 href="#">Aplikasi Pembayaran SPP</h1>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="nav-link btn btn-primary" href="?p=siswa">Data Siswa</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link btn btn-primary" href="?p=petugas">Data Petugas</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link btn btn-primary" href="?p=spp">Data SPP</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link btn btn-danger" href="?p=logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>