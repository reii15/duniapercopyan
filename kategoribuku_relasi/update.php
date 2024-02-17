<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$kategoribuku_id=$_POST['kategoribuku_id'];
$buku_id=$_POST['buku_id'];
$kategori_id=$_POST['kategori_id'];
$query=mysqli_query($koneksi,"update kategoribuku_relasi set buku_id='$buku_id',kategori_id='$kategori_id' where kategoribuku_id='$kategoribuku_id'");
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
        window.location.href = '?page=kategoribuku_relasi/index';
    })
</script>