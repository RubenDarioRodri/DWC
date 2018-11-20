
<?php
$dir   = 'Web/img';
$files = scandir($dir);
echo json_encode($files);
?>