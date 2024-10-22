<?php
    $host = '127.0.0.1';
    $database = 'dbawdp4toqcfey';
    $username = 'ui3c9zrg4e6xg';
    $password = '422@2dfn~3A1';

    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con) {
        die('Unable to connect to the database: ' . mysqli_connect_error());
    }
?>
