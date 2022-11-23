<?php
session_start();
require 'dbcont.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>pekerja Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pekerja Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM pekerja WHERE id='$pekerja_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $pekerja['id']; ?>">

                                    <div class="mb-3">
                                        <label>Id</label>
                                        <input type="text" name="id" value="<?=$pekerja['id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama Pekerja</label>
                                        <input type="email" name="nama" value="<?=$pekerja['nama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No Kad Pengenalan</label>
                                        <input type="text" name="noKP" value="<?=$pekerja['noKP'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>jantina</label>
                                        <input type="text" name="jantina" value="<?=$pekerja['jantina'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No Handphone</label>
                                        <input type="text" name="noHP" value="<?=$pekerja['npHP'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="updatet" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
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