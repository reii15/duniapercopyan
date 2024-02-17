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
                    <form action="?page=koleksipribadi/simpan" method="POST">
                    <div class="mb-3">
        <label class="form-label">User ID</label>
        <select name="user_id" id="" class="form-select" placeholder="User ID">
            <?php
            $query=mysqli_query($koneksi, "select * from user");
            while($data=mysqli_fetch_array($query)){
                ?>
                <option value="<?php echo $data['user_id'] ?>"><?php echo $data['username']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Buku ID</label>
        <select name="buku_id" id="" class="form-select" placeholder="Buku ID">
            <?php
            $query=mysqli_query($koneksi, "select * from buku");
            while($data=mysqli_fetch_array($query)){
                ?>
                <option value="<?php echo $data['buku_id'] ?>"><?php echo $data['judul']?></option>
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
