<?php




// verificacion de la existencia de un archivo


// ejemplo 7-4 creacion de un archivo sencillo de texto


$fh = fopen("testfile.txt", "w") or die('Failed tocreate file');




$text = "test
ff
ff
f
";

fwrite($fh, $text) or die("Could´nt write to file");
fclose($fh);
echo "File 'testfile.txt' written succesfully";

// ejemplo 7-5 - lectura de un archivo con fgets

$fh = fopen("testfile.txt", "r") or die("File doesnt exist or you lack permission to open it");

$line = fgets(($fh));

fclose($fh);

echo $line;


// ejemplo 7-6 - klectura de un archivo con fread()

$fh = fopen("testfile.txt", "r") or die("File doesnt exist or you lack permission to open it");
$text = fread($fh, 3);
fclose($fh);

echo $text;

// copia de archivos

copy('testfile.txt', 'testfile2.txt');

echo "File duccesfully copied to 'testfile2.txt'";

// ejemplo 7-8 sintaxis alternativa para copiar un archivo

if (!rename('testfile2.txt', 'testfile2.new')) {
    echo 'could not rename file';
} else echo "File succesfully renamed to 'testfile2.new'";


# Eliminacion de archivos


// ejemplo 7-10 eliminacion de un archivo


if (unlink(!'testfile2.new')) {

    echo "could not delete file";
} else {
    echo "file 'testfile2.new' deleted succesfully";
}

// actualizacion de archivos

$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");

$text = fgets($fh);

fseek($fh, 0, SEEK_END);

fwrite($fh,"$text") or die("could not write to file");

fclose($fh);

echo "File 'testfile.txt' succesfully";

// bloqueo de archivos

// ejemplo 7-12

$fh=fopen('testfile.txt','r+') or die('Failed tod open file');

$text=fgets($fh);

if (flock($fh,LOCK_EX)) {
    # code...
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die('Could not write to file');
    flock($fh, LOCK_UN);
}
fclose($fh);
echo "File 'testfile.txt' succesfully updated";

// lectura de archivos completos

// ejemplo 7-13 - file_gets_contents


echo "<pre>";

echo file_get_contents("testfile.txt");

echo "</pre>";

