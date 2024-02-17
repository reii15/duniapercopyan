<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<?php
include "koneksi.php";
?>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        color: #495057;
    }

    h1 {
        text-align: center;
        color: #007bff;
        margin-top: 20px;
    }

    .btn-container {
        margin-top: 20px;
        text-align: right;
    }

    .table-responsive {
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        overflow: hidden;
    }

    .table {
        width: 100%;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
    }

    .btn {
        border-radius: 6px;
        margin-right: 10px;
        padding: 8px 16px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        transition: background 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.1);
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-info,
    .btn-danger {
        color: #fff;
        transition: background 0.3s, box-shadow 0.3s;
        border: none;
        padding: 8px 16px;
    }

    .btn-info {
        background-color: #17a2b8;
        box-shadow: 0 4px 8px rgba(23, 162, 184, 0.1);
    }

    .btn-info:hover {
        background-color: #138496;
    }

    .btn-danger {
        background-color: #dc3545;
        box-shadow: 0 4px 8px rgba(220, 53, 69, 0.1);
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<h1 class="animated fadeInUp">Koleksi Pribadi</h1>

<div class="btn-container animated fadeInUp">
    <button type="button" class="btn btn-primary"><a href="?page=koleksipribadi/tambah" style="color:white; text-decoration:none;"><i class="fas fa-plus-circle mr-1"></i> Tambah Data</a></button>
</div>

<div class="table-responsive animated fadeInUp">
    <table id="tabel-data" class="table">
        <thead>
        <tr>
                <th>Koleksi ID</th>
                <th>User ID</th>
                <th>Buku ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "select * from koleksipribadi ");
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $data['koleksi_id'] ?></td>
                    <td><?php echo $data['user_id'] ?></td>
                    <td><?php echo $data['buku_id'] ?></td>
                    <td>
                    <button class="btn btn-info"><i class="fas fa-edit"></i><a style="color:white; text-decoration: none;" href="?page=koleksipribadi/edit&koleksi_id=<?php echo $data['koleksi_id']?>"> Edit</a></button>
                        <button class="btn btn-danger"><i class="fas fa-trash"></i><a style="color:white; text-decoration: none;" href="?page=koleksipribadi/hapus&koleksi_id=<?php echo $data['koleksi_id']?>"> Hapus</a></button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#tabel-data').DataTable();
    });
</script>
