<?php

// all usernames and passwords
$UPTable = array();

// users.txt file
$users_path = "database/users.txt";

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
        if (strval($user) == strval(trim($userAndPassword[0]))) {
            // return Status 422: username already exists
            header("Status: 422");
            return;
        }
    }
    //if no username found, create user and return Status 200
    $data = "$user $password,\r\n";
    $file = fopen($users_path, "a");
    if(!fwrite($file, $data)) {
        //if cannot write to file, return Status 500 (Server Error)
        header("Status: 500");
        return;
    }
    header("Status: 200");
    return;
} else {
    //if $user or $password from POST are empty, Status 400
    header("Status: 400");
}
