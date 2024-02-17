<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$buku_id =$_POST['buku_id'];
$judul =$_POST['judul'];
$penulis=$_POST['penulis'];
$penerbit =$_POST['penerbit'];
$tahun_terbit =$_POST['tahun_terbit'];
$squery =mysqli_query($koneksi,"insert into buku(buku_id,judul,penulis,penerbit,tahun_terbit) 
values ('$buku_id','$judul','$penulis','$penerbit','$tahun_terbit')");
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
        window.location.href = '?page=buku/index';
    })
</script>
