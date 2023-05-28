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

    <title>Dosen Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../util/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dosen Add
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
                                <label>NIDN</label>
                                <input type="text" name="nidn" class="form-control" maxlength="8">
                            </div>
                            <div class="mb-3">
                                <label class="mr-sm-2">Jenjang Pendidikan</label>
                                <select class="custom-select mr-sm-2" name="jenjang_pendidikan" required>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="add_dosen" class="btn btn-primary">Save</button>
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