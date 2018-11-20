
<?php
$dir   = 'img';
$files = scandir($dir);
echo json_encode($files);
?>