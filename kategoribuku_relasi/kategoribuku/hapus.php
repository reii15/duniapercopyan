<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
include "koneksi.php";
$kategori_id = $_GET['kategori_id'];
$query = mysqli_query($koneksi,"delete from kategoribuku where kategori_id='$kategori_id'");
?>
  <script>
    // SweetAlert to confirm deletion
    Swal.fire({
      title: 'Deleted!',
      text: 'successfully deleted.',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then(() => {
      // Redirect to user/index page
      window.location.href = '?page=kategoribuku/index';
    });
  </script>
</body>
</html>
