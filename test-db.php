<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'hometech', 3307);

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

echo 'Success... ' . mysqli_get_host_info($link) . "\n";
mysqli_close($link);
?>