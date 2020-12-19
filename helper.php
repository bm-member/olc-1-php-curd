<?php 

session_start();

function dd($data)
{
    echo "<pre>" . print_r($data, true) . " </pre>";
    die();
}

function redirect($url)
{
    header('Location: ' . $url);
    die();
}

function session_set($key, $value)
{
    $_SESSION[$key] = $value;
}

function session_get($key)
{
    echo $_SESSION[$key] ?? '';
    unset($_SESSION[$key]);
}

function session_has($key)
{
    return isset($_SESSION[$key]);
}