<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete User</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <?php
  include "koneksi.php";
  $user_id = $_GET['user_id'];
  $query = mysqli_query($koneksi, "delete from user where user_id='$user_id'");
  ?>
  <script>
    // SweetAlert to confirm deletion
    Swal.fire({
      title: 'User Deleted!',
      text: 'successfully deleted.',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then(() => {
      // Redirect to user/index page
      window.location.href = '?page=user/index';
    });
  </script>
</body>
</html>
