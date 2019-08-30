<?php

$file = $_POST['content'];
$filename = $_POST['filename'];

$handle = fopen($filename, 'a');
fwrite($handle, $file);
fclose($handle);

header("Location: ../files/download.html");








?>