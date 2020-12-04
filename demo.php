<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari's Catering Demo Page'</title>
    <link href="../css/upload.css" media="screen" rel="stylesheet" type="text/css">

</head>
<body>

    <main>
<?php

    $myfile = fopen("../includes/image-name.php", "r") or die("Unable to open file!");
    $image = fgets($myfile);
    fclose($myfile);


        echo '<img src="../images/' . $image . '">';
?>
    </main>
    
</body>
</html>