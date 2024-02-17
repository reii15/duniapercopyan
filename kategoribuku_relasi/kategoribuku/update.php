<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$kategori_id=$_POST['kategori_id'];
$nama_kategori=$_POST['nama_kategori'];

$query=mysqli_query($koneksi,"update kategoribuku set nama_kategori='$nama_kategori' where kategori_id='$kategori_id'");
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
        window.location.href = '?page=kategoribuku/index';
    })
</script>