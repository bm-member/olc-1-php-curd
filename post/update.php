<?php

require_once '../core/init.php';

$id = $_POST['id'] ?? '';
$title = $_POST['title'] ?? '';
$body = $_POST['body'] ?? '';

if($id !== '' && $title !== '' && $body !== '') {
    $sql = "UPDATE posts SET title='$title', body='$body' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
}

redirect('index.php');