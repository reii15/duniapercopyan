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
$buku_id = $_GET['buku_id'];
$query = mysqli_query($koneksi,"delete from buku where buku_id='$buku_id'");
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
      window.location.href = '?page=buku/index';
    });
  </script>
</body>
</html>
