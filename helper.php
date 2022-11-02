<?php

    $host = 'localhost';
    $user = 'root';
    $pass = 'anif123';
    $db = 'latihan_api';

    $conn = mysqli_connect($host, $user, $pass, $db) or die ('Unable connect');

    header('Content-Type: application/json');

?>