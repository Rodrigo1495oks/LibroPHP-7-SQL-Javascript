<!-- ejemplo 7-15 cargador de imagenn upload.php -->


<?php



echo <<<_END


<html>
<head>
    <title>PHP Form upload</title>
</head>

<body>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
        select a JPG, GIF, PNG or TIF File: <input type="file" name="filename" id="file" size="10">
    <input type="submit" name="submit" id="submit" value="Upload">
    </form>
</body>


</html>


_END;

if ($_FILES) {
    $name = $_FILES['filename']['name'];
    $name = strtolower(preg_replace("/[´A-Za-z0-9.]/", "", $name));

    switch ($_FILES['filename']['type']) {
        case 'image/jpeg':
            $ext = 'jpg';
            break;
        case 'image/gif':
            $ext = 'gif';
            break;
        case 'image/png':
            $ext = 'png';
            break;
        case 'image/tiff':
            $ext = 'tiff';
            break;
            case 'image/pjpeg':
                $ext = 'jpeg';
                break;
        default:
            # code...
            $ext = '';
            break;
    }
    
    if ($ext) {
        $n = "image.$ext";
        move_uploaded_file($_FILES['filename']['tmp_name'], $name);
        echo "Uploaded image '$name' as $n: <br> <img src='$name'>";
    } else {
        echo "'$name' is not accepted namefile";
    }
} else {
    echo "no image has been uploaded";
}
echo "</body> </html>"

?>