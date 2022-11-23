<?php
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

    <title>Pekerja View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pekerjat View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Id</label>
                                        <p class="form-control">
                                            <?=$pekerja['id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama Pekerja</label>
                                        <p class="form-control">
                                            <?=$pekerja['nama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>No Kad Pengenalan</label>
                                        <p class="form-control">
                                            <?=$pekerja['noKP'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jantina</label>
                                        <p class="form-control">
                                            <?=$pekerja['jantina'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>No Handphone</label>
                                        <p class="form-control">
                                            <?=$pekerja['noHP'];?>
                                        </p>
                                    </div>

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