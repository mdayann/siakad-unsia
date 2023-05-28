<?php
session_start();
require '../config/db-conn.php';


if(isset($_POST['add_mahasiswa']))
{
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);

    $query = "INSERT INTO mahasiswa (nama,nim,program_studi) VALUES ('$nama','$nim','$program_studi')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Mahasiswa Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "mahasiswa Not Created";
        header("Location: create.php");
        exit(0);
    }
}

if(isset($_POST['update_mahasiswa']))
{
    $mahasiswa_id = mysqli_real_escape_string($conn, $_POST['id']);

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $program_studi = mysqli_real_escape_string($conn, $_POST['program_studi']);

    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', program_studi='$program_studi' WHERE id='$mahasiswa_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Mahasiswa Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Mahasiswa Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['delete_mahasiswa']))
{
    $mahasiswa_id = mysqli_real_escape_string($conn, $_POST['delete_mahasiswa']);

    $query = "DELETE FROM mahasiswa WHERE id='$mahasiswa_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Mahasiswa Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Mahasiswa Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

$_SESSION['message'] = "404 Not Found";
header("Location: index.php");
exit(0);