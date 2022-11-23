<?php
session_start();
require 'dbcont.php';

if(isset($_POST['delete']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM pekerja WHERE id='$pekerja_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Pekerja Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pekerja Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['updatePekerja']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['pekerja_id']);

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $noKP = mysqli_real_escape_string($con, $_POST['noKP']);
    $jantina = mysqli_real_escape_string($con, $_POST['jantina']);
    $noHP = mysqli_real_escape_string($con, $_POST['noHP']);

    $query = "UPDATE pekerja SET id='$id' nama='$nama', noKP='$noKP', jantina='$jantina', noHP='$noHP' WHERE id='$pekerja_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Pekerja Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pekerja Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_pekerja']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $noKP = mysqli_real_escape_string($con, $_POST['noKP']);
    $jantina = mysqli_real_escape_string($con, $_POST['jantina']);
    $noHP = mysqli_real_escape_string($con, $_POST['noHP']);

    $query = "INSERT INTO pekerja (id,nama,noKP,jantina,noHP) VALUES ('$id','$nama','$noKP','$jantina','$noHP')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Pekerja Created Successfully";
        header("Location: pekerja-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "pekerja Not Created";
        header("Location: pekerja-create.php");
        exit(0);
    }
}

?>