<?php

function validateForm() {
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    $validFields = $username && $password;
    $formSubmited = isset($_POST['submit']);
    $formValid =  $formSubmited && $validFields;

    if (!$validFields && $formSubmited) {
        echo "You need to fill out all fields";
    }

    return $formValid? true : false;
}