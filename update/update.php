<?php

function RandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randstring = '';
    for ($i = 0; $i < 10; $i++) {
        if ($i == 0) {
            $randstring = $characters[rand(0, strlen($characters) - 1)];
        } else {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }
    }
    return $randstring;
}

function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}

function uploadImage()
{
    $target_dir = "../images/"; //"uploads/";
    $target_file = $target_dir . basename($_FILES["image-name"]["name"]);
    $uploadOk = 1;
    $alreadyExist = false;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    // if (isset($_POST["submit"])) {
    // if (false) {
    $check = getimagesize($_FILES["image-name"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        echo '<script>';
        echo 'window.location.href = "image-too-large.php"';
        echo '</script>';
        $uploadOk = 0;
    }
    // }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     // echo "Sorry, file already exists.";
    //     // $uploadOk = 0;
    //     $alreadyExist = true;
    // }

    // Check file size
    // if ($_FILES["image-name"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    //     echo '<script>';
    //     echo 'window.location.href = "image-too-large.php"';
    //     echo '</script>';
    // }

    if (true) {
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
            if (move_uploaded_file($_FILES["image-name"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["image-name"]["name"])) . " has been uploaded.";
                $fname = htmlspecialchars(basename($_FILES["image-name"]["name"]));
                // echo '<img src=".../img/' . $fname . '">';

                unlink("../resources/image-name.php");
                $myfile = fopen("../resources/image-name.php", "w") or die("Unable to open file!");
                fwrite($myfile, $fname);
                fclose($myfile);
            } else {
                echo "Sorry, there was an error uploading your file.";
                echo '<script>';
                echo 'window.location.href = "image-too-large.php"';
                echo '</script>';
            }
        }
    }
    return $target_file;
}

function resizeImage($filename)
{
    // Get new sizes
    list($width, $height) = getimagesize($filename);
    if ($width == 0 || $height == 0) {
        return;
    }

    $isJPG = false;
    $isPNG = false;
    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
        $isJPG = true;
    } else if ($imageFileType == "png") {
        $isPNG = true;
    }

    $newWidth = 600;
    if ($newWidth > $width) {
        $newWidth = $width;
    }
    $aspect = $width / $height;
    $newHeight = $newWidth / $aspect;

    // Load
    $dest = imagecreatetruecolor($newWidth, $newHeight);
    if ($isJPG) {
        $source = imagecreatefromjpeg($filename);
    } else if ($isPNG) {
        $source = imagecreatefrompng($filename);
    } else {
        $source = imagecreatefromgif($filename);
    }

    // Output
    // $resizedImage = "../images/resizedImage.jpg";
    $resizedImage = "../images/resizedImage" . RandomString() . ".jpg";
    if (file_exists($resizedImage)) {
        unlink($resizedImage);
    }

    imagecopyresampled($dest, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    if ($isJPG) {
        imagejpeg($dest, $resizedImage);
    } else if ($isPNG) {
        imagepng($dest, $resizedImage);
    } else {
        imagegif($dest, $resizedImage);
    }

    imagedestroy($source);
    imagedestroy($dest);
    return $resizedImage;
}

function rotateImage($filename)
{
    $degrees = -90;
    // Load
    $source = imagecreatefromjpeg($filename);
    // Rotate
    $source = imagerotate($source, $degrees, 0);
    // Output
    imagejpeg($source, $filename);
}

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

    $menuArray = array(
        array("image-name", ""),
        array("monday-date", ""),
        array("monday-heading", ""),
        array("monday-content", ""),
        array("tuesday-date", ""),
        array("tuesday-heading", ""),
        array("tuesday-content", ""),
        array("wednesday-date", ""),
        array("wednesday-heading", ""),
        array("wednesday-content", ""),
        array("thursday-date", ""),
        array("thursday-heading", ""),
        array("thursday-content", ""),
        array("friday-date", ""),
        array("friday-heading", ""),
        array("friday-content", ""),
        array("saturday-date", ""),
        array("saturday-heading", ""),
        array("saturday-content", ""),
    );



    // if ($_FILES["image-name"]["tmp_name"] == "") {
    //     echo '<script>';
    //     echo 'window.location.href = "upload-failed.php"';
    //     echo '</script>';
    // }

    $rotateImage = false;
    if (isset($_POST['rotate']) && $_POST['rotate'] == 'rotate-image') {
        $rotateImage = true;
    }

    $imageName = '';
    $newImage = '';
    for ($i = 0; $i < count($menuArray); $i++) {
        if ($i == 0) {
            if ($_FILES["image-name"]["tmp_name"] != "" && $_FILES["image-name"]["tmp_name"] != "") {
                $imageName = uploadImage();
                $newImage = resizeImage($imageName);
                if ($rotateImage) {
                    rotateImage($newImage);
                }
            }
        }
        $entry = $menuArray[$i];
        if (!empty($_POST[$entry[0]])) {
            $menuArray[$i][1] = $_POST[$entry[0]];
        } else {
            $menuArray[$i][1] = "";
        }
    }


    foreach ($menuArray as $entry) {
        if ($entry[0] == "image-name") {
            if ($newImage != '') {
                $fname = "../resources/image-name.php";
                unlink($fname);
                $myfile = fopen($fname, "w") or die("Unable to open file!");
                fwrite($myfile, $newImage);
                fclose($myfile);
            }
        } else if ($entry[1] != "") {
            $fname = "../resources/" . $entry[0] . ".php";
            unlink($fname);
            $myfile = fopen($fname, "w") or die("Unable to open file!");
            fwrite($myfile, $entry[1]);
            fclose($myfile);
        }
    }

    array_map('unlink', glob("./copy/*.php"));

    $randomFname = "./copy/";
    $randomFname .= RandomString();
    $randomFname .= ".php";

    copy("./copy/index.ref", $randomFname);

    echo '<script>';
    // echo 'window.location.href = "../index.php"';
    echo 'window.location.href = "' . $randomFname . '"';
    echo '</script>';
}
?>

