<!-- ejemplo 7-15 cargador de imagenn upload.php -->


<?php



echo <<<_END


<html>
<head>
    <title>PHP Form upload</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        select File: <input type="file" name="file" id="file">
    <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>


</html>


_END;

if ($_FILES) {
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Uploaded image '$name' <br> <img src='$name'>";
}
echo "</body> </html>"

?>