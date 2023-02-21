<?php

require_once('../config/connect.php');

if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['section'];
    $section = $_POST['age'];
    $mark = $_POST['mark'];

    $query = "INSERT INTO `cadets` (`name`, `age`, `section`, `mark`) VALUES ('$name', $age, $section, $mark)";
    mysqli_query($connect, $query);

    header("Location: /");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark --shadowed bg-dark">
        <div class="container">
            <img src="../img/logo.png" alt="" class="navbar-brand">
            <form class="d-flex mt-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container my-5">
        <form action="" method="POST">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="../index.php" class="btn btn shadow btn-success my-3 animate__animated animate__fadeIn">Back</a>
                    <div class="card shadow animate__animated animate__fadeIn">
                    <div class="card-head">
                        <h3 class="mt-4 text-center">Create</h3>
                    </div>
                    <div class="card-body">
                            <div class="my-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="Enter name!">
                            </div>
                           
                            <div class="my-3">
                                <label for="" class="form-label">Section</label>
                                <input type="text" class="form-control" name="section"
                                       placeholder="Enter section!">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Age</label>
                                <input type="number" class="form-control" name="age"
                                       placeholder="Enter age!">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Mark</label>
                                <input type="number" class="form-control" name="mark"
                                       placeholder="Enter mark!">
                            </div>
                    
                            <input type="submit" class="btn btn-primary form-control my-2" value="Create">
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>
</body>
</html>