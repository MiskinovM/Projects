<?php 

require_once('../config/connect.php');

$id = $_GET['id'];

$query = "SELECT * FROM `cadets` WHERE `id`=$id";
$result = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cadets</title>
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
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <a href="../index.php" class="btn btn shadow btn-success my-3 animate__animated animate__fadeIn">Back</a>
                <div class="card shadow bordered animate__animated animate__fadeIn" style="width:400px">
                    <img class="card-img-top" src="../img/profile-img.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title text-center my-4"><?= $result['name']?></h4>
                        <p class="card-text"><span class="text-secondary mx-3">Section:</span> <?= $result['section']?></p>
                        <hr>
                        <p class="card-text"><span class="text-secondary mx-3">Age:</span> <?= $result['age']?></p>
                        <hr>
                        <p class="card-text"><span class="text-secondary mx-3">Mark:</span> <?= $result['mark']?></p>
                        <hr>
                        <a href="../index.php" class="btn btn-primary my-2 form-control">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>

