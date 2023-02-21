<?php

$id = $_POST['id'];

require_once '../config/connect.php';

$name = $_POST['name'];
$section = $_POST['section'];
$age = $_POST['age'];
$mark = $_POST['mark'];

$query = "UPDATE `cadets` SET `name`='$name', `section`='$section', `age`=$age, `mark`=$mark WHERE `id`=$id";
mysqli_query($connect, $query);

header("Location: /");

?>