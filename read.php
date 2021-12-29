<?php
$name = $_POST['name'];
$matric = $_POST["matric"];
$notes = $_POST["notes"];

$file=fopen("store.txt", "a");
fwrite($file, "Name: ");
fwrite($file,$name);
fwrite($file, "\nMatric number: ");
fwrite($file,$matric);
fwrite($file, "\nNotes: ");
fwrite($file,$notes);
fwrite($file,"\n\n");
fclose($file);
?>