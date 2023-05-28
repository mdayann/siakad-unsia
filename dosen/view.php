<?php
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

    <title>Dosen View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dosen View Details
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $dosen_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM dosen WHERE id='$dosen_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $dosen = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>Nama</label>
                                    <p class="form-control">
                                        <?= $dosen['nama']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>NIDN</label>
                                    <p class="form-control">
                                        <?= $dosen['nidn']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Jenjang Pendidikan</label>
                                    <p class="form-control">
                                        <?= $dosen['jenjang_pendidikan']; ?>
                                    </p>
                                </div>

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