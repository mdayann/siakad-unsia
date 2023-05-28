<?php
session_start();
require '../config/db-conn.php';


if(isset($_POST['add_dosen']))
{
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nidn = mysqli_real_escape_string($conn, $_POST['nidn']);
    $jenjang_pendidikan = mysqli_real_escape_string($conn, $_POST['jenjang_pendidikan']);

    $query = "INSERT INTO dosen (nama,nidn,jenjang_pendidikan) VALUES ('$nama','$nidn','$jenjang_pendidikan')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Dosen Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Dosen Not Created";
        header("Location: create.php");
        exit(0);
    }
}

if(isset($_POST['update_dosen']))
{
    $dosen_id = mysqli_real_escape_string($conn, $_POST['id']);

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nidn = mysqli_real_escape_string($conn, $_POST['nidn']);
    $jenjang_pendidikan = mysqli_real_escape_string($conn, $_POST['jenjang_pendidikan']);

    $query = "UPDATE dosen SET nama='$nama', nidn='$nidn', jenjang_pendidikan='$jenjang_pendidikan' WHERE id='$dosen_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Dosen Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Dosen Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['delete_dosen']))
{
    $dosen_id = mysqli_real_escape_string($conn, $_POST['delete_dosen']);

    $query = "DELETE FROM dosen WHERE id='$dosen_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Dosen Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Dosen Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

$_SESSION['message'] = "404 Not Found";
header("Location: index.php");
exit(0);