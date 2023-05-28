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

    <title>Dosen Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../util/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dosen Edit
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $dosen_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM dosen WHERE id = '$dosen_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $dosen = mysqli_fetch_array($query_run);
                        ?>
                                <form action="../dosen/action.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $dosen['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nama Dosen</label>
                                        <input type="text" name="nama" value="<?= $dosen['nama']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>NIDN</label>
                                        <input type="text" name="nidn" value="<?= $dosen['nidn']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mr-sm-2">Jenjang Pendidikan</label>
                                        <select class="custom-select mr-sm-2" name="jenjang_pendidikan" required>
                                            <option value="<?= $dosen['jenjang_pendidikan']; ?>"><?= $dosen['jenjang_pendidikan']; ?></option>
                                            <option value="S2">S2</option>
                                            <option value="S2">S3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_dosen" class="btn btn-primary">
                                            Update Dosen
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