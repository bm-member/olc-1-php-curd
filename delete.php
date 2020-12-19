<?php

require_once './init.php';

$id = $_GET['id'] ?? '';

$sql = "DELETE FROM posts WHERE id='$id'";
$result = mysqli_query($conn, $sql);

redirect('index.php');