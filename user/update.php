<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$user_id=$_POST['user_id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$nama_lengkap=$_POST['nama_lengkap'];
$alamat=$_POST['alamat'];
$level=$_POST['level'];
$query=mysqli_query($koneksi,"update user set username='$username',password='$password',email='$email'
,nama_lengkap='$nama_lengkap',alamat='$alamat',level='$level' where user_id='$user_id'");
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
        window.location.href = '?page=user/index';
    })
</script>