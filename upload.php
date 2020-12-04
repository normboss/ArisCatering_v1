<?php
if (!session_id())
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/upload.css" media="screen" rel="stylesheet" type="text/css">
    <title>Ari's Catering'</title>
</head>

<body>
    <main>
        <?php

        function resizeImage($filename)
        {
            // Get new sizes
            list($width, $height) = getimagesize($filename);
            $aspect = $width / $height;
            $newwidth = 300;
            $newheight = $newwidth / $aspect;

            // Load
            $dest = imagecreatetruecolor($newwidth, $newheight);
            $source = imagecreatefromjpeg($filename);

            if ( $aspect > 1.0 ) {
                $source = imagerotate($source, -90, 0);
            }

            // Resize
            imagecopyresized($dest, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


            // Output
            // imagejpeg($dest, "resized.jpg");
            imagejpeg($dest, "../images/resizedImage.jpg");
        }


        $target_dir = "../images/"; //"uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $alreadyExist = false;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            // echo "Sorry, file already exists.";
            // $uploadOk = 0;
            $alreadyExist = true;
        }

        // Check file size
        // if ($_FILES["fileToUpload"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }

        if ( true ) {
        // if (!$alreadyExist) {

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                    $fname = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
                    // echo '<img src="../img/' . $fname . '">';

                    unlink("../includes/image-name.php");
                    $myfile = fopen("../includes/image-name.php", "w") or die("Unable to open file!");
                    fwrite($myfile, $fname);
                    fclose($myfile);

                    resizeImage($target_file);

                    // echo '<img src="../images/' . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . '">';
                    echo '<script>';
                    echo 'window.location.href = "demo2.php";';
                    echo '</script>';
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            // echo '<img src="../images/' . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . '">';
            echo '<script>';
            echo 'window.location.href = "demo2.php";';
            echo '</script>';
        }
        ?>

        <h1>THE END</h1>
    </main>

</body>

</html>