<?php
include('upload.php');
$targetDir = 'uploads/';
    $uploadedFiles = scandir($targetDir);

    echo "<h2>Uploaded Files:</h2>";
    echo "<ul>";
    foreach ($uploadedFiles as $file) {
        if ($file !== '.' && $file !== '..') {
            $fileUrl = $targetDir . $file;
            echo "<li><a href=\"$fileUrl\" target=\"_blank\">$file</a></li>";
        }
    }
    echo "</ul>";
    ?>

?>