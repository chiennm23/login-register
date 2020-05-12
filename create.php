<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "function.php";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $contact = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
    ];

    saveData($contact, "data.json");
    header("Location:index.php");

}

