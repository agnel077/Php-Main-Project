<?php
$host = '172.31.22.43';
$username = 'Agnel200555888';
$password = '0ls-0ahZnU';
$database = 'Agnel200555888';

$db = mysqli_connect($host, $username, $password, $database);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>