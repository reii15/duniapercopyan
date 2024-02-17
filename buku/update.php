<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$buku_id=$_POST['buku_id'];
$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];

$query=mysqli_query($koneksi,"update buku set judul='$judul',penulis='$penulis',penerbit='$penerbit',tahun_terbit='$tahun_terbit' where buku_id='$buku_id'");
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
        window.location.href = '?page=buku/index';
    })
</script>