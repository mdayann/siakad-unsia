<?php
session_start();
require '../config/db-conn.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dosen CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('../util/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dosen Details
                            <a href="create.php" class="btn btn-primary float-end">Add Dosen</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>NIDN</th>
                                    <th>Jenjang Pendidikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM dosen";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $dosen) {
                                ?>
                                        <tr>
                                            <td><?= $dosen['id']; ?></td>
                                            <td><?= $dosen['nama']; ?></td>
                                            <td><?= $dosen['nidn']; ?></td>
                                            <td><?= $dosen['jenjang_pendidikan']; ?></td>
                                            <td>
                                                <a href="../dosen/view.php?id=<?= $dosen['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="../dosen/edit.php?id=<?= $dosen['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <form action="../dosen/action.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_dosen" value="<?= $dosen['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                    <div class="card-header">
                            <a href="../index.php" class="btn btn-primary float-end">Menu Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>