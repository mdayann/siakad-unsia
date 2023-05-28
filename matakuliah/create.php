<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Matakuliah Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../util/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Matakuliah Add
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">

                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" maxlength="255">
                            </div>
                            <div class="mb-3">
                                <label>Kode Matakuliah</label>
                                <input type="text" name="kode_matakuliah" class="form-control" maxlength="5">
                            </div>
                            <div class="mb-3">
                                <label>Deskripsi</label>
                                <input type="textarea" name="deskripsi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="add_matakuliah" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>