<?php

$f=$c='';

if (isset($_POST['f'])) {
    # code...
    $f=sanitizeString($_POST['f']);
    $c=sanitizeString($_POST['c']);
}

if (is_numeric($f)) {
    $c=intval((5/9)*$f-32);
    $out="$f &deg;f equals $c &deg;c";
}else if (is_numeric($c)) {
    $f=intval((9/5)*$c+32);
    $out="$c &deg;c equals $f &deg;f";
}else{
    $out='';
}

echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Convert</title>
</head>
<body>
    <pre>
    ENter eithter Farenheit or Celsius and click on convert
    <b>$out</b>
    <form action="" method="post">
        Farenheit <input type="text" name="f" id="f" size="7">
        Celsius   <input type="text" name="c" id="c" size="7">
                    <input type="submit" value="Convert">
    </form>

    </pre>
</body>
</html>


_END;

function sanitizeString($var){
    if (get_magic_quotes_gpc()) {
        $var=stripslashes($var);
    }
    $var=strip_tags($var);
    $var=htmlentities($var);
    return $var;
}
?>

