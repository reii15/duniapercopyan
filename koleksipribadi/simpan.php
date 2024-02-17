<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$koleksi_id =$_POST['koleksi_id'];
$user_id =$_POST['user_id'];
$buku_id =$_POST['buku_id'];
$squery =mysqli_query($koneksi,"insert into koleksipribadi(koleksi_id,user_id,_buku_id) values('$koleksi_id','$user_id','$buku_id')");
?>
<script>
    swal({
        title: 'Sukses',
        text: 'Data Berhasil Disimpan...',
        icon: 'success',
        timer: 5000,
        buttons: false,
    })
    .then(() => {
        // dispatch(redirect('/'));
        window.location.href = '?page=koleksipribadi/index';
    })
</script>

