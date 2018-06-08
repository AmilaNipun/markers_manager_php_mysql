<?php
// Opens a connection to a MySQL server.
$host = "localhost";
$usr = "root";
$pwd = "1234";
$dbname = "maplocation";

$connection=mysqli_connect ($host, $usr, $pwd,$dbname);
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}