<?php
     include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>PHP | Calculator</title>

</head>

<body>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6 m-auto">

                <div class="card text-center py-3 m-auto d-flex align-items-center justify-content-center mb-3" style="height: 200px;">
                    <h1 class=""> <?php echo $result ?> </h1>
                </div>

                <!-- FORM BEGINS -->

                <form action="" method="post">

                    <div class="card p-3 mb-4">

                        <div class="d-flex flex-row align-items-center align-items-center justify-content-between flex-wrap">

                            <button type="submit" name="add" class="btn btn-primary">+</button>
                            <button type="submit" name="sub" class="btn btn-success">-</button>
                            <button type="submit" name="mult" class="btn btn-danger">x</button>
                            <button type="submit" name="div" class="btn btn-info">/</button>
                            <button type="submit" name="cancel" class="btn btn-secondary">c</button>

                        </div>

                    </div>

                    <div class="card p-3">

                        <!-- INPUTS -->

                        <div class="form-group">
                            <label for="">First Number</label>
                            <input type="number" name="number_one" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Second Number</label>
                            <input type="number" name="number_two" class="form-control">
                        </div>

                    </div>

                </form>

                <!-- FORM END -->

            </div>

        </div>

    </div>

    <script src="assets/index.js"></script>

</body>

</html>