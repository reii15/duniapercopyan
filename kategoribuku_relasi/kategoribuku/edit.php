<?php
include "koneksi.php";

// Check if kategori_id is set
if(isset($_GET['kategori_id'])) {
    $kategori_id = $_GET['kategori_id'];
    
    // Fetch data for the given kategori_id
    $query = mysqli_query($koneksi, "SELECT * FROM kategoribuku WHERE kategori_id='$kategori_id'");
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
                            <form action="?page=kategoribuku/update" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori" value="<?php echo htmlspecialchars($data['nama_kategori']); ?>">
                                    <!-- Use htmlspecialchars to prevent XSS attacks -->
                                </div>
                                <input type="hidden" name="kategori_id" value="<?php echo $kategori_id; ?>">
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
    echo "<p>Kategori ID not provided.</p>";
}
?>
