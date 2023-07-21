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

    if (!in_array($fileType, $allowedTypes)) {
        echo 'Wrong file extension';
        return;
    }

    if ($fileType == 'jpg' || $fileType == 'jpeg') {
        if (move_uploaded_file($files["tmp_name"][$key], $targetFilePath)) {
            $resized = imagescale(imagecreatefromjpeg("uploads/" . $fileName), $width, $height);
            $background = imagecolorallocate($resized, 0, 0, 0);

            imagecolortransparent($resized, $background);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagejpeg($resized, 'uploads/' . $fileName);

            // echo 'Successful';
            // return;
        }
    }

    if ($fileType == 'gif') {
        if (move_uploaded_file($files["tmp_name"][$key], $targetFilePath)) {
            $resized = imagescale(imagecreatefromgif("uploads/" . $fileName), $width, $height);
            $background = imagecolorallocate($resized, 0, 0, 0);

            imagecolortransparent($resized, $background);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagegif($resized, 'uploads/' . $fileName);

            // echo 'Successful';
            // return;
        }
    }

    if ($fileType == 'png') {
        if (move_uploaded_file($files["tmp_name"][$key], $targetFilePath)) {
            $resized = imagescale(imagecreatefrompng("uploads/" . $fileName), $width, $height);
            $background = imagecolorallocate($resized, 0, 0, 0);

            imagecolortransparent($resized, $background);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagepng($resized, 'uploads/' . $fileName);

            // echo 'Successful';
            // return;
        }
    }
}
