<?php
include "koneksi.php";
$user_id=$_GET['user_id'];
$query=mysqli_query($koneksi,"select * from user where user_id='$user_id'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data User</h1>
<form action="?page=user/update" method="POST">
    <div class="mb-3">
        <label class="form-label">User ID</label>
        <input type="text" class="form-control" name="user_id" value="<?php echo $data['user_id'] ?>"readonly> 
    </div>

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
    </div>

    <div class="mb-3">
    <label class="form-label">Level</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="level" value="1">1
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="level" value="2">2
  </div>

  <div class="form-check">
  <input class="form-check-input" type="radio" name="level" value="3">3
  </div>
  

    <button type="submit" class="btn btn-primary" value="simpan">update</button>
</form>
