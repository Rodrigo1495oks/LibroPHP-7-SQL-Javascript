<?php



require_once 'login.php';

$conn=new mysqli($hn,$un,$pw,$db);

if ($conn->connect_error) {
    die('Fatal Error');
}

$query="INSERT INTO cats VALUES(NULL, 'Lynx','Stumpy',5)";


$result=$conn->query($query);


if (!$result) {
    die('Database access failed');
}

// insert id

echo "The insert Id was: ". $conn->insert_id;

?>