<!-- ejemplo 7-17 ejecucion de un comando del sistema -->

<?php


$cmd = "dir";

exec(escapeshellcmd($cmd), $output, $status);


if ($status) {
    echo "exec command failed";
} else {
    echo "<pre>";
    foreach ($output as $line) {
        echo htmlspecialchars("$line\n");
        echo "</pre>";
    }
}




?>