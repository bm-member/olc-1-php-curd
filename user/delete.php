<?php

require_once  '../core/init.php';

$id = $_GET['id'] ?? '';

$sql = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);

redirect(url('/user/index.php'));