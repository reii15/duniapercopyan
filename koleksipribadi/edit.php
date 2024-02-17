<?php
include "koneksi.php";

// Check if koleksi_id is set
if(isset($_GET['koleksi_id'])) {
    $koleksi_id = $_GET['koleksi_id'];
    
    // Fetch data for the given koleksi_id
    $query = mysqli_query($koneksi, "SELECT * FROM koleksipribadi WHERE koleksi_id='$koleksi_id'");
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
                            <form action="?page=koleksipribadi/update" method="POST">
                                <div class="mb-3">
                                    <label class="form-label mt-3">Koleksi ID</label>
                                    <input type="text" class="form-control" name="koleksi_id" value="<?php echo $data['koleksi_id']?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mt-3">User ID</label>
                                    <input type="text" class="form-control" name="user_id" value="<?php echo $data['user_id']?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mt-3">Buku ID</label>
                                    <input type="text" class="form-control" name="buku_id" value="<?php echo $data['buku_id']?>">
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
    echo "<p>Koleksi ID not provided.</p>";
}
?>
