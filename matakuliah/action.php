<?php
session_start();
require '../config/db-conn.php';


if(isset($_POST['add_matakuliah']))
{
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kode_matakuliah = mysqli_real_escape_string($conn, $_POST['kode_matakuliah']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $query = "INSERT INTO matakuliah (nama,kode_matakuliah,deskripsi) VALUES ('$nama','$kode_matakuliah','$deskripsi')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Matakuliah Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Matakuliah Not Created";
        header("Location: create.php");
        exit(0);
    }
}

if(isset($_POST['update_matakuliah']))
{
    $matakuliah_id = mysqli_real_escape_string($conn, $_POST['id']);

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kode_matakuliah = mysqli_real_escape_string($conn, $_POST['kode_matakuliah']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $query = "UPDATE matakuliah SET nama='$nama', kode_matakuliah='$kode_matakuliah', deskripsi='$deskripsi' WHERE id='$matakuliah_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Matakuliah Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Matakuliah Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['delete_matakuliah']))
{
    $matakuliah_id = mysqli_real_escape_string($conn, $_POST['delete_matakuliah']);

    $query = "DELETE FROM matakuliah WHERE id='$matakuliah_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Matakuliah Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Matakuliah Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

$_SESSION['message'] = "404 Not Found";
header("Location: index.php");
exit(0);