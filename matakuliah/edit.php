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

    <title>Matakuliah Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../util/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Matakuliah Edit
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $matakuliah_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM matakuliah WHERE id = '$matakuliah_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $matakuliah = mysqli_fetch_array($query_run);
                        ?>
                                <form action="../matakuliah/action.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $matakuliah['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nama Matakuliah</label>
                                        <input type="text" name="nama" value="<?= $matakuliah['nama']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kode Matakuliah</label>
                                        <input type="text" name="kode_matakuliah" value="<?= $matakuliah['kode_matakuliah']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Deskripsi</label>
                                        <input type="textarea" name="deskripsi" value="<?= $matakuliah['deskripsi']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_matakuliah" class="btn btn-primary">
                                            Update Matakuliah
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>