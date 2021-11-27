<?php

require_once 'login.php';

$connection=new mysqli($hn,$un,$pw,$db);

$query="SELECT * FROM classics";
$result=$connection->query($query);


if ($connection->connect_error) {
    die('Fatal Error');
}

$rows=$result->nums_rows;
for ($j=0; $j < $rows; $j++) { 
    $result->data_seek($j);
    
    
    echo 'Author: ' .htmlspecialchars($result->fetch_assoc()['author']).'<br>';
    $result->data_seek($j);

    echo 'title: ' .htmlspecialchars($result->fetch_assoc()['title']).'<br>';
    $result->data_seek($j);
    
    echo 'category: ' .htmlspecialchars($result->fetch_assoc()['category']).'<br>';
    $result->data_seek($j);

    echo 'year: ' .htmlspecialchars($result->fetch_assoc()['year']).'<br>';
    $result->data_seek($j);

    echo 'Isbn: ' .htmlspecialchars($result->fetch_assoc()['isbn']).'<br>';
    $result->data_seek($j);

    echo '<br>';
}

$result->close();
$connection->close();

?>

