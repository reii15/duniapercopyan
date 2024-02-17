<?php
include "koneksi.php";
?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Tambah Data</h3>
                </div>
                <div class="card-body">
                    <form action="?page=user/simpan" method="POST">
                    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username"  placeholder="Username" value="<?php echo $data['username'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password"  placeholder="Password" value="<?php echo $data['password'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email"  placeholder="Email" value="<?php echo $data['email'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap"  placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3"></textarea>
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
