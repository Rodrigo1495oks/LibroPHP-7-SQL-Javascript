<?php



require_once 'login.php';

$conn=new mysqli($hn,$un,$pw,$db);

if ($conn->connect_error) {
    die('Fatal Error');
}


$stmt=$conn->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
$stmt->bind_param("sssss",$author,$title,$year,$isbn,$category);


$author="Emily Bronte";
$title='Wuthering Heights';
$category='Classics Fiction';
$year='1847';
$isbn='9780553212587';

$stmt->execute();
printf("%d Row inserted.\n",$stmt->affected_rows);
$stmt->close();
$conn->close();


?>

