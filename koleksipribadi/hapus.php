<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete </title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
include "koneksi.php";
$koleksi_id = $_GET['koleksi_id'];
$query = mysqli_query($koneksi,"delete from koleksipribadi where koleksi_id='$koleksi_id'");
?>
  <script>

    Swal.fire({
      title: 'Deleted!',
      text: 'successfully deleted.',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then(() => {
  
      window.location.href = '?page=koleksipribadi/index';
    });
  </script>
</body>
</html>
