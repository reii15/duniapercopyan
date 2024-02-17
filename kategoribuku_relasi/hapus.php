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
$kategoribuku_id=$_GET['kategoribuku_id'];
$query=mysqli_query($koneksi,"delete from kategoribuku_relasi where kategoribuku_id='$kategoribuku_id'");
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
      window.location.href = '?page=kategoribuku_relasi/index';
    });
  </script>
</body>
</html>
