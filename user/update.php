<?php

require_once '../core/init.php';

$id = $_POST['id'] ?? '';
$name = $_POST['name'] ?? '';

if($id !== '' && $name !== '') {
    $sql = "UPDATE users SET name='$name' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
}

redirect(url('/user/index.php'));