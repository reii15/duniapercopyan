<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
// $ulasan_id=$_POST['ulasan_id'];
$user_id=$_POST['user_id'];
$buku_id=$_POST['buku_id'];
$ulasan=$_POST['ulasan'];
$rating=$_POST['rate'];
$query=mysqli_query($koneksi,"insert into ulasanbuku (user_id,buku_id,ulasan,rating) values ('$user_id','$buku_id','$ulasan','$rating')");
?>
<script>
swal({
  title: "Berhasil",
  text: "Data Berhasil Disimpan...",
  icon: "success",
  timer: 1000,
  buttons: false,
})
.then(() => {
    // dispatch(redirect('/'));
    window.location.href  = '?page=ulasanbuku/index';
})
</script>