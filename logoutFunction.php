<?php

session_start();

$GP = $_POST;

if(isset($GP['logout']) && $GP['logout'] == 1) {
    unset($_SESSION['username']);
    setcookie("cookie1", "", time() - 3600);
    session_destroy();
    if(isset($_SESSION['username'])) {
        print "Is set";
    } else {
        print "Unset";
    }
}