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

    <title>Menu Utama</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('../siakad-unsia/util/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Utama
                        </h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="dosen/index.php" class="btn btn-primary">Dosen</a>
                        </div>
                        <br>
                        <div>
                            <a href="mahasiswa/index.php" class="btn btn-primary">Mahasiswa</a>
                        </div>
                        <br>
                        <div>
                            <a href="matakuliah/index.php" class="btn btn-primary">Mata Kuliah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>