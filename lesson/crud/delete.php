<?php

require_once '../config/connect.php';

$id = $_GET['id'];
$query = "UPDATE `cadets` SET `isDeleted`=1 WHERE `id`=$id";
mysqli_query($connect, $query);

header("Location: /");

?>