<!-- ****************************************************************************************** -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering'</title>

    <link href="../css/udpate-menu.css" media="screen" rel="stylesheet" type="text/css">


</head>

<body>
    <main>

        <form action="update.php" method="post" enctype="multipart/form-data">

            <div class="menu-section">

                <div class="menu-header">
                    <p>UPDATE MENU:</p>
                    <img src="../images/<?php require '../resources/image-name.php' ?>" alt="">

                    <div class="upload-image">
                        <label for="image-name">Select photo</label>
                        <input type="file" name="image-name" id="image-name" value="../images/<?php require '../resources/image-name.php' ?>">
                    </div>
                    <div class="rotate-image">
                        <input type="checkbox" id="rotate" name="rotate" value="rotate-image">
                        <label for="rotate">Rotate the Image</label>
                    </div>
                </div>

                <div class="menu-item">
                    <div id="monday" class="day-header">
                        <textarea spellcheck="true" name="monday-date" rows="1" cols="20"><?php require '../resources/monday-date.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-summary">
                        <textarea spellcheck="true" name="monday-heading" rows="5" cols="20"><?php require '../resources/monday-heading.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-content">
                        <textarea spellcheck="true" name="monday-content" rows="5" cols="20"><?php require '../resources/monday-content.php';  ?></textarea spellcheck="true" >
                    </div>
                </div>

                <div class="menu-item">
                    <div id="tuesday" class="day-header">
                        <textarea spellcheck="true" name="tuesday-date" rows="1" cols="20"><?php require '../resources/tuesday-date.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-summary">
                        <textarea spellcheck="true" name="tuesday-heading" rows="5" cols="20"><?php require '../resources/tuesday-heading.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-content">
                        <textarea spellcheck="true" name="tuesday-content" rows="5" cols="20"><?php require '../resources/tuesday-content.php';  ?></textarea spellcheck="true" >
                    </div>
                </div>

                <div class="menu-item">
                    <div id="wednesday" class="day-header">
                        <textarea spellcheck="true" name="wednesday-date" rows="1" cols="20"><?php require '../resources/wednesday-date.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-summary">
                        <textarea spellcheck="true" name="wednesday-heading" rows="5" cols="20"><?php require '../resources/wednesday-heading.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-content">
                        <textarea spellcheck="true" name="wednesday-content" rows="5" cols="20"><?php require '../resources/wednesday-content.php';  ?></textarea spellcheck="true" >
                    </div>
                </div>

                <div class="menu-item">
                    <div id="thursday" class="day-header">
                        <textarea spellcheck="true" name="thursday-date" rows="1" cols="20"><?php require '../resources/thursday-date.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-summary">
                        <textarea spellcheck="true" name="thursday-heading" rows="5" cols="20"><?php require '../resources/thursday-heading.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-content">
                        <textarea spellcheck="true" name="thursday-content" rows="5" cols="20"><?php require '../resources/thursday-content.php';  ?></textarea spellcheck="true" >
                    </div>
                </div>

                <div class="menu-item">
                    <div id="friday" class="day-header">
                        <textarea spellcheck="true" name="friday-date" rows="1" cols="20"><?php require '../resources/friday-date.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-summary">
                        <textarea spellcheck="true" name="friday-heading" rows="5" cols="20"><?php require '../resources/friday-heading.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-content">
                        <textarea spellcheck="true" name="friday-content" rows="5" cols="20"><?php require '../resources/friday-content.php';  ?></textarea spellcheck="true" >
                    </div>
                </div>

                <div class="menu-item">
                    <div id="saturday" class="day-header">
                        <textarea spellcheck="true" name="saturday-date" rows="1" cols="20"><?php require '../resources/saturday-date.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-summary">
                        <textarea spellcheck="true" name="saturday-heading" rows="5" cols="20"><?php require '../resources/saturday-heading.php';  ?></textarea spellcheck="true" >
                    </div>
                    <div class="meal-content">
                        <textarea spellcheck="true" name="saturday-content" rows="5" cols="20"><?php require '../resources/saturday-content.php';  ?></textarea spellcheck="true" >
                    </div>
                </div>

            </div>
            <input class="submit-button" type="submit" value="Submit Changes">

        </form>

    </main>

    <!-- <script>
        window.location.href = "index.php";
    </script> -->


</body>

</html>