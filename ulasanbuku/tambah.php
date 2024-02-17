<?php
include "koneksi.php";
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Tambah Data</h3>
                    <link rel="stylesheet" href="tambah.css">
                </div>
                <div class="card-body">
                    <form action="?page=ulasanbuku/simpan" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Buku</label>
                            <select name="buku_id" id="" class="form-select" placeholder="Buku">
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
                            <label class="form-label">User</label>
                            <select name="user_id" id="" class="form-select" placeholder="User">
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM user");
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $data['user_id'] ?>"><?php echo $data['username'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ulasan</label>
                            <input type="text" class="form-control" name="ulasan" placeholder="Ulasan">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"></label>
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
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Display star rating for each book in the index
    $booksQuery = mysqli_query($koneksi, "SELECT buku_id, AVG(rate) as avg_rating FROM ulasan_buku GROUP BY buku_id");
    while ($bookData = mysqli_fetch_array($booksQuery)) {
        $avgRating = round($bookData['avg_rating']);
        ?>
        <div>
            <h3><?php echo "Book ID: " . $bookData['buku_id'] . ", Average Rating: " . $avgRating . " stars"; ?></h3>
            <!-- Display stars based on the average rating -->
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <span class="star <?php echo ($i <= $avgRating) ? 'filled' : ''; ?>">★</span>
            <?php } ?>
        </div>
    <?php } ?>
</div>
