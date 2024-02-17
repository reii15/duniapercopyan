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
                    <form action="?page=buku/simpan" method="POST">
                    <div class="mb-3">
        <label class="form-tabel"> Judul</label>
        <input type="text" class="form-control" name="judul"></input>
    </div>


    <div class="mb-3">
        <label class="form-tabel"> Penulis</label>
        <input type="text" class="form-control" name="penulis"></input>
    </div>


    <div class="mb-3">
        <label class="form-tabel"> Penerbit</label>
        <input type="text" class="form-control" name="penerbit"></input>
    </div>


    <div class="mb-3">
        <label class="form-tabel">Tahun Terbit</label>
        <input type="date" class="form-control" name="tahun_terbit"></input>
    </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
