<?php
session_start();

// donate.txt file
$donate_path = "database/donate.txt";

// if file does not exist, create file with 0
if(!file_exists($donate_path)) {
    $file = fopen($donate_path, "w");
    fwrite($file, 0);
}

$GP = $_POST;

//if donate is set
if(isset($GP["donate"])) {
    $donate = trim($GP["donate"]);
    $donate = (int) $donate;

    //read donations sum from database
    $file = fopen($donate_path, "r");

    $number = intval(trim(fgets($file)));

    $number = $number + $donate;

    fclose($file);
    $file = fopen($donate_path, "w");
    if(!fwrite($file, $number)) {
        header("Status: 500");
    } else {
        header("Status: 200");
    }
    fclose($file);
}