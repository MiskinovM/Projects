<?php

use LDAP\Result;

$id = $_GET['id'];
require_once '../config/connect.php';

$query = "SELECT * FROM `cadets` WHERE id=$id";
$result = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($result);

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
        <form action="update.php" method="POST">
            <input type="hidden" name='id' value="<?= $result['id'] ?>">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="../index.php" class="btn btn shadow btn-success my-3 animate__animated animate__fadeIn">Back</a>
                    <div class="card shadow animate__animated animate__fadeIn">
                        <div class="card-head">
                            <h3 class="mt-4 text-center">Edit</h3>
                        </div>
                        <div class="card-body">
                            <div class="my-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" value="<?= $result['name'] ?>" class="form-control" name="name"
                                        placeholder="Ismingizni kiriting!">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Section</label>
                                <input type="text" value="<?= $result['section'] ?>" class="form-control" name="section"
                                        placeholder="Guruhingizni kiriting!">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Age</label>
                                <input type="text" value="<?= $result['age'] ?>" class="form-control" name="age"
                                        placeholder="Yoshingizni kiriting!">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Mark</label>
                                <input type="text" value="<?= $result['mark'] ?>" class="form-control" name="mark"
                                        placeholder="Bahoni kiriting!">
                            </div>
                            <input type="submit" class="btn btn-primary form-control my-2" value="Update">
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>
</body>
</html>