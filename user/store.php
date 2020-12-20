<?php

require_once '../core/init.php';

$name = $_POST['name'] ?? '';

if(trim($name) === '') {
    session_set('error_message', 'User\'s name is required.');
    redirect(url('/user/create.php'));
} else {
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $result = mysqli_query($conn, $sql);
    session_set('success_message', 'A user was created.');
}

redirect(url('/user/index.php'));