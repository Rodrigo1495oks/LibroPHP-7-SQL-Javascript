<?php

require_once 'login.php';

$conn=new mysqli($hn,$un,$pw,$db);

if ($conn->connect_error) {
    die("Fatal error");
}

$query="DROP TABLE cats";

$result=$conn->query($query);

if ($result) {
    die("database acces failed");
}



?>