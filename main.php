<?php
$files = $_FILES['images'];
$width = $_POST['width'];
$height = $_POST['height'];

$targetDir = "uploads/";
$allowedTypes = array('jpg', 'png', 'jpeg', 'gif');

foreach ($files['name'] as $key => $val) {
    $fileName = basename($files['name'][$key]);
    $targetFilePath = $targetDir . $fileName;

    // Check if file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    if (!in_array($fileType, $allowTypes)) {
        echo 'Wrong file extension';
        return;
    }
}
