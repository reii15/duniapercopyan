<?php
include "koneksi.php";

// Check if ulasan_id is set
if(isset($_GET['ulasan_id'])) {
    $ulasan_id = $_GET['ulasan_id'];
    
    // Fetch data for the given ulasan_id
    $query = mysqli_query($koneksi, "SELECT * FROM ulasanbuku WHERE ulasan_id='$ulasan_id'");
    $data = mysqli_fetch_array($query);

    // Check if data is fetched
    if($data) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="tambah.css">
            <title>Update Ulasan Buku</title>
        </head>
        <body>
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title mb-0">Update Data</h3>
                            </div>
                            <div class="card-body">
                                <form action="?page=ulasanbuku/update" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label mt-3">Ulasan ID</label>
                                        <input type="text" class="form-control" name="ulasan_id" value="<?php echo $data['ulasan_id']?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">User ID</label>
                                        <input type="text" class="form-control" name="user_id" value="<?php echo $data['user_id']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Buku ID</label>
                                        <input type="text" class="form-control" name="buku_id" value="<?php echo $data['buku_id']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ulasan</label>
                                        <input type="text" class="form-control" name="ulasan" value="<?php echo $data['ulasan']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <div class="rate">
                                        <div class="rate">
                                <input type="radio" id="star5" name="rate" value=" ⭐ ⭐ ⭐ ⭐ ⭐" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value=" ⭐ ⭐ ⭐ ⭐" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value=" ⭐ ⭐ ⭐" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value=" ⭐ ⭐" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value=" ⭐" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                                            <!-- Add the rest of the rating stars -->
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Data not found.</p>";
    }
} else {
    echo "<p>Ulasan ID not provided.</p>";
}
?>
