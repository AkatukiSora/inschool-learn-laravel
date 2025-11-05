<?php

$filename = "dog.jpg";
$filepath = "../images/" . $filename;

header('Content-Type: application/jpg');
header('Content-Length: '.filesize($filepath));
header('Content-Disposition: attachment; filename=download.jpg');

readfile($filepath);
exit();

?>
