<?php



require_once 'login.php';

$conn=new mysqli($hn,$un,$pw,$db);

if ($conn->connect_error) {
    die('Fatal Error');
}

// $query="INSERT INTO cats VALUES(NULL, 'Lion','Leo',4)";
// $query="INSERT INTO cats VALUES(NULL, 'Cougar','Growler',2)";
$query="INSERT INTO cats VALUES(NULL, 'Chetah','Charly',3)";


$result=$conn->query($query);


if (!$result) {
    die('Database access failded');
}


?>