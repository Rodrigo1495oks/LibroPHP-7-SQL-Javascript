<?php

require_once 'login.php';

$connection=new mysqli($hn,$un,$pw,$db);

$query="SELECT * FROM classics";
$result=$connection->query($query);


if ($connection->connect_error) {
    die('Fatal Error');
}

$rows=$result->num_rows;
for ($j=0; $j < $rows; $j++) { 
    $row=$result->fetch_array(MYSQLI_ASSOC);

    echo 'Author: '. htmlspecialchars($row['author']).'<br>';
    echo 'title: '. htmlspecialchars($row['title']).'<br>';
    echo 'category: '. htmlspecialchars($row['category']).'<br>';
    echo 'year: '. htmlspecialchars($row['year']).'<br>';
    echo 'isbn: '. htmlspecialchars($row['isbn']).'<br>';
    echo '<br> <br>';
}

$result->close();
$connection->close();

?>

