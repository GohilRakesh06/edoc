<?php

    $database= new mysqli("74.225.201.58","rakesh","mypass@123","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
