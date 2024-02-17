<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$koleksi_id=$_POST['koleksi_id'];
$user_id=$_POST['user_id'];
$buku_id=$_POST['buku_id'];
$query=mysqli_query($koneksi,"update koleksipribadi set user_id='$user_id',buku_id='$buku_id' where koleksi_id='$koleksi_id'");
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
        window.location.href = '?page=koleksipribadi/index';
    })
</script>