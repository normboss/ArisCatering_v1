<!DOCTYPE html>
<html>

<head>
    <title>Drag and Drop File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="../css/getimage2.css" media="screen" rel="stylesheet" type="text/css">
</head>

<body>
    <main>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </main>
</body>

</html>