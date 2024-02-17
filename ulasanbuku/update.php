<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$ulasan_id=$_POST['ulasan_id'];
$user_id=$_POST['user_id'];
$buku_id=$_POST['buku_id'];
$ulasan=$_POST['ulasan'];
$rating=$_POST['rate'];
$query=mysqli_query($koneksi,"update ulasanbuku set user_id='$user_id', buku_id='$buku_id',ulasan='$ulasan',rating='$rating' where ulasan_id='$ulasan_id'");
?>

<script>
    swal({
        title: 'Sukses',
        text: 'Data Berhasil Di Update...',
        icon: 'success',
        timer: 5000,
        buttons: false,
    })
    .then(() => {
        // dispatch(redirect('/'));
        window.location.href = '?page=ulasanbuku/index';
    })
</script>