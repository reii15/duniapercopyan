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
$query=mysqli_query($koneksi,"insert into user values('$user_id','$username','$password',
'$email','$nama_lengkap','$alamat','$level')");
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
        window.location.href = '?page=user/index';
    })
</script>
