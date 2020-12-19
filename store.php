<?php

require_once './init.php';

$title = $_POST['title'] ?? '';
$body = $_POST['body'] ?? '';

if(trim($title) === '' || trim($body) === '') {
    session_set('error_message', 'Post title and body is required.');
    redirect('create.php');
} else {
    $sql = "INSERT INTO posts (title, body) VALUES ('$title', '$body')";
    $result = mysqli_query($conn, $sql);
    session_set('success_message', 'A post was created.');
}

redirect('index.php');