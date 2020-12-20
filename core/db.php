<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'php_crud');
define('DB_PORT', 8889); // default 3306

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if(mysqli_connect_error()) {
    die('DB connection fail.');
}