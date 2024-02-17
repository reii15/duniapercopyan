<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
// $kategoribuku_id=$_POST['kategoribuku_id'];
$buku_id=$_POST['buku_id'];
$kategori_id=$_POST['kategori_id'];
$query=mysqli_query($koneksi,"insert into kategoribuku_relasi(buku_id,kategori_id) values('$buku_id','$kategori_id')");
?>
<script>
swal({
  title: 'Sukses',
  text: 'Data Berhasil Disimpan...',
  icon: "success",
  timer: 1000,
  buttons: false,
})
.then(() => {
    // dispatch(redirect('/'));
    window.location.href  = '?page=kategoribuku_relasi/index';
})
</script>