<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) {
    die("<br> Fatal Error");
}

$user=mysql_entities_fix_string($conn, $_POST['user']);
$pass=mysql_entities_fix_string($conn, $_POST['pass']);
$query="SELECT * FROM users WHERE user='$user' AND pass='$pass'";
// etc.

$result=$conn->query($query);



if (!$result) {
    die("Fatal Error");
}


function mysql_fix_string($conn, $string){
    if (get_magic_quotes_gpc()) {
        $string=stripslashes($string);
        return $conn->real_scape_string($string);
    }
}

function mysql_entities_fix_string($conn,$string){
    return htmlentities(mysql_fix_string($conn,$string));
}


?>