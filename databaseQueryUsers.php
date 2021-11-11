<?php

session_start();

// users.txt file
$users_path = "database/users.txt";

// all usernames and passwords
$UPTable = array();

//read users from database
$file = fopen($users_path, "r");

while ($userAndPassword = stream_get_line($file, 1000, ",")) {
    $UPTable[] = explode(" ", $userAndPassword);
    //print_r($UPTable);
}

fclose($file);

// get the user and password parameter from POST
$GP = $_POST;
$user = trim($GP["user"]);
$password = trim($GP["password"]);

//if $user and $password from POST are not empty
if (!empty($user) && !empty($password)) {
    // lookup all users from database
    foreach ($UPTable as $userAndPassword) {
        //if match
        //print_r($userAndPassword);
        //echo "First", $user == $userAndPassword[0];
        //echo "Second", strval($password) == strval($userAndPassword[1]);
        if (strval($user) == strval(trim($userAndPassword[0])) and strval($password) == strval(trim($userAndPassword[1]))) {
            // return Status 200
            header("Status: 200");
            $_SESSION["username"] = $user;
            return;
        }
    }
    //if no user and password found, Status 404
    header("Status: 404");
    return;
} else {
    //if $user or $password from POST are empty, Status 400
    header("Status: 400");
}
