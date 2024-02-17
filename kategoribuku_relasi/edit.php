<?php
include "koneksi.php";
?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Update Data</h3>
                </div>
    <div class="card-body">
                    <form action="?page=kategoribuku_relasi/update" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Buku</label>
                            <select name="buku_id" class="form-select" placeholder="Buku">
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $data['buku_id'] ?>"><?php echo $data['judul'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori_id" class="form-select" placeholder="Kategori">
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $data['kategori_id'] ?>"><?php echo $data['nama_kategori'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
