<?php // formtest.php

echo <<<_END

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formtest</title>
</head>
<body>
    <form action="formtest.php" method="post">
        What is your name?
        <input type="text" name="name" id="name">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


_END;




?>

