<?php

require_once('../lesson/config/connect.php');

$query = 'SELECT * FROM `cadets` WHERE `isDeleted`=0';
$results = mysqli_query($connect, $query);
$results = mysqli_fetch_all($results, MYSQLI_ASSOC);

$tr = 0;
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
        <img src="img/logo.png" alt="" class="navbar-brand">
        <form class="d-flex mt-3">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>

    <div class="container mt-4">
        <a href="/crud/create.php" class="btn btn-lg btn-success my-3 animate__animated animate__bounceInLeft">Create</a>

        <table class="table table-bordered table-striped table-hover text-center shadow animate__animated animate__fadeIn">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Age</th>
                    <th>Mark</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result) { ?>
                <tr>
                    <td><?= ++$tr ?></td>
                    <td class="text-start"><?= $result['name'] ?></td>
                    <td><?= $result['section'] ?></td>
                    <td><?= $result['age'] ?></td>
                    <td><?= $result['mark'] ?></td>
                    <td>
                        <a href="crud/show.php?id=<?= $result['id']?>" class="btn btn-warning text-white">Show</a>
                    </td>
                    <td>
                        <a href="crud/edit.php?id=<?= $result['id']?>" class="btn btn-info text-white">Edit</a>
                    </td>
                    <td>
                        <a href="crud/delete.php?id=<?= $result['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>