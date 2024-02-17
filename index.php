<?php
include "koneksi.php";
session_start();
if($_SESSION['status']<>"sukses"){
header('location:logout.php');
}
$level=$_SESSION['level'];
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DigitalLibrary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <nav class="navbar navbar-expand-lg nsbar-light bg-dark">
  <div class="container-fluid">
<a class="navbar-brand" href="#">
<a style="color:white; text-decoration: none;">
    <img src="img/png-clipart-user-profile-computer-icons-login-user-avatars-monochrome-black.png" alt="Logo" width="30" height="24" class="rounded-111">
      DigitalLibrary
    </a></a>
    
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
      <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active" aria-current="page" href="?page/home">Home</a>
        </li>

        <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active <?php if($level=='3'){echo 'disabled' ;} ?>" aria-current="page" href="?page=user/index">User</a>

          <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active" aria-current="page" href="?page=buku/index">Buku</a>

          <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active <?php if($level=='3'){echo 'disabled' ;} ?>" aria-current="page" href="?page=kategoribuku/index">Kategori Buku</a>

          <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active <?php if($level=='3'){echo 'disabled' ;} ?>" aria-current="page" href="?page=kategoribuku_relasi/index">Kategori Relasi</a>

          <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active" aria-current="page" href="?page=koleksipribadi/index">Koleksi Pribadi</a>

        <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active" aria-current="page" href="?page=peminjaman/index">Peminjaman</a>

       
          <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active" aria-current="page" href="?page=ulasanbuku/index">Ulasan Buku</a>

       
          <li class="nav-item">
          <a style="color:white; text-decoration: none;" class="nav-link active" aria-current="page" href="?page=logout">Logout</a>
</li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
    <?php include "isi.php"?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>