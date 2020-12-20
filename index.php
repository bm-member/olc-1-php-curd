<?php 

require_once './core/init.php';

if(auth()) {
    redirect(url('/post/index.php'));
}
redirect(url('/auth/login.php'));
