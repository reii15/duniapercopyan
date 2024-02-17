<?php
include "koneksi.php";

// Check if buku_id is set
if(isset($_GET['buku_id'])) {
    $buku_id = $_GET['buku_id'];
    
    // Fetch data for the given buku_id
    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE buku_id='$buku_id'");
    $data = mysqli_fetch_array($query);

    // Check if data is fetched
    if($data) {
        ?>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title mb-0">Update Data</h3>
                        </div>
                        <div class="card-body">
                            <form action="?page=buku/update" method="POST">
                                <div class="mb-3">
                                    <label class="form-label mt-3">Id buku</label>
                                    <input type="text" class="form-control" name="buku_id" placeholder="Buku ID" value="<?php echo $data['buku_id']?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $data['judul']?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Penulis</label>
                                    <input type="text" class="form-control" name="penulis" placeholder="Penulis" value="<?php echo $data['penulis']?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?php echo $data['penerbit']?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tahun Dan Tanggal Terbit</label>
                                    <input type="date" class="form-control" name="tahun_terbit" placeholder="Tahun Dan Tanggal Terbit" value="<?php echo $data['tahun_terbit']?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "<p>Data not found.</p>";
    }
} else {
    echo "<p>Buku ID not provided.</p>";
}
?>
