<?php
$file=fopen("store.txt", "r");

while(!feof($file)) {
    $doc = fgets($file);
    echo $doc;
    echo "<br>";
}
?>