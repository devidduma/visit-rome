<?php

session_start();

$GP = $_POST;

if(isset($_SESSION['username'])) {
    $user = $_SESSION['username'];

    if(isset($GP['cookies']) && $GP['cookies'] == 1) {
        setcookie("cookie1", 'Hello '. $user . ', how are you?', time()+1000);
        print($_COOKIE[$user]);
    }
}

?>