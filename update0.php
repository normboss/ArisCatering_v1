<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "update";
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
    $target_dir = "./images/"; //"uploads/";
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
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        // $uploadOk = 0;
        $alreadyExist = true;
    }

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
                // echo '<img src="./img/' . $fname . '">';

                unlink("./resources/image-name.php");
                $myfile = fopen("./resources/image-name.php", "w") or die("Unable to open file!");
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

function resizeImage($filename, $rotateImage)
{
    // Get new sizes
    list($width, $height) = getimagesize($filename);
    if ($width == 0 || $height == 0) {
        return;
    }

    $newWidth = 600;
    if ($newWidth > $width) {
        $newWidth = $width;
    }
    $aspect = $width / $height;
    $newHeight = $newWidth / $aspect;

    // Load
    if ($rotateImage) {
        $dest = imagecreatetruecolor($newHeight, $newWidth);
    } else {
        $dest = imagecreatetruecolor($newWidth, $newHeight);
    }
    $source = imagecreatefromjpeg($filename);

    // Output
    $resizedImage = "./images/resizedImage.jpg";
    if (file_exists($resizedImage)) {
        unlink($resizedImage);
    }

    // if ($aspect > 1.0) {
    if ($rotateImage) {
        $rotatedImage = imagerotate($source, -90, 0);
        if ( $rotatedImage == false ) {
            echo '<script>';
            echo 'window.location.href = "not-enough-memory-for-rotate.php"';
            echo '</script>';
                    }
        imagecopyresampled($dest, $rotatedImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($rotatedImage, $resizedImage);
        imagedestroy($rotatedImage);
    } else {
        imagecopyresampled($dest, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($dest, $resizedImage);
        imagedestroy($source);
    }
    imagedestroy($dest);
}

$content1 = "";
$content2 = "";
echo '<script>';
echo 'window.location.href = "index.php"';
echo '</script>';


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
);


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if ($_FILES["image-name"]["tmp_name"] == "") {
        echo '<script>';
        echo 'window.location.href = "upload-failed.php"';
        echo '</script>';
    }

    $rotateImage = false;
    if (isset($_POST['rotate']) && $_POST['rotate'] == 'rotate-image') {
        $rotateImage = true;
    }

    // $numEvents = $_POST["number-of-events"];
    // if (is_numeric($numEvents)) {
    //     $fname = "./resources/number-of-events.php";
    //     unlink($fname);
    //     $myfile = fopen($fname, "w") or die("Unable to open file!");
    //     fwrite($myfile, $numEvents);
    //     fclose($myfile);
    // } else {
    //     die("Number of events value is not a number!");
    // }

    for ($i = 0; $i < count($menuArray); $i++) {
        if ($i == 0) {
            $imageName = uploadImage();
            resizeImage($imageName, $rotateImage);
        }
        $entry = $menuArray[$i];
        if (!empty($_POST[$entry[0]])) {
            $menuArray[$i][1] = $_POST[$entry[0]];
        } else {
            $menuArray[$i][1] = "";
        }
    }
}


foreach ($menuArray as $entry) {
    if ($entry[1] != "") {
        $fname = "./resources/" . $entry[0] . ".php";
        unlink($fname);
        $myfile = fopen($fname, "w") or die("Unable to open file!");
        fwrite($myfile, $entry[1]);
        fclose($myfile);
    }
}


// if ($content1 != "") {
//     unlink("./includes/exhibit-content1.php");
//     $myfile = fopen("./includes/exhibit-content1.php", "w") or die("Unable to open file!");
//     fwrite($myfile, $content1);
//     fclose($myfile);
//     echo "<meta http-equiv='refresh' content='0'>";
// }


// header("Refresh:0; url=exhibits.php");
// echo "<meta http-equiv='refresh' content='0'>";

echo '<script>';
echo 'window.location.href = "index.php"';
echo '</script>';
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function pretty() {
        $("#contact-form").attr("action", "misc.php");
    }
</script>


</body>

</html>